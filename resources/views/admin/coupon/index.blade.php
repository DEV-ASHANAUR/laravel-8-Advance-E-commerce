@extends('layouts.admin-master')
@section('coupon')
    active
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Coupon</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Coupon List</div>
                <div class="card-body">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-10p">SL</th>
                          <th class="wd-20p">Coupon Name</th>
                          <th class="wd-20p">Coupon Discount</th>
                          <th class="wd-20p">validity</th>
                          <th class="wd-10p">Status</th>
                          <th class="wd-20p">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($coupons as $key => $item)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td>{{ $item->coupon_name }}</td>
                          <td class="text-center">{{ $item->coupon_discount }}%</td>
                          <td>{{ Carbon\Carbon::parse($item->coupon_validity)->format('D, d F Y')}}</td>
                          <td>
                              @if ($item->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d') )
                                  <span class="badge badge-pill badge-success">Valid</span>
                              @else
                                <span class="badge badge-pill badge-danger">Invalid</span>
                              @endif
                          </td>
                          <td>
                            {{-- @if ($item->status == 0)
                              <a href="{{ route('slider.active',$item->id) }}" class="btn btn-sm btn-success" title="Press For Active"><i class="fa fa-check-circle"></i></a>
                            @else
                              <a href="{{ route('slider.disable',$item->id) }}" class="btn btn-sm btn-danger" title="Press For Disable"><i class="fa fa-check-circle"></i></a> 
                            @endif --}}

                            <a href="{{ route('slider.edit',$item->id) }}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>

                            <a href="{{ route('coupon.delete',$item->id) }}" id="delete" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                </div>
            </div><!-- card -->
        </div>    
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Add Coupon</div>
                <div class="card-body">
                    <form action="{{ route('coupon.store') }}" method="POST" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                            <label class="form-control-label">Coupon Name: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="coupon_name"  value="{{ old('coupon_name') }}" placeholder="Enter Coupon Name" required />
                            <font class="text-danger">{{ ($errors->has('coupon_name'))?$errors->first('coupon_name'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Coupon Discount: <span class="tx-danger">*</span></label>
                            <input type="number" class="form-control" name="coupon_discount"  value="{{ old('coupon_discount') }}" placeholder="Enter Coupon discount" required />

                            <font class="text-danger">{{ ($errors->has('coupon_discount'))?$errors->first('coupon_discount'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Coupon validity Date: <span class="tx-danger">*</span></label>
                            <input type="date" class="form-control" name="coupon_validity"  value="{{ old('coupon_validity') }}" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" required />

                            <font class="text-danger">{{ ($errors->has('coupon_validity'))?$errors->first('coupon_validity'):'' }}</font>
                        </div>
                        
                        <div class="form-layout-footer">
                            <button type="submit" class="btn btn-info mg-r-5">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div><!-- form-layout-footer -->
                    </form>
                </div>
            </div>
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
