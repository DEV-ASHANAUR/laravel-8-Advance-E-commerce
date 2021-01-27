@extends('layouts.admin-master')
@section('product')
    active show-sub
@endsection
@section('product-create')
    active
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Product</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Product</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data" data-parsley-validate id="selectForm">
                        <div class="form-layout">
                            <div class="row mg-b-25">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Select Brand Name: <span class="tx-danger">*</span></label>
                                        <select name="brand_id" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
                                            <option label="Choose one"></option>
                                            @foreach ($brands as $brand)
                                               <option value="{{ $brand->id }}">{{ ucwords($brand->brand_name_en)  }}</option> 
                                            @endforeach
                                        </select>
                                        <font class="text-danger">{{ ($errors->has('brand_id'))?$errors->first('brand_id'):'' }}</font>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
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
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Select Sub-Category Name: <span class="tx-danger">*</span></label>
                                        <select name="subcategory_id" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
                                            <option label="Choose one"></option>
                                            {{-- @foreach ($category as $cat)
                                            <option value="{{ $cat->id }}">{{ ucwords($cat->category_name_en)  }}</option> 
                                            @endforeach --}}
                                        </select>

                                        <font class="text-danger">{{ ($errors->has('subcategory_id'))?$errors->first('subcategory_id'):'' }}</font>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Select Sub Sub-Category Name: <span class="tx-danger">*</span></label>
                                        <select name="subsubcategory_id" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
                                            <option label="Choose one"></option>
                                            {{-- @foreach ($category as $cat)
                                            <option value="{{ $cat->id }}">{{ ucwords($cat->category_name_en)  }}</option> 
                                            @endforeach --}}
                                        </select>

                                        <font class="text-danger">{{ ($errors->has('subsubcategory_id'))?$errors->first('subsubcategory_id'):'' }}</font>
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Name English: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_name_en" id="en"  value="{{ old('product_name_en') }}" placeholder="Enter product_name_en" required />

                                        <font class="text-danger">{{ ($errors->has('product_name_en'))?$errors->first('product_name_en'):'' }}</font>
                                    </div>
                                </div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Name Bangla: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_name_bn" id="en"  value="{{ old('product_name_bn') }}" placeholder="Enter product_name_bn" required />

                                        <font class="text-danger">{{ ($errors->has('product_name_bn'))?$errors->first('product_name_bn'):'' }}</font>
                                    </div>
                                </div>   
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Product code: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_code" id="en"  value="{{ old('product_code') }}" placeholder="Enter Product code" required />

                                        <font class="text-danger">{{ ($errors->has('product_code'))?$errors->first('product_code'):'' }}</font>
                                    </div>
                                </div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Quantity: <span class="tx-danger">*</span></label>
                                        <input type="number" class="form-control" name="product_qty" id="en"  value="{{ old('product_qty') }}" placeholder="Enter product qty" required />

                                        <font class="text-danger">{{ ($errors->has('product_qty'))?$errors->first('product_qty'):'' }}</font>
                                    </div>
                                </div>   
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Tag English: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_tag_en" id="en"  value="{{ old('product_tag_en') }}" placeholder="Enter product_tag_en" required />

                                        <font class="text-danger">{{ ($errors->has('product_tag_en'))?$errors->first('product_tag_en'):'' }}</font>
                                    </div>
                                </div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Tag Bangla: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_tag_bn" id="en"  value="{{ old('product_tag_bn') }}" placeholder="Enter product_tag_bn" required />

                                        <font class="text-danger">{{ ($errors->has('product_tag_bn'))?$errors->first('product_tag_bn'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Size English: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_size_en" id="en"  value="{{ old('product_size_en') }}" placeholder="Enter product_size_en" required />

                                        <font class="text-danger">{{ ($errors->has('product_size_en'))?$errors->first('product_size_en'):'' }}</font>
                                    </div>
                                </div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Size Bangla: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_size_bn" id="en"  value="{{ old('product_size_bn') }}" placeholder="Enter product_size_bn" required />

                                        <font class="text-danger">{{ ($errors->has('product_size_bn'))?$errors->first('product_size_bn'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Color English: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_color_en" id="en"  value="{{ old('product_color_en') }}" placeholder="Enter product_color_en" required />

                                        <font class="text-danger">{{ ($errors->has('product_color_en'))?$errors->first('product_color_en'):'' }}</font>
                                    </div>
                                </div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Color Bangla: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_color_bn" id="en"  value="{{ old('product_color_bn') }}" placeholder="Enter product_color_bn" required />

                                        <font class="text-danger">{{ ($errors->has('product_color_bn'))?$errors->first('product_color_bn'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="selling_price" id="en"  value="{{ old('selling_price') }}" placeholder="Enter selling_price" required />

                                        <font class="text-danger">{{ ($errors->has('selling_price'))?$errors->first('selling_price'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Discount Price: <span class="tx-danger"></span></label>
                                        <input type="text" class="form-control" name="discount_price" id="en"  value="{{ old('discount_price') }}" placeholder="Enter discount_price" required />

                                        <font class="text-danger">{{ ($errors->has('discount_price'))?$errors->first('discount_price'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Main Thumbnail: <span class="tx-danger">*</span></label>
                                        <input type="file" class="form-control" name="product_thumbnail" id="en"  value="{{ old('product_thumbnail') }}" placeholder="Enter product_thumbnail" required />

                                        <font class="text-danger">{{ ($errors->has('product_thumbnail'))?$errors->first('product_thumbnail'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Multiple Image: <span class="tx-danger">*</span></label>
                                        <input type="file" class="form-control" name="image" id="en"  value="{{ old('image') }}" placeholder="Enter image" required />

                                        <font class="text-danger">{{ ($errors->has('image'))?$errors->first('image'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Short Description English: <span class="tx-danger">*</span></label>
                                        <textarea name="short_descp_en" id="summernote1" cols="30" rows="10"></textarea>

                                        <font class="text-danger">{{ ($errors->has('short_descp_en'))?$errors->first('short_descp_en'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Short Description Bangla: <span class="tx-danger">*</span></label>
                                        <textarea name="short_descp_bn" id="summernote2" cols="30" rows="10"></textarea>

                                        <font class="text-danger">{{ ($errors->has('short_descp_bn'))?$errors->first('short_descp_bn'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Long Description English: <span class="tx-danger">*</span></label>
                                        <textarea name="long_descp_en" id="summernote3" cols="30" rows="10"></textarea>

                                        <font class="text-danger">{{ ($errors->has('long_descp_en'))?$errors->first('long_descp_en'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Long Description Bangla: <span class="tx-danger">*</span></label>
                                        <textarea name="long_descp_bn" id="summernote4" cols="30" rows="10"></textarea>

                                        <font class="text-danger">{{ ($errors->has('long_descp_bn'))?$errors->first('long_descp_bn'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="ckbox">
                                            <input type="checkbox" name="hot_deals" value="1" checked><span>Hot Deals</span>
                                          </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="ckbox">
                                            <input type="checkbox" name="featured" value="1" checked><span>Featured</span>
                                          </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="ckbox">
                                            <input type="checkbox" name="special_offer" value="1" checked><span>Special offer</span>
                                          </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="ckbox">
                                            <input type="checkbox" name="special_deals" value="1" checked><span>Special deals</span>
                                          </label>
                                    </div>
                                </div>
                            </div><!-- row -->
                            <div class="form-layout-footer">
                              <button class="btn btn-info mg-r-5">Submit Form</button>
                              <button class="btn btn-secondary">Cancel</button>
                            </div><!-- form-layout-footer -->
                        </div><!-- form-layout -->
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

      $('#summernote1').summernote({
          height: 150,
          tooltip: false
      });
      $('#summernote2').summernote({
          height: 150,
          tooltip: false
      });
      $('#summernote3').summernote({
          height: 150,
          tooltip: false
      });
      $('#summernote4').summernote({
          height: 150,
          tooltip: false
      });
    });
</script>
@endsection
