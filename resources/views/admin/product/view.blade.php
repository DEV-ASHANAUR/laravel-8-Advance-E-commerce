@extends('layouts.admin-master')
@section('product')
    active show-sub
@endsection
{{-- @section('view-product')
    active 
@endsection --}}
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
                <div class="card-header">View Product</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div>
                                <h5 class="text-capitalize">Main Thumbnail</h5>
                                <img src="{{ asset($pro->product_thumbnail) }}" width="300px" alt="">
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product short Description English</h5>
                                {!! $pro->short_descp_en !!}
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product short Description Bangla</h5>
                                {!! $pro->short_descp_bn !!}
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product long Description English</h5>
                                {!! $pro->long_descp_en !!}
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product long Description Bangla</h5>
                                {!! $pro->long_descp_bn !!}
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div>
                                <h5 class="text-capitalize">Sub Image</h5>
                                @foreach ($img as $img)
                                    <img src="{{ asset($img->image) }}" width="100px" alt="">
                                @endforeach
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product name english</h5>
                                {!! $pro->product_name_en !!}
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product name Bangla</h5>
                                {!! $pro->product_name_bn !!}
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">selling price</h5>
                                @if (!$pro->discount_price == NULL)
                                {{ number_format($pro->discount_price,2) }} $
                                @else
                                    {{ number_format($pro->selling_price,'2') }} $
                                @endif
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">Discount</h5>
                                @if ($pro->discount_price == NULL)
                                <span class="badge badge-pill badge-danger">No</span>
                            @else
                                @php
                                    $amount = $pro->selling_price - $pro->discount_price;
                                    $discount = ($amount/$pro->selling_price) * 100;
                                @endphp
                                <span class="badge badge-pill badge-success">{{ round($discount) }}%</span>
                            @endif
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product brand</h5>
                                <span class="text-capitalize">{!! $pro->brand->brand_name_en !!}</span>
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product category</h5>
                                <span class="text-capitalize">{!! $pro->category->category_name_en !!}</span>
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product Sub Category</h5>
                                <span class="text-capitalize">{!! $pro->subcategory->subcategory_name_en !!}</span>
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product sub sub-category</h5>
                                <span class="text-capitalize">{!! $pro->subsubcategory->subsubcategory_name_en !!}</span>
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product code</h5>
                                <span>{!! $pro->product_code !!}</span>
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product Quantity</h5>
                                <span class="text-capitalize">{!! $pro->product_qty !!}</span>
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product Tag English</h5>
                                <span class="text-capitalize">{!! $pro->product_tag_en !!}</span>
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product tag bangla</h5>
                                <span class="text-capitalize">{!! $pro->product_tag_bn !!}</span>
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product Size English</h5>
                                <span class="text-uppercase">{!! $pro->product_size_en !!}</span>
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product size bangla</h5>
                                <span class="text-capitalize">{!! $pro->product_size_bn !!}</span>
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product Color English</h5>
                                <span class="text-uppercase">{!! $pro->product_color_en !!}</span>
                            </div>
                            <div class="mt-2 mb-2">
                                <h5 class="text-capitalize">product color bangla</h5>
                                <span class="text-capitalize">{!! $pro->product_color_bn !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- card -->
        </div>      
      </div><!-- row -->
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
@endsection
@section('admin-script')

@endsection
