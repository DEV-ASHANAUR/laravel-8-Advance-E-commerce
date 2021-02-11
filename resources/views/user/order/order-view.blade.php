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
                                            <img class="img-thumbnail" src="{{ asset ($item->product->product_thumbnail) }}" width="70px" height="70px" alt="">
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
                        <div class="form-group">
                            <label for="return_reason">Order Return Reason</label>
                            <textarea name="return_reason" id="return_reason" class="form-control" placeholder="Write Order Return Reason" required></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Submit</button>
                        </div>
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