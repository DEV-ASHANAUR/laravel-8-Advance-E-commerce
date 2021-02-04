<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::latest()->get();
        return view('admin.coupon.index',compact('coupons'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'coupon_name' => 'required',
            'coupon_discount' => 'required',
            'coupon_validity' => 'required',
        ]);
        $coupon = new Coupon();
        $coupon->coupon_name = strtoupper($request->coupon_name);
        $coupon->coupon_discount = $request->coupon_discount;
        $coupon->coupon_validity = $request->coupon_validity;
        $coupon->created_at = Carbon::now();
        if($coupon->save()){
            $notification=array(
                'message'=>'Successfully Save Coupon',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function delete($id)
    {
        $coupon = Coupon::find($id);
        if($coupon->delete()){
            $notification=array(
                'message'=>'Successfully Delete Coupon',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
