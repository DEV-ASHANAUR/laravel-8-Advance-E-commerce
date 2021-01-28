<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\Silder;

class SliderController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $slider = Silder::latest()->get();
        return view('admin.slider.index',compact('slider'));
    }
        
    /**
     * Store slider
     *
     * @param  mixed $request
     * @return void
     */
    public function Store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'title' => 'required',
            // 'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);
        $image = $request->file('image');
        $name_gen = uniqid().'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(870,370)->save('uploads/slider/'.$name_gen);
        $save_url = 'uploads/slider/'.$name_gen;
        Silder::insert([
            'title_en' => $request->title_en,
            'title_bn' => $request->title_bn,
            'description_en' => $request->description_en,
            'description_bn' => $request->description_bn,
            'image' =>$save_url,
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Successfully Save Slider',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }    
    /**
     * edit slider
     *
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {
        $editdata = Silder::find($id);
        return view('admin.slider.edit',compact('editdata'));
    }
       
    /**
     * update slider
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(Request $request,$id)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        // ]);
        $slider = Silder::find($id);
        $oldpath = $slider->image;
        $slider->title_en = $request->title_en; 
        $slider->title_bn = $request->title_bn; 
        $slider->description_en = $request->description_en; 
        $slider->description_bn = $request->description_bn; 

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg'
            ]);
            $image = $request->file('image');
            $name_gen = date("YmdHis").'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(870,370)->save('uploads/slider/'.$name_gen);
            $save_url = 'uploads/slider/'.$name_gen;
            @unlink(public_path($oldpath));
            $slider->image = $save_url;
        }
        $slider->save();
        $notification=array(
            'message'=>'Successfully update slider',
            'alert-type'=>'success'
        );
        return redirect()->route('sliders')->with($notification);

    }    
    /**
     * disable slider
     *
     * @param  mixed $id
     * @return void
     */
    public function disable($id)
    {
        $slider = Silder::find($id);
        $slider->status = 0;
        if($slider->save())
        {
            $notification=array(
                'message'=>'Successfully Disable slider',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }    
    /**
     * active slider
     *
     * @param  mixed $id
     * @return void
     */
    public function active($id)
    {
        $Silder = Silder::find($id);
        $Silder->status = 1;
        if($Silder->save())
        {
            $notification=array(
                'message'=>'Successfully Active Silder',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }     
    /**
     * delete slider
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        $slider = Silder::find($id);
        $img = $slider->image;
        if($slider->delete()){
            unlink(public_path($img));
            $notification=array(
                'message'=>'Successfully delete Slider',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
