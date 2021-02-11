@extends('layouts.fontend-master')

@section('content')
@section('title')
@if (session()->get('language') == 'bangla')
	আমার অর্ডার
@else
	My order details
@endif
@endsection

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class='active'>Orders Details</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content">
	<div class="container">
    <div class="sign-in-page">
        <div class="row">
            <div class="col-md-4">
              @include('user.inc.user-sidebar')
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <h4 >Shipping Details</h4>
                        <hr>
                        <h5 class="mb-2">Shipping Name : <strong> {{ $orders->name }} </strong> </h5>
                        <h5 class="mb-2">Shipping Phone : <strong> {{ $orders->phone }} </strong> </h5>
                        <h5 class="mb-2">Shipping Phone : <strong> {{ $orders->email }} </strong> </h5>
                        <h5 class="mb-2">Shipping Division : <strong class="text-capitalize"> {{ $orders->division->division_name }} </strong> </h5>
                        <h5 class="mb-2">Shipping District : <strong class="text-capitalize"> {{ $orders->district->district_name }} </strong> </h5>
                        <h5 class="mb-2">Shipping State : <strong class="text-capitalize"> {{ $orders->state->state_name }} </strong> </h5>
                        <h5 class="mb-2">Post Code : <strong class="text-capitalize"> {{ $orders->post_code }} </strong> </h5>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <h4>Oder Details <span class="text-danger">Invoice No:</span>  <mark>{{ $orders->invoice_no }}</mark></h4>
                        <hr>
                        <h5 class="mb-2">Name : <strong> {{ $orders->user->name }} </strong> </h5>
                        <h5 class="mb-2">Phone : <strong> {{ $orders->user->phone }} </strong> </h5>
                        <h5 class="mb-2">Payment Type : <strong> {{ $orders->payment_type }} </strong> </h5>
                        <h5 class="mb-2">Tranx Id : <strong class="text-capitalize"> {{ $orders->transaction_id }} </strong> </h5>
                        <h5 class="mb-2">Invoive No : <strong class="text-capitalize"> {{ $orders->invoice_no }} </strong> </h5>
                        <h5 class="mb-2">Total : <strong class="text-capitalize"> {{ number_format($orders->amount,2) }} Tk </strong> </h5>
                        <h5 class="mb-2">Order Date : <strong class="text-capitalize"> {{ $orders->order_date }} </strong> </h5>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
      </div>  
    </div>
</div>
@include('fontend.inc.brand')
@endsection

@section('script')
    
@endsection