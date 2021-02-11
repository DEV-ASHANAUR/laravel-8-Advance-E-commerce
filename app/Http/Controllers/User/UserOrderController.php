<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

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
    public function invoiceDownload($order_id)
    {
        $order = Order::with('user','division','district','state')->where('id',$order_id)->where('user_id',Auth::user()->id)->first();
        $orderItems = OrderItem::with('product')->where('order_id',$order_id)->get();
        $pdf = PDF::loadView('user.order.invoice',compact('order','orderItems'))->setPaper('a4')->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);
        return $pdf->download('invoice.pdf');
        // return view('user.order.invoice',compact('orders','orderItem'));
    }
}
