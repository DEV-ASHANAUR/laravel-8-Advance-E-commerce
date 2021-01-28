@extends('layouts.admin-master')
@section('product')
    active show-sub
@endsection
@section('manage-product')
    active 
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Product</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Product List</div>
                <div class="card-body">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap text-center">
                      <thead>
                        <tr>
                          <th class="wd-10p text-center">SL</th>
                          <th class="wd-15p text-center">Thumbnail</th>
                          <th class="wd-20p text-center">Product Name En</th>
                          <th class="wd-20p text-center">Product Name Bn</th>
                          <th class="wd-10p text-center">Discount</th>
                          <th class="wd-10p text-center">Quantity</th>
                          <th class="wd-15p text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($product as $key => $item)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td><img src="{{ asset($item->product_thumbnail) }}" class="img-thumbnail" style="width: 80px" alt=""></td>
                          <td style="text-transform: uppercase">{{ $item->product_name_en }}</td>
                          <td>{{ $item->product_name_bn }}</td>
                          <td>{{ $item->discount_price }}</td>
                          <td>{{ $item->product_qty }}</td>
                          <td>
                            <a href="{{ route('product.edit',$item->id) }}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>

                            <a href="{{ route('product.delete',$item->id) }}" id="delete" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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
