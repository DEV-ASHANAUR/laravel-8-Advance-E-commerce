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
            <div class="col-md-3">
              @include('user.inc.user-sidebar')
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item active text-uppercase" aria-current="true">shipping information</li>
                            <li class="list-group-item text-capitalize">Shipping Name : <strong>{{ $orders->name }}</strong></li>
                            <li class="list-group-item text-capitalize">Shipping Phone : <strong> {{ $orders->phone }} </strong></li>
                            <li class="list-group-item text-capitalize">Shipping Email : <strong> {{ $orders->email }} </strong></li>
                            <li class="list-group-item text-capitalize">Shipping Division : <strong> {{ $orders->division->division_name }} </strong></li>
                            <li class="list-group-item text-capitalize">Shipping District : <strong> {{ $orders->district->district_name }} </strong></li>
                            <li class="list-group-item text-capitalize">Shipping State : <strong> {{ $orders->state->state_name }} </strong></li>
                            <li class="list-group-item text-capitalize">Post Code : <strong> {{ $orders->post_code }} </strong></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group">
                            @php
                                $order = App\Models\Order::where('id',$orders->id)->where('return_reason','=',NULL)->first();
                            @endphp
                            <li class="list-group-item active" aria-current="true">ORDER INFORMATION <span class="badge badge-pill badge-danger text-uppercase">status : {{ ($order)?$orders->status:'Return Requested' }}</span> 
                                
                                 
                            </li>
                            <li class="list-group-item text-capitalize">Name : <strong>{{ $orders->user->name }}</strong></li>
                            <li class="list-group-item text-capitalize">phone : <strong>{{ $orders->user->phone }}</strong></li>
                            <li class="list-group-item text-capitalize">payment type : <strong>{{ $orders->payment_type }}</strong></li>
                            <li class="list-group-item text-capitalize">Tranx Id : <strong>{{ $orders->transaction_id }}</strong></li>
                            <li class="list-group-item text-capitalize">Invoive No : <strong>{{ $orders->invoice_no }}</strong></li>
                            <li class="list-group-item text-capitalize">Amount : <strong>{{ number_format($orders->amount,2) }} Tk</strong></li>
                            <li class="list-group-item text-capitalize">Order Date : <strong>{{ $orders->order_date }}</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="result-list" class="table table-striped table-bordered text-center" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">Si</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Pro Name</th>
                                        <th class="text-center">Pro Code</th>
                                        <th class="text-center">Color</th>
                                        <th class="text-center">Size</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-center">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderItem as $key => $item)
                                    <tr>
                                        <td>
                                            <strong>{{ $key+1 }}</strong>
                                         </td>
                                        <td>
                                            <img src="{{ asset ($item->product->product_thumbnail) }}" width="70px" height="70px" alt="">
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $item->product->product_name_en }}
                                        </td>
                                        <td>{{ $item->product->product_code }}</td>
                                        <td>{{ $item->color }}</td>
                                        <td>{{ $item->size }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->qty ."*". $item->price }} = {{ number_format($item->qty*$item->price,2) }} Tk</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <span color="text-danger">Grand Total  (including discount + vat)</span>
                                        </td>
                                        <td>
                                            {{ number_format($orders->amount,2) }} Tk
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        @if ($orders->status == 'Delivered')
                            @php
                                $order = App\Models\Order::where('id',$orders->id)->where('return_reason','=',NULL)->first();
                            @endphp
                            @if ($order)
                                <form action="{{ route('return.request') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="order_id" value="{{ $orders->id }}">
                                        <label for="return_reason">Order Return Reason</label>
                                        <textarea name="return_reason" id="return_reason" class="form-control" placeholder="Write Order Return Reason" data-validation="required" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            @endif
                        @endif
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