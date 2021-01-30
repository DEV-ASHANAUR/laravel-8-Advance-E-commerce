<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Silder;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $category = Category::orderBy('category_name_en','ASC')->get();
        $categories = Category::orderBy('category_name_en','ASC')->limit(7)->get();
        $products = Product::latest()->get();
        $sliders = Silder::where('status',1)->orderBy('id','DESC')->limit(4)->get();
        return view('fontend.index',compact('category','sliders','categories','products'));
    }
}
