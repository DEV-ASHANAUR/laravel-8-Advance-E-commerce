<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Wishlist;
use Carbon\Carbon;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request,$id)
    {
        if(Auth::check()){
            $exists = Wishlist::where('user_id',Auth::user()->id)->where('product_id',$id)->first();
            if(!$exists){
                Wishlist::insert([
                    'user_id' => Auth::user()->id,
                    'product_id' => $id,
                    'created_at' => Carbon::now(),
                ]);
                return response()->json(['success'=>'Successfully Add To Wishlist!']);
            }else{
                return response()->json(['error'=>'Already On Your Wishlist!']);
            }
        }else{
            return response()->json(['error'=>'At First Login Your Account!']);
        }
    }
}
