@extends('layouts.fontend-master')

@section('content')
@section('title')
@if (session()->get('language') == 'bangla')
	আমার অর্ডার
@else
	Cancle Orders
@endif
@endsection

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class='active'>Cancle Orders</li>
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
                <div class="table-responsive">
                    <table id="result-list" class="table table-striped table-bordered text-center" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">Si</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Total</th>
                                <th class="text-center">Payment</th>
                                <th class="text-center">Invoice</th>
                                <th class="text-center">Order</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $order)
                            <tr>
                                <td>
                                    <strong>{{ $key+1 }}</strong>
                                 </td>
                                <td>
                                   <strong>{{ $order->order_date }}</strong>
                                </td>
                                <td>
                                <strong>৳{{ $order->amount }}</strong>
                                </td>

                                <td>
                                <strong>{{ $order->payment_method }}</strong>
                                </td>

                                <td>
                                <strong>{{ $order->invoice_no }}</strong>
                                </td>

                                <td>
                                    @if ($order->status == 'pending')
                                        <span class="badge badge-pill badge-success" style="background: #f30505; text:white;">{{ ucwords($order->status) }}</span>
                                    @elseif($order->status == 'Processing')  
                                        <span class="badge badge-pill badge-success" style="background: #04a3ff; text:white;">{{ ucwords($order->status) }}</span>
                                    @else 
                                        <span class="badge badge-pill badge-success" style="background: #34ec0f; text:white;">{{ ucwords($order->status) }}</span>   
                                    @endif
                                    
                                </td>

                                <td>
                                    <a href="{{ route('view.order',$order->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>

                                    <a href="{{ route('invoice.download',$order->id) }}" style="margin-top: 5px;"  class="btn btn-sm btn-danger "><i class="fa fa-download" style="color:white;"></i> Invoice</a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>  
    </div>
</div>
@include('fontend.inc.brand')
@endsection

@section('script')
    <script src="{{ asset('datatable') }}/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('datatable') }}/js/dataTables.bootstrap4.min.js"></script>
    <script>
        function daTaTable() {
            $('#result-list').DataTable();
        };
        daTaTable();
    </script>
@endsection