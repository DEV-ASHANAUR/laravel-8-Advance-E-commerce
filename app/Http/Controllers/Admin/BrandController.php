<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Brand;
use Carbon\Carbon;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::latest()->get();
        return view('admin.brand.index',compact('brands'));
    }
    // =====================brand Store=========================
    public function Store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'brand_name_en' => 'required',
            'brand_name_bn' => 'required',
            'brand_image' => 'image|mimes:jpeg,png,jpg'
        ],[
            'brand_name_en.require' => 'English Brand Name',
            'brand_name_bn.require' => 'Bangla Brand Name'
        ]);
            $image = $request->file('brand_image');
            $name_gen = date("YmdHi").'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(166,110)->save('uploads/brand/'.$name_gen);
            $save_url = 'uploads/brand/'.$name_gen;
            Brand::insert([
                'brand_name_en' => $request->brand_name_en,
                'brand_name_bn' => $request->brand_name_bn,
                'brand_slug_en' => strtolower(str_replace(' ','-',$request->brand_name_en)),
                'brand_slug_bn' => str_replace(' ','-',$request->brand_name_bn),
                'brand_image' =>$save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification=array(
                'message'=>'Successfully Save Brand',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);

    }

}
