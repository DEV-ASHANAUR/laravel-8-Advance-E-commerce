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
                    <form action="{{ route('product.store') }}" id="Myform_product" method="POST" enctype="multipart/form-data" data-parsley-validate id="selectForm">
                        @csrf
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
                                        <select name="category_id" id="category_id" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
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
                                        <select name="subcategory_id" id="subcategory" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
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
                                        <select name="subsubcategory_id" id="subsubcategory" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
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
                                        <input type="text" class="form-control" name="product_tag_en" data-role="tagsinput"  value="{{ old('product_tag_en') }}" placeholder="Enter product_tag_en" required />

                                        <font class="text-danger">{{ ($errors->has('product_tag_en'))?$errors->first('product_tag_en'):'' }}</font>
                                    </div>
                                </div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Tag Bangla: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_tag_bn" data-role="tagsinput"  value="{{ old('product_tag_bn') }}" placeholder="Enter product_tag_bn" required />

                                        <font class="text-danger">{{ ($errors->has('product_tag_bn'))?$errors->first('product_tag_bn'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Size English: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_size_en" data-role="tagsinput"  value="{{ old('product_size_en') }}" placeholder="Enter product_size_en" required />

                                        <font class="text-danger">{{ ($errors->has('product_size_en'))?$errors->first('product_size_en'):'' }}</font>
                                    </div>
                                </div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Size Bangla: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_size_bn" data-role="tagsinput"  value="{{ old('product_size_bn') }}" placeholder="Enter product_size_bn" required />

                                        <font class="text-danger">{{ ($errors->has('product_size_bn'))?$errors->first('product_size_bn'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Color English: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_color_en" data-role="tagsinput" value="{{ old('product_color_en') }}" placeholder="Enter product_color_en" required />

                                        <font class="text-danger">{{ ($errors->has('product_color_en'))?$errors->first('product_color_en'):'' }}</font>
                                    </div>
                                </div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Color Bangla: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="product_color_bn" data-role="tagsinput"  value="{{ old('product_color_bn') }}" placeholder="Enter product_color_bn" required />

                                        <font class="text-danger">{{ ($errors->has('product_color_bn'))?$errors->first('product_color_bn'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                                        <input type="number" class="form-control" name="selling_price" id="en"  value="{{ old('selling_price') }}" placeholder="Enter selling_price" required />

                                        <font class="text-danger">{{ ($errors->has('selling_price'))?$errors->first('selling_price'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Discount Price: <span class="tx-danger"></span></label>
                                        <input type="number" class="form-control" name="discount_price" id="en"  value="{{ old('discount_price') }}" placeholder="Enter discount_price" />

                                    </div>
                                </div>        
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Main Thumbnail: <span class="tx-danger">*</span></label>
                                        <input type="file" id="file-img" class="form-control" name="product_thumbnail" value="{{ old('product_thumbnail') }}" placeholder="Enter product_thumbnail" required />

                                        <font class="text-danger">{{ ($errors->has('product_thumbnail'))?$errors->first('product_thumbnail'):'' }}</font>
                                    </div>
                                    <div id="test-img"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Multiple Image: <span class="tx-danger">*</span></label>
                                        <input type="file" class="form-control" name="image[]" value="{{ old('image') }}" id="multiple" placeholder="Enter image" multiple required />

                                        <font class="text-danger">{{ ($errors->has('image'))?$errors->first('image'):'' }}</font>
                                    </div>
                                    <div id="preview_img"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Short Description English: <span class="tx-danger">*</span></label>
                                        <textarea name="short_descp_en" id="summernote1" cols="30" rows="10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorem ad est sit impedit optio omnis, repellendus voluptatibus repudiandae adipisci tempore tenetur, fuga corrupti? Suscipit consequatur amet consectetur mollitia ea.
                                        </textarea>

                                        <font class="text-danger">{{ ($errors->has('short_descp_en'))?$errors->first('short_descp_en'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Short Description Bangla: <span class="tx-danger">*</span></label>
                                        <textarea name="short_descp_bn" id="summernote2" cols="30" rows="10">
                                            আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার।
                                        </textarea>

                                        <font class="text-danger">{{ ($errors->has('short_descp_bn'))?$errors->first('short_descp_bn'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Long Description English: <span class="tx-danger">*</span></label>
                                        <textarea name="long_descp_en" id="summernote3" cols="30" rows="10">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam alias placeat, reprehenderit magni, aliquam expedita a nulla aut quia velit? Illo deleniti aspernatur optio! Molestias nemo nostrum ipsam dolor?
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita explicabo quisquam error quod excepturi ea exercitationem dicta nam cumque similique saepe ducimus earum, nemo commodi rerum fuga quis provident eius.
                                        </textarea>

                                        <font class="text-danger">{{ ($errors->has('long_descp_en'))?$errors->first('long_descp_en'):'' }}</font>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Product Long Description Bangla: <span class="tx-danger">*</span></label>
                                        <textarea name="long_descp_bn" id="summernote4" cols="30" rows="10">
                                            আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।

বাংলা সব অক্ষর রাখার একটা চেষ্টা ছিল। কিন্তু তা ব্যর্থ – আমি শেষে এই চেষ্টা করাটাকেই অপ্রয়োজনীয় মনে করলাম। এ-তো আর বাংলা ভাষার আগার হচ্ছে না, এ হলো পরম্পরাহীন, কিংবা তাৎপর্যপূর্ণ একটি লেখা, যা বাংলা ভাষার প্রতিনিধিত্ব করবে টাইপসেটিং, প্রিন্টিং, ইন্ডাস্ট্রিতে কিংবা ওয়েব ডিযাইনে।
                                        </textarea>

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
{{-- product main thumbnail preview --}}
<script>
    function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            $('#Myform_product + img').remove();
            $('#test-img').html('<img class="img-fluid img-thumbnail" src="'+e.target.result+'" width="80px" height="80px" />');
        }
        reader.readAsDataURL(input.files[0]);
        }
        }
        $("#file-img").change(function () {
            filePreview(this);
        });
</script>
{{-- multiple img preview script --}}
<script>
    $(document).ready(function(){
        $('#multiple').on('change',function(){
            $('#preview_img').html('');
            if(window.File && window.FileReader && window.FileList && window.Blob)
            {
                var data = $(this)[0].files;

                $.each(data, function(index, file){
                    if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                        var fRead = new FileReader();
                        fRead.onload = (function(file){
                            return function(e){
                                var img = $('<img/>').addClass('thumb').attr('src', e.target.result).attr('class','img-thumbnail').width(80).height(80);
                                $('#preview_img').append(img);
                            };
                        })(file);
                        fRead.readAsDataURL(file);
                    }
                });
            }
            else{
                alert('Your Browser dosent support file API');
            }
        });
    });
</script>
{{-- sub category and sub sub request script --}}
<script>
    $(document).ready(function(){
      $(document).on('change','#category_id',function(){
        var category_id = $(this).val();
        // alert(category_id);
        $.ajax({
          url:"{{route('get-subcategory')}}",
          type:"GET",
          data:{category_id:category_id},
          success:function(data){
            $('#subsubcategory').html('');
            var html = '<option value="">Selcet Subcategory</option>';
            $.each(data,function(key,v){
              html +='<option value="'+v.id+'">'+v.subcategory_name_en+'</option>';
            });
            $('#subcategory').html(html);
          }
        });
      });
    });

    $(document).ready(function(){
      $(document).on('change','#subcategory',function(){
        var subcategory_id = $(this).val();
        //alert(subcategory_id);
        $.ajax({
          url:"{{route('get-subsubcategory')}}",
          type:"GET",
          data:{subcategory_id:subcategory_id},
          success:function(data){
            var html = '<option value="">Selcet Sub sub-category</option>';
            $.each(data,function(key,v){
              html +='<option value="'+v.id+'">'+v.subsubcategory_name_en+'</option>';
            });
            $('#subsubcategory').html(html);
          }
        });
      });
    });
</script>
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
