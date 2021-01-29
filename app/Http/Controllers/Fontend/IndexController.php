<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $category = Category::orderBy('category_name_en','ASC')->get();
        return view('fontend.index',compact('category'));
    }
}
