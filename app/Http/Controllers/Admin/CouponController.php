<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
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
            'coupon_name' => 'required|unique:coupons,coupon_name',
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
    public function edit($id)
    {
        $editdata = Coupon::find($id);
        return view('admin.coupon.edit',compact('editdata'));
    }
    public function update(CouponRequest $request,$id)
    {
        $coupon = Coupon::find($id);
        $coupon->coupon_name = strtoupper($request->coupon_name);
        $coupon->coupon_discount = $request->coupon_discount;
        $coupon->coupon_validity = $request->coupon_validity;
        $coupon->updated_at = Carbon::now();
        if($coupon->save()){
            $notification=array(
                'message'=>'Successfully Update Coupon',
                'alert-type'=>'success'
            );
            return redirect()->route('coupon')->with($notification);
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
