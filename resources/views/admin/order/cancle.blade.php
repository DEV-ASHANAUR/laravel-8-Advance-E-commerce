@extends('layouts.admin-master')
@section('order')
    active show-sub
@endsection
@section('cancle')
    active 
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Cancle Order</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cancle List</div>
                <div class="card-body">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-10p">SL</th>
                          <th class="wd-20p">Date</th>
                          <th class="wd-20p">Invoice No</th>
                          <th class="wd-20p">Amount</th>
                          <th class="wd-10p">Tnx Id</th>
                          <th class="wd-10p">Status</th>
                          <th class="wd-20p">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $key => $item)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td>{{ $item->order_date }}</td>
                          <td>{{ $item->invoice_no }}</td>
                          <td>{{ number_format($item->amount,2) }} Tk</td>
                          <td>{{ $item->transaction_id }}</td>
                          <td>
                            <span class="badge badge-pill badge-danger">{{ $item->status }}</span>
                          </td>
                          <td>

                            <a href="{{ route('order.view',$item->id) }}" class="btn btn-sm btn-primary" title="View"><i class="fa fa-eye"></i></a>

                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                </div>
            </div><!-- card -->
        </div>        
      </div><!-- row -->
    </div><!-- sl-pagebody -->
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
