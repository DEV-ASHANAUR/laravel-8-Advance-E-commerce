<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class OrderController extends Controller
{
    public function orderView($order_id)
    {
        $orders = Order::with('user','division','district','state')->where('id',$order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->get();
        return view('admin.order.order-view',compact('orders','orderItem'));
    }
    public function Pending()
    {
        $orders = Order::where('status','Pending')->orderBy('id','DESC')->get();
        return view('admin.order.pending',compact('orders'));
    }
    public function PendingToConfirm($order_id)
    {
        $order = Order::find($order_id);
        $order->status = 'Confirmed';
        $order->updated_at = Carbon::now();
        if($order->save()){
            $notification=array(
                'message'=>'Successfully Confirmed Order',
                'alert-type'=>'success'
            );
            return redirect()->route('pending')->with($notification); 
        }

    }
    public function Confirmed()
    {
        $orders = Order::where('status','Confirmed')->orderBy('id','DESC')->get();
        return view('admin.order.confirmed',compact('orders'));
    }
    public function ConfirmToProcessing($order_id)
    {
        $order = Order::find($order_id);
        $order->status = 'Processing';
        $order->updated_at = Carbon::now();
        if($order->save()){
            $notification=array(
                'message'=>'Successfully Processing Order',
                'alert-type'=>'success'
            );
            return redirect()->route('confirmed')->with($notification); 
        }
    }
    public function Processing()
    {
        $orders = Order::where('status','Processing')->orderBy('id','DESC')->get();
        return view('admin.order.processing',compact('orders'));
    }
    public function ProcessingToPicked($order_id)
    {
        $order = Order::find($order_id);
        $order->status = 'Picked';
        $order->updated_at = Carbon::now();
        if($order->save()){
            $notification=array(
                'message'=>'Successfully Picked Order',
                'alert-type'=>'success'
            );
            return redirect()->route('processing')->with($notification); 
        }
    }
    public function Picked()
    {
        $orders = Order::where('status','Picked')->orderBy('id','DESC')->get();
        return view('admin.order.picked',compact('orders'));
    }
    public function PickedToShipped($order_id)
    {
        $order = Order::find($order_id);
        $order->status = 'Shipped';
        $order->updated_at = Carbon::now();
        if($order->save()){
            $notification=array(
                'message'=>'Successfully Shipped Order',
                'alert-type'=>'success'
            );
            return redirect()->route('picked')->with($notification); 
        }
    }
    public function Shipped()
    {
        $orders = Order::where('status','Shipped')->orderBy('id','DESC')->get();
        return view('admin.order.shipped',compact('orders'));
    }
    public function ShippedToDelivered($order_id)
    {
        $order = Order::find($order_id);
        $order->status = 'Delivered';
        $order->updated_at = Carbon::now();
        if($order->save()){
            $notification=array(
                'message'=>'Successfully Delivered Order',
                'alert-type'=>'success'
            );
            return redirect()->route('shipped')->with($notification); 
        }
    }
    public function delivered()
    {
        $orders = Order::where('status','Delivered')->orderBy('id','DESC')->get();
        return view('admin.order.delivered',compact('orders'));
    }
    public function Cancle()
    {
        $orders = Order::where('status','Cancle')->orderBy('id','DESC')->get();
        return view('admin.order.cancle',compact('orders'));
    }
    public function invoiceDownload($order_id)
    {
        $order = Order::with('user','division','district','state')->where('id',$order_id)->first();
        $orderItems = OrderItem::with('product')->where('order_id',$order_id)->get();

        $pdf = PDF::loadView('admin.order.invoice',compact('order','orderItems'))->setPaper('a4')->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);
        return $pdf->download('invoice.pdf');
        // dd($orderItems);
        // return view('admin.order.invoice',compact('order','orderItems'));
    }
    public function delete($id)
    {
        $order = Order::find($id);
        if($order->delete()){
            $notification=array(
                'message'=>'Successfully Delete Order',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }
    
}
