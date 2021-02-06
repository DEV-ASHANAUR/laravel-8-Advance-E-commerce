@extends('layouts.fontend-master')
@section('content')
@section('title')
@if (session()->get('language') == 'bangla')
	চেকআউট পেইজ
@else
	checkout Page
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
          <li class="active">Checkout</li>
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
          <div class="col-md-8">
            <div class="panel-group checkout-steps" id="accordion">
              <!-- checkout-step-01  -->
              <div class="panel panel-default checkout-step-01">
                <div class="panel-heading">
                    <h4 class="unicase-checkout-title">
                      <a>
                        <span>*</span>Shipping Address
                      </a>
                    </h4>
                  </div>
                <!-- panel-heading -->
                <div id="collapseOne" class="panel-collapse collapse in">
                  <!-- panel-body  -->
                  <div class="panel-body">
                    <div class="row">
                        <form class="register-form" role="form">
                            <div class="col-md-6 col-sm-6 already-registered-login">
                            
                                <div class="form-group">
                                    <label class="info-title" for="name"
                                    >Your Name <span>*</span></label
                                    >
                                    <input
                                    type="text"
                                    name="shipping_name"
                                    class="form-control unicase-form-control text-input"
                                    id="name"
                                    placeholder="Enter Your Name"
                                    />
                                </div>
                                <div class="form-group">
                                    <label
                                    class="info-title"
                                    for="email"
                                    >Your Email <span>*</span></label
                                    >
                                    <input
                                    type="email"
                                    class="form-control unicase-form-control text-input"
                                    id="email"
                                    name="shipping_name"
                                    placeholder="Enter Email"
                                    />
                                </div>
                                <div class="form-group">
                                    <label
                                    class="info-title"
                                    for="phone"
                                    >Your Phone <span>*</span></label
                                    >
                                    <input
                                    type="number"
                                    class="form-control unicase-form-control text-input"
                                    id="phone"
                                    name="shipping_name"
                                    placeholder="Enter Phone Number"
                                    />
                                </div>
                                <div class="form-group">
                                    <label
                                    class="info-title"
                                    for="notes"
                                    >Order Notes <span>*</span></label
                                    >
                                    <textarea name="notes" class="form-control unicase-form-control text-input" id="notes" placeholder="Write order Notes"></textarea>
                                </div>
                            </div>  
                            <!-- already-registered-login -->
                            <div class="col-md-6 col-sm-6 already-registered-login">
                                <div class="form-group">
                                    <label class="info-title" for="division_id"
                                    >Select Division <span>*</span></label
                                    >
                                    <select name="division_name" class="form-control unicase-form-control" id="division_id">
                                        <option>Select One</option>
                                        @foreach ($division as $div)
                                            <option value="{{ $div->id }}">{{ ucwords($div->division_name) }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="district_id"
                                    >Select District <span>*</span></label
                                    >
                                    <select name="district_name" class="form-control unicase-form-control" id="district_id">
                                        <option>Select One</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="state_id"
                                    >Select State <span>*</span></label
                                    >
                                    <select name="state_name" class="form-control unicase-form-control" id="state_id">
                                        <option>Select One</option>
                                        <option value="">2</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label
                                    class="info-title"
                                    for="post_code"
                                    >Post Code <span>*</span></label
                                    >
                                    <input
                                    type="number"
                                    name="post_code"
                                    class="form-control unicase-form-control text-input resize-none"
                                    id="post_code"
                                    placeholder="Enter Post Code"
                                    />
                                </div>
                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">
                                    Submit
                                </button>
                            </div>
                        </form>
                      <!-- already-registered-login -->
                    </div>
                  </div>
                  <!-- panel-body  -->
                </div>
                <!-- row -->
              </div>
              <!-- checkout-step-01  -->
              <!-- checkout-step-02  -->
              
              <!-- checkout-step-06  -->
            </div>
            <!-- /.checkout-steps -->
          </div>
          <div class="col-md-4">
            <!-- checkout-progress-sidebar -->
            <div class="checkout-progress-sidebar">
              <div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="unicase-checkout-title">
                      Your Checkout Progress
                    </h4>
                  </div>
                  <div class="">
                    <ul class="nav nav-checkout-progress list-unstyled">
                      @foreach ($carts as $item)
                        <li>
                            <strong>Image:</strong>
                            <img src="{{ asset($item->options->image) }}" class="img-thumbnail" style="width: 50px;height:50px" alt="">
                            <strong>Qty:</strong>
                            {{ $item->qty }}
                            <strong>Color:</strong>
                            {{ $item->options->color }}
                            <strong>Size:</strong>
                            {{ $item->options->size }}
                        </li>
                      @endforeach
                        <hr>
                      <li>
                          @if (Session::has('coupon'))
                            <strong>Subtotal: </strong> ${{ $cartTotal }} <br>
                            <strong>Coupon Name: </strong>{{ session()->get('coupon')['coupon_name'] }} ({{ session()->get('coupon')['coupon_discount'] }}%) <br>
                            <strong>Coupon Discount: </strong>-${{ session()->get('coupon')['discount_amount'] }} <br>
                            <strong>Grand Total: </strong> ${{ session()->get('coupon')['total_amount'] }} <br>
                          @else
                            <strong>Subtotal: </strong> ${{ $cartTotal }} <br>
                            <strong>Grand Total: </strong> ${{ $cartTotal }} <br>
                          @endif
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- checkout-progress-sidebar -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.checkout-box -->
      @include('fontend.inc.brand')
      
@endsection

@section('script')
<script>
    $(document).ready(function(){
      $(document).on('change','#division_id',function(){
        var division_id = $(this).val();
        $('#state_id').html('');
        // alert(division_id);
        $.ajax({
          url:"{{route('get-ship-district')}}",
          type:"GET",
          data:{division_id:division_id},
          success:function(data){
            var html = '<option value="">Selcet District</option>';
            $.each(data,function(key,v){
              html +='<option value="'+v.id+'">'+v.district_name+'</option>';
            });
            $('#district_id').html(html);
          }
        });
      });
    });
  </script>
  <script>
    $(document).ready(function(){
      $(document).on('change','#district_id',function(){
        var district_id = $(this).val();
        // alert(division_id);
        $.ajax({
          url:"{{route('get-ship-state')}}",
          type:"GET",
          data:{district_id:district_id},
          success:function(data){
            var html = '<option value="">Selcet State</option>';
            $.each(data,function(key,v){
              html +='<option value="'+v.id+'">'+v.state_name+'</option>';
            });
            $('#state_id').html(html);
          }
        });
      });
    });
  </script>
@endsection