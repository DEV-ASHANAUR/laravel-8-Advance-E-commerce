<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id',Auth::user()->id)->latest()->get();
        return view('user.order.order',compact('orders'));
    }
    public function view($order_id)
    {
        $orders = Order::with('user','division','district','state')->where('id',$order_id)->where('user_id',Auth::user()->id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->get();
        return view('user.order.order-view',compact('orders','orderItem'));
    }
}
