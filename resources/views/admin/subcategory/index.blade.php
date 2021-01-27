@extends('layouts.admin-master')
@section('Categories')
    active show-sub
@endsection
@section('sub-category')
    active 
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Sub Category</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sub Category List</div>
                <div class="card-body">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-25p">SL</th>
                          <th class="wd-25p">Category Name</th>
                          <th class="wd-25p">Sub Category Name En</th>
                          <th class="wd-25p">Sub Category Name Bn</th>
                          <th class="wd-25p">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($subcate as $key => $item)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td style="text-transform: uppercase">{{ $item->category->category_name_en }}</td>
                          <td style="text-transform: uppercase">{{ $item->subcategory_name_en }}</td>
                          <td>{{ $item->subcategory_name_bn }}</td>
                          <td>
                            <a href="{{ route('subcategory.edit',$item->id) }}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>

                            <a href="{{ route('subcategory.delete',$item->id) }}" id="delete" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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
                <div class="card-header">Add Category</div>
                <div class="card-body">
                    <form action="{{ route('subcategory.store') }}" method="POST" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                            <label class="form-control-label">Select Category Name: <span class="tx-danger">*</span></label>
                            <select name="category_id" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
                                <option label="Choose one"></option>
                                @foreach ($category as $cat)
                                   <option value="{{ $cat->id }}">{{ ucwords($cat->category_name_en)  }}</option> 
                                @endforeach
                            </select>
                            <font class="text-danger">{{ ($errors->has('category_id'))?$errors->first('category_id'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">SubCategory Name English: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="subcategory_name_en" id="en"  value="{{ old('subcategory_name_en') }}" placeholder="Enter subcategory_name_en" required />

                            <font class="text-danger">{{ ($errors->has('subcategory_name_en'))?$errors->first('subcategory_name_en'):'' }}</font>

                        </div>
                        <div class="form-group">
                            <label class="form-control-label">SubCategory Name Bangla: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="subcategory_name_bn"  value="{{ old('subcategory_name_bn') }}" placeholder="Enter subcategory_name_bn" required />

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
