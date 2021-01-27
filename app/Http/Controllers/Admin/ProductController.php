<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Multiimg;
use App\Models\Product;
class ProductController extends Controller
{
    public function create()
    {
        $brands = Brand::latest()->get();
        $category = Category::latest()->get();
        return view('admin.product.create',compact('brands','category'));
    }
}
