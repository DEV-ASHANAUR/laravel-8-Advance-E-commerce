<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Multiimg;
use App\Models\Product;
use Carbon\Carbon;

class ProductController extends Controller
{    
    /**
     * create product
     *
     * @return void
     */
    public function create()
    {
        $brands = Brand::latest()->get();
        $category = Category::latest()->get();
        return view('admin.product.create',compact('brands','category'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'brand_id' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'subsubcategory_id' => 'required',
            'product_name_en' => 'required',
            'product_name_bn' => 'required',
            'product_code' => 'required|unique:products,product_code',
            'product_qty' => 'required',
            'product_tag_en' => 'required',
            'product_tag_bn' => 'required',
            'selling_price' => 'required',
            'discount_price' => 'required',
            'short_descp_en' => 'required',
            'short_descp_bn' => 'required',
            'long_descp_en' => 'required',
            'long_descp_bn' => 'required',
            'product_thumbnail' => 'image|mimes:jpeg,png,jpg',
        ]);
        
        $image = $request->file('product_thumbnail');
            $name_gen = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(917,1000)->save('uploads/product/thumbnail/'.$name_gen);
            $save_thumbnail = 'uploads/product/thumbnail/'.$name_gen;

        $product = new Product();
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->subsubcategory_id = $request->subsubcategory_id;
        $product->product_name_en = $request->product_name_en;
        $product->product_name_bn = $request->product_name_bn;
        $product->product_slug_en = strtolower(str_replace(' ','-',$request->product_name_en));
        $product->product_slug_bn = str_replace(' ','-',$request->product_name_bn);
        $product->product_code = $request->product_code;
        $product->product_qty = $request->product_qty;
        $product->product_tag_en = $request->product_tag_en;
        $product->product_tag_bn = $request->product_tag_bn;
        $product->product_size_en = $request->product_size_en;
        $product->product_size_bn = $request->product_size_bn;
        $product->product_color_en = $request->product_color_en;
        $product->product_color_bn = $request->product_color_bn;
        $product->selling_price = $request->selling_price;
        $product->discount_price = $request->discount_price;
        $product->short_descp_en = $request->short_descp_en;
        $product->short_descp_bn = $request->short_descp_bn;
        $product->long_descp_en = $request->long_descp_en;
        $product->long_descp_bn = $request->long_descp_bn;
        $product->product_thumbnail = $save_thumbnail;
        $product->short_descp_bn = $request->short_descp_bn;
        $product->hot_deals = $request->hot_deals;
        $product->featured = $request->featured;
        $product->special_offer = $request->special_offer;
        $product->special_deals = $request->special_deals;
        $product->status = 1;
        $product->created_at = Carbon::now();
        if($product->save()){
            $images = $request->file('image');
            foreach($images as $img){
                $name_make = uniqid().'.'.$img->getClientOriginalExtension();
                Image::make($img)->resize(917,1000)->save('uploads/product/multiimg/'.$name_make);
                $save_multi = 'uploads/product/multiimg/'.$name_make;
                $multiimg = new Multiimg();
                $multiimg->product_id = $product->id;
                $multiimg->image = $save_multi;
                $multiimg->save();
            }
            
        }
        $notification=array(
            'message'=>'Successfully Save Product',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
