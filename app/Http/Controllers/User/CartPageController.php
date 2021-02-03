<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;

class CartPageController extends Controller
{
    public function index()
    {
        return view('user.cart-page');
    }
    public function cartProduct()
    {
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();
        return response()->json([
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => round($cartTotal),
        ]);
    }
    public function cartRemove($rowId)
    {
        Cart::remove($rowId);
        return response()->json([
            'success' => 'Product Remove From Cart'
        ]);
    }
}
