<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Multiimg;
use App\Models\Product;
use App\Models\Silder;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $category = Category::orderBy('category_name_en','ASC')->get();
        $categories = Category::orderBy('category_name_en','ASC')->limit(7)->get();
        $products = Product::where('status',1)->latest()->get();
        $featured = Product::where('featured',1)->where('status',1)->latest()->get();
        $hot_deals = Product::where('hot_deals',1)->where('status',1)->latest()->get();
        $special_offer = Product::where('special_offer',1)->where('status',1)->latest()->get();
        $special_deals = Product::where('special_deals',1)->where('status',1)->latest()->get();
        
        $sliders = Silder::where('status',1)->orderBy('id','DESC')->limit(4)->get();
        return view('fontend.index',compact('category','sliders','categories','products','featured','hot_deals','special_offer','special_deals'));
    }
    public function singleProduct($id,$slug)
    {
        $products = Product::find($id);
        $multi_img = Multiimg::where('product_id',$id)->get();
        return view('fontend.single-product',compact('products','multi_img'));
    }
}