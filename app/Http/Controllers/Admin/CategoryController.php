<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
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
            'category_name_en' => 'required|unique:categories,category_name_en',
            'category_name_bn' => 'required|unique:categories,category_name_bn',
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
     * edit category
     *
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {
        $editdata = Category::find($id);
        return view('admin.category.edit',compact('editdata'));
    }      
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(CategoryRequest $request,$id)
    {
        $category = Category::find($id);
        $category->category_name_en = $request->category_name_en;
        $category->category_name_bn = $request->category_name_bn;
        $category->category_slug_en = strtolower(str_replace(' ','-',$request->category_name_en));
        $category->category_slug_bn = str_replace(' ','-',$request->category_name_bn);
        $category->category_icon = $request->category_icon;
        $category->save();
        $notification=array(
            'message'=>'Successfully update Category',
            'alert-type'=>'success'
        );
        return redirect()->route('category')->with($notification);
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

    // ==============================sub category ===================
    public function subindex()
    {
        $subcate = Subcategory::latest()->get();
        return view('admin.subcategory.index',compact('subcate'));
    }
}
