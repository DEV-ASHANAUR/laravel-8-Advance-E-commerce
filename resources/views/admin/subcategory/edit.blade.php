@extends('layouts.admin-master')
@section('Categories')
    active show-sub
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Sub Category</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Sub Category</div>
                <div class="card-body">
                    <form action="{{ route('subcategory.update',$editdata->id) }}" method="POST" id="Myform" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                            <label class="form-control-label">Select Category Name: <span class="tx-danger">*</span></label>
                            <select name="category_id" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
                                <option label="Choose one"></option>
                                @foreach ($category as $cat)
                                <option value="{{ $cat->id }}" {{ ($cat->id == $editdata->category_id)?'selected':'' }} >{{ ucwords($cat->category_name_en)  }}</option> 
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Sub Category Name English: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="subcategory_name_en" id="en"  value="{{ $editdata->subcategory_name_en }}" placeholder="Enter subcategory_name_en" required />

                            <font class="text-danger">{{ ($errors->has('subcategory_name_en'))?$errors->first('subcategory_name_en'):'' }}</font>

                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Sub Category Name Bangla: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="subcategory_name_bn"  value="{{ $editdata->subcategory_name_bn }}" placeholder="Enter category_name_bn" required />

                            <font class="text-danger">{{ ($errors->has('subcategory_name_bn'))?$errors->first('subcategory_name_bn'):'' }}</font>
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
        // Select2 by showing the search
       $('.select2-show-search').select2({
          minimumResultsForSearch: ''
        });

      $('#selectForm').parsley();
    });
  </script>
@endsection
