<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use DateTime;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.report.index');
    }
    public function reportsByDate(Request $request)
    {
        $date = new DateTime($request->date);
        $formateDate = $date->format('d F Y');
        $orders = Order::where('order_date',$formateDate)->latest()->get();
        return view('admin.report.reports',compact('orders'));
    }
    public function reportsByMonth(Request $request)
    {
        $orders = Order::where('order_month',$request->month)->where('order_year',$request->year)->latest()->get();
        return view('admin.report.reports',compact('orders'));
    }
    public function reportsByYear(Request $request)
    {
        $orders = Order::where('order_year',$request->year)->latest()->get();
        return view('admin.report.reports',compact('orders'));
    }
}
