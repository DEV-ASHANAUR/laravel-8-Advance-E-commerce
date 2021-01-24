@extends('layouts.admin-master')
@section('brands')
    active
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Brands</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Brand</div>
                <div class="card-body">
                    <form action="{{ route('brand.update',$editdata->id) }}" method="POST" id="Myform" enctype="multipart/form-data" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                            <label class="form-control-label">Brand Name English: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="brand_name_en" id="en"  value="{{ $editdata->brand_name_en }}" placeholder="Enter brand_name_en" required />

                            <font class="text-danger">{{ ($errors->has('brand_name_en'))?$errors->first('brand_name_en'):'' }}</font>

                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Brand Name Bangla: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="brand_name_bn"  value="{{ $editdata->brand_name_bn }}" placeholder="Enter brand_name_bn" required />

                            <font class="text-danger">{{ ($errors->has('brand_name_bn'))?$errors->first('brand_name_bn'):'' }}</font>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label class="form-control-label">Brand Image: <span class="tx-danger">*</span></label>
                                <input type="file" class="form-control" id="file" name="brand_image" />
    
                                <font class="text-danger">{{ ($errors->has('brand_image'))?$errors->first('brand_image'):'' }}</font>
                            </div>
                            <div class="form-group col-md-4" id="test">
                                <img src="{{ asset($editdata->brand_image) }}" class="img-thumbnail" width="150px" alt="">
                            </div>    
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
