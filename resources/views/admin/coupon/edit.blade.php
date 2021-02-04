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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Coupon</div>
                <div class="card-body">
                    <form action="{{ route('coupon.update',$editdata->id) }}" method="POST" id="Myform" enctype="multipart/form-data" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                            <label class="form-control-label">Coupon Name: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="coupon_name"  value="{{ $editdata->coupon_name }}" placeholder="Enter Coupon Name" required />
                            <font class="text-danger">{{ ($errors->has('coupon_name'))?$errors->first('coupon_name'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Coupon Discount: <span class="tx-danger">*</span></label>
                            <input type="number" class="form-control" name="coupon_discount" value="{{ $editdata->coupon_discount }}" placeholder="Enter Coupon discount" required />

                            <font class="text-danger">{{ ($errors->has('coupon_discount'))?$errors->first('coupon_discount'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Coupon validity Date: <span class="tx-danger">*</span></label>
                            <input type="date" class="form-control" name="coupon_validity"  value="{{ $editdata->coupon_validity }}" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" required />

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
