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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Brand List</div>
                <div class="card-body">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-25p">SL</th>
                          <th class="wd-25p">Image</th>
                          <th class="wd-25p">Brand Name En</th>
                          <th class="wd-25p">Brand Name Bn</th>
                          <th class="wd-25p">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($brands as $key => $brand)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td>
                            <img src="{{ asset($brand->brand_image) }}" class="img-thumbnail" style="width: 80px" alt="">
                          </td>
                          <td>{{ $brand->brand_name_en }}</td>
                          <td>{{ $brand->brand_name_bn }}</td>
                          <td>
                            <a href="" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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
                <div class="card-header">Add Brand</div>
                <div class="card-body">
                    <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                            <label class="form-control-label">Brand Name English: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="brand_name_en" id="en"  value="{{ old('brand_name_en') }}" placeholder="Enter brand_name_en" required />
                            <font class="text-danger">{{ ($errors->has('brand_name_en'))?$errors->first('brand_name_en'):'' }}</font>

                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Brand Name Bangla: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="brand_name_bn"  value="{{ old('brand_name_bn') }}" placeholder="Enter brand_name_bn" required />

                            <font class="text-danger">{{ ($errors->has('brand_name_bn'))?$errors->first('brand_name_bn'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Brand Image: <span class="tx-danger">*</span></label>
                            <input type="file" class="form-control" name="brand_image" required />

                            <font class="text-danger">{{ ($errors->has('brand_image'))?$errors->first('brand_image'):'' }}</font>
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
