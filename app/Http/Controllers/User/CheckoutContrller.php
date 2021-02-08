<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ShipDistrict;
use App\Models\ShipState;
use Illuminate\Http\Request;
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
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['notes'] = $request->notes;
        $data['division_id'] = $request->division_id;
        $data['district_id'] = $request->district_id;
        $data['state_id'] = $request->state_id;
        $data['post_code'] = $request->post_code;

        if($request->payment_method == 'stripe'){
            $cartTotal = Cart::total();
            return view('fontend.payment.stripe',compact('data','cartTotal'));
        }elseif($request->payment_method == 'card'){
            return 'card';
        }else{
            return 'handcash';
        }
    }
}
