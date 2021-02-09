<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ShipDistrict;
use App\Models\ShipState;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Cart;

class CheckoutContrller extends Controller
{
    public function getDistrict(Request $request)
    {
        $district  = ShipDistrict::where('division_id',$request->division_id)->get();
        return response()->json($district);
    }
    public function getState(Request $request)
    {
        $state  = ShipState::where('district_id',$request->district_id)->get();
        return response()->json($state);
    }
    public function checkoutStore(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'shipping_phone' => ['required','regex:/(^(\+8801|8801|01|008801))[1|5-9]{1}(\d){8}$/'],
        ]);
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['notes'] = $request->notes;
        $data['division_id'] = $request->division_id;
        $data['district_id'] = $request->district_id;
        $data['state_id'] = $request->state_id;
        $data['post_code'] = $request->post_code;
        $cartTotal = Cart::total();

        if(Session::has('coupon')){
            $amount = session::get('coupon')['total_amount'];
        }else{
            $amount = round(Cart::total());
        }
        $carts = Cart::content();

        if($request->payment_method == 'stripe'){
            return view('fontend.payment.stripe',compact('data','cartTotal'));
        }elseif($request->payment_method == 'sslHost'){
            return view('fontend.payment.hosted-payment',compact('data','cartTotal','amount','carts'));
        }elseif($request->payment_method == 'card'){
            return view('fontend.payment.easy-payment',compact('data','cartTotal','amount','carts'));
        }else{
            return 'handcash';
        }
    }
}
