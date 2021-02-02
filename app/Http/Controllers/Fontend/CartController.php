<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request,$id)
    {
        $product = Product::findOrFail($id);
        if($product->discount_price == NULL){
            Cart::add([
                'id' => $id,
                'name' => $product->product_name_en,
                'qty' => $request->qty, 
                'price' => $product->selling_price, 
                'weight' => 1, 
                'options' => ['size' => $request->size,'color' => $request->color,'image' => $product->product_thumbnail],
              ]);
              return response()->json([
                  'status_code' => 200,
                  'message' => 'Successfully Product Add to Cart'
              ]);
        }else{
            Cart::add([
                'id' => $id,
                'name' => $product->product_name_en,
                'qty' => $request->qty, 
                'price' => $product->discount_price, 
                'weight' => 1, 
                'options' => ['size' => $request->size,'color' => $request->color,'image' => $product->product_thumbnail],
              ]);
              return response()->json([
                'status_code' => 200,
                'message' => 'Successfully Product Add to Cart'
              ]);
        }
    }
    public function miniCart()
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
    public function miniCartRemove($rowId)
    {
        Cart::remove($rowId);
        return response()->json([
            'status_code' => 200,
            'message' => 'Product Remove From Cart'
        ]);
    }
}
