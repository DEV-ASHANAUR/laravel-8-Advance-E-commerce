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
    /**
     * addToWishlist by ajax request
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function addToWishlist(Request $request,$id)
    {
        if(Auth::check()){
            if(Auth::user()->role_id == 1){
                return response()->json(['error'=>'Please Login Your User Account!']);
            }else{
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
            }
            
        }else{
            return response()->json(['error'=>'At First Login Your Account!']);
        }
    }    
    /**
     * create wishlist product page
     *
     * @return void
     */
    public function create()
    {
        return view('user.wishlist-product');
    }
    public function wishlistProduct()
    {
        $wishlist = Wishlist::with('product')->where('user_id',Auth::user()->id)->latest()->get();
        return response()->json($wishlist);
    }    
    /**
     * wishlist Remove product
     *
     * @param  mixed $id
     * @return void
     */
    public function wishlistRemove($id)
    {
        $wishlist = Wishlist::where('user_id',Auth::user()->id)->where('product_id',$id)->delete();
        if($wishlist){
            return response()->json(['success' => 'Successfully Remove Product Form Wishlist']);
        }else{
            return response()->json(['error' => 'Something Went Worng']);
        }
    }
}
