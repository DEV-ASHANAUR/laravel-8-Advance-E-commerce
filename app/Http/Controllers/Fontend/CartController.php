<?php

namespace App\Http\Controllers\Fontend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{    
    /**
     * addToCart() product add to cart by Ajax
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
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
    /**
     * miniCart() view cart product by ajax
     *
     * @return void
     */
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
    /**
     * miniCartRemove() remove cart product by Ajax Request
     *
     * @param  mixed $rowId
     * @return void
     */
    public function miniCartRemove($rowId)
    {
        Cart::remove($rowId);
        return response()->json([
            'status_code' => 200,
            'message' => 'Product Remove From Cart'
        ]);
    }
    // ========================cart page===================
    /**
     * index() load cart page
     *
     * @return void
     */
    public function index()
    {
        return view('user.cart-page');
    }    
    /**
     * view cart Product by ajax request
     *
     * @return void
     */
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
    /**
     * cart Remove by Ajax Request
     *
     * @param  mixed $rowId
     * @return void
     */
    public function cartRemove($rowId)
    {
        Cart::remove($rowId);
        return response()->json([
            'success' => 'Product Remove From Cart'
        ]);
    }
}
