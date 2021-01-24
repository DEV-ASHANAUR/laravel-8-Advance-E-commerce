<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function index(){
        return view('user.home');
    }
    public function ProfileUpdate(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $oldpath = $data->image;
        if($request->hasFile('image')){
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg'
            ]);
            $image = $request->file('image');
            $name_gen = date("YmdHi").'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('uploads/users_images/'.$name_gen);
            $save_url = 'uploads/users_images/'.$name_gen;
            $data->image = $save_url;  
            @unlink(public_path($oldpath));
        }
        $update = $data->save();
        if($update){
            $notification=array(
                'message'=>'Successfully Profile Updated',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification=array(
                'message'=>'Something went worng!',
                'alert-type'=>'error'
            );
            //return Redirect()->back()->with($notification);
            return redirect()->back()->with($notification);
        }
    }
    public function PassChange()
    {
        return view('user.change-password');
    }
    public function updatePass(Request $request)
    {
        $request->validate([
            'old' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);
        if(Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->old])){
            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($request->password);
            $update = $user->save();
            if($update){
                $notification=array(
                    'message'=>'Successfully Change Your Password',
                    'alert-type'=>'success'
                );
                return redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'message'=>'Something went worng!',
                    'alert-type'=>'error'
                );
                //return Redirect()->back()->with($notification);
                return redirect()->back()->with($notification);
            }
        }else{
            $notification=array(
                'message'=>'Your Current Password is worng!',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
        
    }
}
