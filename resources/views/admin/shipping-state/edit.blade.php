@extends('layouts.admin-master')
@section('shippingArea')
    active show-sub
@endsection
@section('add-state')
    active 
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">State</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit State</div>
                <div class="card-body">
                    <form action="{{ route('state.update',$editdata->id) }}" method="POST" id="Myform" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                          <label class="form-control-label">Division Name: <span class="tx-danger">*</span></label>
                          <input type="text" class="form-control" value="{{ $editdata->division->division_name }}" disabled />
                          <input type="hidden" name="division_id" value="{{ $editdata->division_id }}" >
                          <font class="text-danger">{{ ($errors->has('division_id'))?$errors->first('division_id'):'' }}</font>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">District Name: <span class="tx-danger">*</span></label>
                          <input type="text" class="form-control" value="{{ $editdata->district->district_name }}" name="district_id" disabled required />
                          <input type="hidden" name="district_id" value="{{ $editdata->district_id }}" >
                          <font class="text-danger">{{ ($errors->has('district_id'))?$errors->first('district_id'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">State Name: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="state_name"  value="{{ $editdata->state_name }}" placeholder="Enter State Name" required />
                            <font class="text-danger">{{ ($errors->has('state_name'))?$errors->first('state_name'):'' }}</font>
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
