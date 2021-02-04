@extends('layouts.admin-master')
@section('shippingArea')
    active show-sub
@endsection
@section('add-district')
    active 
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">District</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit District</div>
                <div class="card-body">
                    <form action="{{ route('district.update',$editdata->id) }}" method="POST" id="Myform" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                          <label class="form-control-label">Select Division Name: <span class="tx-danger">*</span></label>
                          <select name="division_id" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
                              <option label="Choose one"></option>
                              @foreach ($division as $div)
                                <option value="{{ $div->id }}" {{ ($editdata->division_id == $div->id)?'selected':'' }}>{{ ucwords($div->division_name)  }}</option> 
                              @endforeach
                          </select>
                          <font class="text-danger">{{ ($errors->has('division_id'))?$errors->first('division_id'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">District Name: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="district_name"  value="{{ $editdata->district_name }}" placeholder="Enter District Name" required />
                            <font class="text-danger">{{ ($errors->has('district_name'))?$errors->first('district_name'):'' }}</font>
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
