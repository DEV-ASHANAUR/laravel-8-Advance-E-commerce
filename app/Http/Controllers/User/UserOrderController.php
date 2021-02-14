<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
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
    /**
     * returnOrders() view all return orders
     *
     * @return void
     */
    public function returnOrders()
    {
        $orders = Order::where('user_id',Auth::user()->id)->where('return_reason','!=',NULL)->latest()->get();
        return view('user.order.return-order',compact('orders'));
    }    
    /**
     * submitRequest() request for return order
     *
     * @param  mixed $request
     * @return void
     */
    public function submitRequest(Request $request)
    {
        $order_id = $request->order_id;
        $order = Order::find($order_id);
        $order->return_reason = $request->return_reason;
        $order->return_date = Carbon::now()->format('d F Y');
        if($order->save()){
            $notification=array(
                'message'=>'Successfully Request Send',
                'alert-type'=>'success'
            );
            return redirect()->route('my.order')->with($notification);
        }
    }
    public function cancleOrder()
    {
        $orders = Order::where('user_id',Auth::user()->id)->where('status','Cancle')->latest()->get();
        return view('user.order.cancle',compact('orders'));
    }
}
