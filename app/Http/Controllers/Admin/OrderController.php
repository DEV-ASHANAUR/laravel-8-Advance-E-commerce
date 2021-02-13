<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Pending()
    {
        $orders = Order::where('status','Pending')->orderBy('id','DESC')->get();
        return view('admin.order.pending',compact('orders'));
    }
    public function orderView($order_id)
    {
        $orders = Order::with('user','division','district','state')->where('id',$order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->get();
        return view('admin.order.order-view',compact('orders','orderItem'));
    }
}
