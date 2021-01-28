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
                          <th class="wd-10p text-center">Product Name</th>
                          <th class="wd-10p text-center">Selling price</th>
                          <th class="wd-10p text-center">Discount</th>
                          <th class="wd-10p text-center">Quantity</th>
                          <th class="wd-10p text-center">Status</th>
                          <th class="wd-20p text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($product as $key => $item)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td><img src="{{ asset($item->product_thumbnail) }}" class="img-thumbnail" style="width: 80px" alt=""></td>
                          <td style="text-transform: uppercase">{{ $item->product_name_en }}</td>
                          <td>
                            @if (!$item->discount_price == NULL)
                                @php
                                    $amount = $item->selling_price - $item->discount_price;
                                @endphp
                                {{ number_format($amount,2) }} $
                            @else
                                {{ number_format($item->selling_price,'2') }} $
                            @endif
                          </td>
                          <td>
                            @if ($item->discount_price == NULL)
                                <span class="badge badge-pill badge-danger">No</span>
                            @else
                                @php
                                    $amount = $item->selling_price - $item->discount_price;
                                    $discount = ($amount/$item->selling_price) * 100;
                                @endphp
                                <span class="badge badge-pill badge-success">{{ round(100 - $discount) }}%</span>
                            @endif
                          </td>
                          <td>{{ $item->product_qty }}</td>
                          <td>
                            @if ($item->status == 0)
                              <span class="badge badge-pill badge-danger">Disable</span>
                            @else
                              <span class="badge badge-pill badge-success">Active</span>
                            @endif
                          </td>
                          <td>

                            @if ($item->status == 0)
                              <a href="{{ route('product.active',$item->id) }}" class="btn btn-sm btn-success" title="Press For Active"><i class="fa fa-check-circle"></i></a>
                            @else
                              <a href="{{ route('product.disable',$item->id) }}" class="btn btn-sm btn-danger" title="Press For Disable"><i class="fa fa-check-circle"></i></a> 
                            @endif
                            
                            <a href="{{ route('view-product',$item->id) }}" class="btn btn-sm btn-purple" title="View"><i class="fa fa-eye"></i></a>

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
