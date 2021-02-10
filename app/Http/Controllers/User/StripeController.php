<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\orderMail;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Support\Facades\Mail;

class StripeController extends Controller
{
    public function store(Request $request)
    {
        // Set your secret key. Remember to switch to your live secret key in production!
        // See your keys here: https://dashboard.stripe.com/account/apikeys

        if(Session::has('coupon')){
            $amount = session::get('coupon')['total_amount'];
        }else{
            $amount = round(Cart::total());
        }

        \Stripe\Stripe::setApiKey('sk_test_51IIVL8KzalqmeBimsbMstaJb4pRUUqd9bu1HHIphus7lxKNgtTR4MTzvKPDqHvodL5nUPyQrYY0msgz1ysbrqg9P00rnhOKwMq');

        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
        'amount' => $amount*100,
        'currency' => 'usd',
        'description' => 'shop Mama',
        'source' => $token,
        'metadata' => ['order_id' => uniqid()],
        ]);

        // dd($charge);
        
        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_id' => $request->state_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'post_code' => $request->post_code,
            'notes' => $request->notes,

            'payment_type' => 'Stripe',
            'payment_method' => 'Stripe',
            'transaction_id' => $charge->balance_transaction,
            'currency' => $charge->currency,

            'amount' => $amount,
            'order_number' => $charge->metadata->order_id,
            'invoice_no' => 'SPM'.mt_rand(10000000,99999999),
            'order_date' => Carbon::now()->format('d F Y'),

            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'),
            'status' => 'pending',
            'created_at' => Carbon::now(),
        ]);
        $invoice = Order::findOrFail($order_id);    
        // send mail start
            $data = [
                'name' => Auth::user()->name,
                'invoice_no' => $invoice->invoice_no,
                'amount' => $amount,
            ];

            Mail::to($request->email)->send(new orderMail($data));
        // send mail end
        $carts = Cart::content();
        foreach ($carts as $cart){
            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'color' => $cart->options->color,
                'size' => $cart->options->size,
                'qty' => $cart->qty,
                'price' => $cart->price,
                'created_at' => Carbon::now(),
            ]);
        }
        

        if(Session::has('coupon')){
            Session::forget('coupon');
        }

        Cart::destroy();

        $notification=array(
            'message'=>'Your Order place Success',
            'alert-type'=>'success'
        );
        return redirect()->route('user.dashboard')->with($notification);
        

    }
}
