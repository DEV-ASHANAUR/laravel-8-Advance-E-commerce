@extends('layouts.admin-master')
@section('order')
    active show-sub
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Order View</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
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
                <li class="list-group-item active" aria-current="true">ORDER INFORMATION <mark class="text-uppercase">status : {{ $orders->status }}</mark> 
                    @if ($orders->status == 'Pending')
                        <a href="{{ route('pentoconfirm.order',$orders->id) }}" id="confirm" class="btn btn-success btn-sm" >CONFIRM ORDER</a>
                    @elseif($orders->status == 'Confirmed')
                        <a href="{{ route('confirmtoprocessing.order',$orders->id) }}" id="processing" class="btn btn-success btn-sm" >PROCESSING ORDER</a>
                    @elseif($orders->status == 'Processing')
                        <a href="{{ route('processingtopicked.order',$orders->id) }}" id="picked" class="btn btn-success btn-sm" >PICKED ORDER</a>
                    @elseif($orders->status == 'Picked')
                        <a href="{{ route('pickedtoshipped.order',$orders->id) }}" id="shipped" class="btn btn-success btn-sm" >SHIPPED ORDER</a>
                    @elseif($orders->status == 'Shipped')
                        <a href="{{ route('shippedtodelivered.order',$orders->id) }}" id="delivered" class="btn btn-success btn-sm" >DELIVERED ORDER</a>
                    @endif
                     
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
        
    </div><!-- sl-pagebody -->
    <div class="row mt-3">
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
            {{-- @if ($orders->status == 'delivered')
                <div class="form-group">
                    <label for="return_reason">Order Return Reason</label>
                    <textarea name="return_reason" id="return_reason" class="form-control" placeholder="Write Order Return Reason" required></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Submit</button>
                </div>
            @endif --}}
        </div>
    </div>
  </div><!-- sl-mainpanel -->
@endsection
@section('admin-script')
<script>
    $(function(){
      'use strict';
      $('.select2').select2({
        minimumResultsForSearch: Infinity
      });

      $('#selectForm').parsley();
    })
  </script>
@endsection
