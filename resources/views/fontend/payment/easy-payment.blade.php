@extends('layouts.fontend-master')
@section('content')
@section('title')
@if (session()->get('language') == 'bangla')
    এসএসএল ইজি পেমেন্ট
@else
    SSL EasyPayment
@endif
@endsection
@php
	function bn_price($str){
		$en = array(1,2,3,4,5,6,7,8,9,0);
		$bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
		$str = str_replace($en,$bn,$str);
		return $str;
	}
@endphp
<div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="#">Home</a></li>
          <li class="active">SSL EasyPayment</li>
        </ul>
      </div>
      <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.breadcrumb -->

  <div class="body-content">
    <div class="container">
      <div class="checkout-box">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">{{ Cart::count() }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach ($carts as $cart)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h4 class="my-0">{{ $cart->name }}</h4>
                            <h5 class="text-muted"><strong>Qty: </strong>{{ $cart->qty }}</h5>
                        </div>
                        <h5 class="text-muted"><strong>Price: </strong>{{ number_format($cart->price,2) }} Tk</h5>
                    </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (BDT)</span>
                        <strong>{{ number_format($amount,2) }}Tk</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form method="POST" class="needs-validation" novalidate>
                    <div class="row mb-2">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">Full name</label>
                            <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="" value="{{ $data['shipping_name'] }}" disabled />
                        </div>
                    </div>
    
                    <div class="mb-3">
                        <label for="mobile">Mobile</label>
                        <div class="input-group">
                            <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile" value="{{ $data['shipping_phone'] }}" disabled />
                        </div>
                    </div>
    
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="customer_email" class="form-control" id="email" placeholder="you@example.com" value="{{ $data['shipping_email'] }}" disabled />
                    </div>

                    
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="hidden" id="total_amount" value="{{ $amount }}" name="amount" id="total_amount" required/>

                        <input type="hidden" id="post_code" name="post_code" value="{{ $data['post_code'] }}">
                        <input type="hidden" id="division_id" name="division_id" value="{{ $data['division_id'] }}">
                        <input type="hidden" id="district_id" name="district_id" value="{{ $data['district_id'] }}">
                        <input type="hidden" id="state_id" name="state_id" value="{{ $data['state_id'] }}">
                        <input type="hidden" id="notes" name="notes" value="{{ $data['notes'] }}">
                    </div>
                    
                    <button class="btn btn-primary btn-lg btn-block" id="sslczPayBtn"
                            token="if you have any token validation"
                            postdata="your javascript arrays or objects which requires in backend"
                            order="If you already have the transaction generated for current order"
                            endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                    </button>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  @include('fontend.inc.brand')
  @endsection
  @section('script')
  <script>
    var obj = {};
    obj.cus_name = $('#customer_name').val();
    obj.cus_phone = $('#mobile').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    obj.amount = $('#total_amount').val();
    obj.post_code = $('#post_code').val();
    obj.division_id = $('#division_id').val();
    obj.district_id = $('#district_id').val();
    obj.state_id = $('#state_id').val();
    obj.notes = $('#notes').val();

    $('#sslczPayBtn').prop('postdata', obj);

    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);

  </script>
  @endsection

  