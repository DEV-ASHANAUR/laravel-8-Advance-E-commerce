<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index',compact('categories'));
    }    
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name_en' => 'required',
            'category_name_bn' => 'required',
            'category_icon' => 'required',
        ]);
        $category = new Category();
        $category->category_name_en = $request->category_name_en;
        $category->category_name_bn = $request->category_name_bn;
        $category->category_slug_en = strtolower(str_replace(' ','-',$request->category_name_en));
        $category->category_slug_bn = str_replace(' ','-',$request->category_name_bn);
        $category->category_icon = $request->category_icon;
        $category->save();
        $notification=array(
            'message'=>'Successfully Save Category',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }    
    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        $category = Category::find($id);
        if($category->delete()){
            $notification=array(
                'message'=>'Successfully delete Category',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
