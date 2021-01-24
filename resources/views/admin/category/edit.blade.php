@extends('layouts.admin-master')
@section('Categories')
    active show-sub
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Category</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Category</div>
                <div class="card-body">
                    <form action="{{ route('category.update',$editdata->id) }}" method="POST" id="Myform" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                            <label class="form-control-label">Category Name English: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="category_name_en" id="en"  value="{{ $editdata->category_name_en }}" placeholder="Enter category_name_en" required />

                            <font class="text-danger">{{ ($errors->has('category_name_en'))?$errors->first('category_name_en'):'' }}</font>

                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Category Name Bangla: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="category_name_bn"  value="{{ $editdata->category_name_bn }}" placeholder="Enter category_name_bn" required />

                            <font class="text-danger">{{ ($errors->has('category_name_bn'))?$errors->first('category_name_bn'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Category Icon: <span class="tx-danger">*</span></label>
                            <input type="text" value="{{ $editdata->category_icon }}" class="form-control" name="category_icon" placeholder="Enter category Icon" />

                            <font class="text-danger">{{ ($errors->has('category_icon'))?$errors->first('category_icon'):'' }}</font>
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
