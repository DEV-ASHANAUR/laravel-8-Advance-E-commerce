<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
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
        $category = Category::latest()->get();
        return view('admin.subcategory.index',compact('subcate','category'));
    }
    public function substore(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_name_en' => 'required',
            'subcategory_name_bn' => 'required'
        ]);
        $subcategory = new Subcategory();
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_name_en = $request->subcategory_name_en;
        $subcategory->subcategory_name_bn = $request->subcategory_name_bn;
        $subcategory->subcategory_slug_en = strtolower(str_replace(' ','-',$request->subcategory_name_en));
        $subcategory->subcategory_slug_bn = str_replace(' ','-',$request->subcategory_name_bn);
        if($subcategory->save()){
            $notification=array(
                'message'=>'Successfully Add Sub-Category',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
        
    }    
    /**
     * subedit
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function subedit(Request $request,$id)
    {
        $editdata = Subcategory::find($id);
        $category = Category::latest()->get();
        return view('admin.subcategory.edit',compact('editdata','category'));
    }   
    public function subupdate(Request $request,$id)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_name_en' => 'required',
            'subcategory_name_bn' => 'required'
        ]);
        $subcategory = Subcategory::find($id);
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_name_en = $request->subcategory_name_en;
        $subcategory->subcategory_name_bn = $request->subcategory_name_bn;
        $subcategory->subcategory_slug_en = strtolower(str_replace(' ','-',$request->subcategory_name_en));
        $subcategory->subcategory_slug_bn = str_replace(' ','-',$request->subcategory_name_bn);
        $subcategory->save();
        $notification=array(
            'message'=>'Successfully Update Sub-Category',
            'alert-type'=>'success'
        );
        return redirect()->route('subcategory')->with($notification);
    } 
    /**
     * subdelete
     *
     * @param  mixed $id
     * @return void
     */
    public function subdelete($id)
    {
        $sub = Subcategory::find($id);
        if($sub->delete()){
            $notification=array(
                'message'=>'Successfully delete Sub-Category',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
    // ============================sub-subcategory===================    
    /**
     * subsubindex
     *
     * @return void
     */
    public function subsubindex()
    {
        $subsubcate = Subsubcategory::latest()->get();
        $category = Category::latest()->get();
        return view('admin.sub-subcategory.index',compact('subsubcate','category'));
    }   
    /**
     * getsubcategory ajax request by category_id
     *
     * @param  mixed $request
     * @return void
     */
    public function getsubcategory(Request $request)
    {
        $subcategory  = Subcategory::where('category_id',$request->category_id)->get();
        return response()->json($subcategory);
    }    
    /**
     * sub sub-category store
     *
     * @param  mixed $request
     * @return void
     */
    public function subsubstore(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'subsubcategory_name_en' =>'required',
            'subsubcategory_name_bn' =>'required',
        ]);
        $subsubcategory = new Subsubcategory();
        $subsubcategory->category_id = $request->category_id;
        $subsubcategory->subcategory_id = $request->subcategory_id;
        $subsubcategory->subsubcategory_name_en = $request->subsubcategory_name_en;
        $subsubcategory->subsubcategory_name_bn = $request->subsubcategory_name_bn;

        $subsubcategory->subsubcategory_slug_en = strtolower(str_replace(' ','-',$request->subsubcategory_name_en));
        $subsubcategory->subsubcategory_slug_bn = str_replace(' ','-',$request->subsubcategory_name_bn);
        
        if($subsubcategory->save()){
            $notification=array(
                'message'=>'Successfully Add Sub Sub-Category',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }         
    /**
     * sub sub-category edit
     *
     * @param  mixed $id
     * @return void
     */
    public function subsubedit($id)
    {
        $editdata = Subsubcategory::find($id);
        return view('admin.sub-subcategory.edit',compact('editdata'));

    }    
    /**
     * sub sub-category update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function subsubupdate(Request $request,$id)
    {
        $request->validate([
            'subsubcategory_name_en' =>'required',
            'subsubcategory_name_bn' =>'required',
        ]);
        $subsubcategory = Subsubcategory::find($id);
        $subsubcategory->subsubcategory_name_en = $request->subsubcategory_name_en;
        $subsubcategory->subsubcategory_name_bn = $request->subsubcategory_name_bn;

        $subsubcategory->subsubcategory_slug_en = strtolower(str_replace(' ','-',$request->subsubcategory_name_en));
        $subsubcategory->subsubcategory_slug_bn = str_replace(' ','-',$request->subsubcategory_name_bn);
        
        if($subsubcategory->save()){
            $notification=array(
                'message'=>'Successfully Update Sub Sub-Category',
                'alert-type'=>'success'
            );
            return redirect()->route('sub-subcategory')->with($notification);
        }
    }
    /**
     * sub sub-category delete
     *
     * @param  mixed $id
     * @return void
     */
    public function subsubdelete($id)
    {
        $subsubcategory = Subsubcategory::find($id);
        if($subsubcategory->delete()){
            $notification=array(
                'message'=>'Successfully Delete Sub Sub-Category',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
