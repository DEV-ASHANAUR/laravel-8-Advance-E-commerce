@extends('layouts.admin-master')
@section('slider')
    active
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Slider</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Slider</div>
                <div class="card-body">
                    <form action="{{ route('slider.update',$editdata->id) }}" method="POST" id="Myform" enctype="multipart/form-data" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                          <label class="form-control-label">Slider Title English: <span class="tx-danger">*</span></label>
                          <input type="text" class="form-control" name="title_en" id="en"  value="{{ $editdata->title_en }}" placeholder="Enter title English" />
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Slider Title Bangla: <span class="tx-danger">*</span></label>
                          <input type="text" class="form-control" name="title_bn" id="en"  value="{{ $editdata->title_bn }}" placeholder="Enter title Bangla" />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Slider Description English: <span class="tx-danger">*</span></label>
                            {{-- <input type="text" class="form-control" name="description"  value="{{ old('description') }}" placeholder="Enter description" required /> --}}
                            <textarea name="description_en" class="form-control" id="" placeholder="Enter description English">{{ $editdata->description_en }}</textarea>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Slider Description Bangla: <span class="tx-danger">*</span></label>
                          {{-- <input type="text" class="form-control" name="description"  value="{{ old('description') }}" placeholder="Enter description" required /> --}}
                          <textarea name="description_bn" class="form-control" id="" placeholder="Enter description Bangla">{{ $editdata->description_bn }}</textarea>
                      </div>
                        <div class="form-row">
                          <div class="form-group col-md-8">
                              <label class="form-control-label">Slider Image: <span class="tx-danger">*</span></label>
                              <input type="file" class="form-control" id="file" name="image" />
  
                              <font class="text-danger">{{ ($errors->has('image'))?$errors->first('image'):'' }}</font>
                          </div>
                          <div class="form-group col-md-4" id="test">
                              <img src="{{ asset($editdata->image) }}" class="img-thumbnail" width="150px" alt="">
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
