@extends('layouts.fontend-master')
@section('content')
@section('title')
@if (session()->get('language') == 'bangla')
    {{ $products->product_name_bn }}
@else
    {{ $products->product_name_en }}
@endif

@endsection
@php
	function bn_price($str){
		$en = array(1,2,3,4,5,6,7,8,9,0);
		$bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
		$str = str_replace($en,$bn,$str);
		return $str;
	}
@endphp

<div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#">Clothing</a></li>
          <li class="active">Floral Print Buttoned</li>
        </ul>
      </div>
      <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.breadcrumb -->
  <div class="body-content outer-top-xs">
    <div class="container">
      <div class="row single-product">
        <div class="col-md-3 sidebar">
          <div class="sidebar-module-container">
            <div class="home-banner outer-top-n">
              <img src="{{asset('fontend')}}/assets/images/banners/LHS-banner.jpg" alt="Image" />
            </div>

            <!-- ============================================== HOT DEALS ============================================== -->
            @include('fontend.inc.hot-deals')
            <!-- ============================================== HOT DEALS: END ============================================== -->
            

            <!-- ================== NEWSLETTER ================== -->
            <div
              class="sidebar-widget newsletter wow fadeInUp outer-bottom-small outer-top-vs"
            >
              <h3 class="section-title">Newsletters</h3>
              <div class="sidebar-widget-body outer-top-xs">
                <p>Sign Up for Our Newsletter!</p>
                <form role="form">
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail1"
                      >Email address</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      id="exampleInputEmail1"
                      placeholder="Subscribe to our newsletter"
                    />
                  </div>
                  <button class="btn btn-primary">Subscribe</button>
                </form>
              </div>
              <!-- /.sidebar-widget-body -->
            </div>
            <!-- /.sidebar-widget -->
            <!-- ============================================== NEWSLETTER: END ============================================== -->

            <!-- ============================================== Testimonials============================================== -->
            @include('fontend.inc.testimonial')

            <!-- ============== Testimonials: END ======== -->
          </div>
        </div>
        <!-- /.sidebar -->
        <div class="col-md-9">
          <div class="detail-block">
            <div class="row wow fadeInUp">
              <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div
                  class="product-item-holder size-big single-product-gallery small-gallery"
                >
                  <div id="owl-single-product">
                    @foreach ($multi_img as $img) 
                    <div class="single-product-gallery-item" id="slide{{ $img->id }}">
                      <a
                        data-lightbox="image-1"
                        data-title="Gallery"
                        href="{{asset($img->image)}}"
                      >
                        <img
                          class="img-responsive"
                          alt=""
                          src="{{asset($img->image)}}"
                          data-echo="{{asset($img->image)}}"
                        />
                      </a>
                    </div>
                    @endforeach 
                  </div>
                  <!-- /.single-product-slider -->

                  <div class="single-product-gallery-thumbs gallery-thumbs">
                    <div id="owl-single-product-thumbnails">
                      @foreach ($multi_img as $key => $img)   
                      <div class="item">
                        <a
                          class="horizontal-thumb active"
                          data-target="#owl-single-product"
                          data-slide="{{ $key+1 }}"
                          href="#slide{{ $img->id }}"
                        >
                          <img
                            class="img-responsive"
                            width="85"
                            alt=""
                            src="{{asset($img->image)}}"
                            data-echo="{{asset($img->image)}}"
                          />
                        </a>
                      </div>
                      @endforeach
                      
                    </div>
                    <!-- /#owl-single-product-thumbnails -->
                  </div>
                  <!-- /.gallery-thumbs -->
                </div>
                <!-- /.single-product-gallery -->
              </div>
              <!-- /.gallery-holder -->
              <div class="col-sm-6 col-md-7 product-info-block">
                <div class="product-info">
                    @if (session()->get('language') == 'bangla')
                        <h1 class="name">{{ $products->product_name_bn }}</h1>
                    @else
                        <h1 class="name text-capitalize">{{ $products->product_name_en }}</h1>
                    @endif
                  

                  <div class="rating-reviews m-t-20">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="rating rateit-small"></div>
                      </div>
                      <div class="col-sm-8">
                        <div class="reviews">
                          <a href="#" class="lnk">(13 Reviews)</a>
                        </div>
                      </div>
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.rating-reviews -->

                  <div class="stock-container info-container m-t-10">
                    <div class="row">
                      <div class="col-sm-2">
                        <div class="stock-box">
                          <span class="label">Availability :</span>
                        </div>
                      </div>
                      <div class="col-sm-9">
                        <div class="stock-box">
                          <span class="value">In Stock</span>
                        </div>
                      </div>
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.stock-container -->
                  @if (session()->get('language') == 'bangla')
                    <div class="description-container m-t-20">
                        {!! $products->short_descp_bn !!}
                    </div>
                  @else
                    <div class="description-container m-t-20">
                        {!! $products->short_descp_en !!}
                    </div>
                  @endif
                  
                  <!-- /.description-container -->

                  <div class="price-container info-container m-t-20">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          @if (session()->get('language') == 'bangla')
                            <label for="">সিলেক্ট কালার</label>
                            <select name="color" class="form-control" id="">
                                  <option>সিলেক্ট কালার</option>
                              @foreach ($product_color_bn as $color)
                                  <option value="{{ $color }}">{{ $color }}</option>
                              @endforeach
                            </select> 
                          @else
                            <label for="">Select Color</label>
                            <select name="color" class="form-control" id="">
                              <option>Select Color</option>
                              @foreach ($product_color_en as $color)
                                  <option value="{{ $color }}">{{ ucwords($color) }}</option>
                              @endforeach
                            </select>
                          @endif
                          
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          @if ($product_size_en)
                            @if (session()->get('language') == 'bangla')
                              <label for="">সিলেক্ট সাইজ</label>
                              <select name="size" class="form-control" id="">
                                <option value="">সিলেক্ট সাইজ</option>
                                @foreach ($product_size_bn as $size)
                                  <option value="{{ $size }}">{{ $size }}</option>
                                @endforeach
                              </select>
                            @else
                              <label for="">Select Size</label>
                              <select name="size" class="form-control" id="">
                                <option>Select Size</option>
                                @foreach ($product_size_en as $size)
                                  <option value="{{ $size }}">{{ ucwords($size) }}</option>
                                @endforeach
                              </select>
                            @endif
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="price-box">
                            @if ($products->discount_price == null)
                                @if (session()->get('language') == 'bangla')
                                <span class="price">${{ bn_price($products->selling_price) }}</span>
                                @else
                                <span class="price">${{ number_format($products->selling_price,2) }}</span>
                                @endif
                            
                            @else
                                @if (session()->get('language') == 'bangla')
                                    <span class="price">${{ bn_price($products->discount_price) }}</span>

                                    <span class="price-strike">${{ bn_price($products->selling_price) }}<span>
                                @else
                                    <span class="price">${{ number_format($products->discount_price,2) }}</span>

                                    <span class="price-strike">${{ number_format($products->selling_price,2) }}<span>
                                @endif
                            @endif  
                          {{-- <span class="price">$800.00</span>
                          <span class="price-strike">$900.00</span> --}}
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="favorite-button m-t-10">
                          <a
                            class="btn btn-primary"
                            data-toggle="tooltip"
                            data-placement="right"
                            title="Wishlist"
                            href="#"
                          >
                            <i class="fa fa-heart"></i>
                          </a>
                          <a
                            class="btn btn-primary"
                            data-toggle="tooltip"
                            data-placement="right"
                            title="Add to Compare"
                            href="#"
                          >
                            <i class="fa fa-signal"></i>
                          </a>
                          <a
                            class="btn btn-primary"
                            data-toggle="tooltip"
                            data-placement="right"
                            title="E-mail"
                            href="#"
                          >
                            <i class="fa fa-envelope"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    
                    <!-- /.row -->
                  </div>
                  <!-- /.price-container -->

                  <div class="quantity-container info-container">
                    <div class="row">
                      <div class="col-sm-2">
                        <span class="label">Qty :</span>
                      </div>

                      <div class="col-sm-2">
                        <div class="cart-quantity">
                          <div class="quant-input">
                            <div class="arrows">
                              <div class="arrow plus gradient">
                                <span class="ir"
                                  ><i class="icon fa fa-sort-asc"></i
                                ></span>
                              </div>
                              <div class="arrow minus gradient">
                                <span class="ir"
                                  ><i class="icon fa fa-sort-desc"></i
                                ></span>
                              </div>
                            </div>
                            <input type="text" value="1" />
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-7">
                        <a href="#" class="btn btn-primary"
                          ><i class="fa fa-shopping-cart inner-right-vs"></i>
                          @if (session()->get('language') == 'bangla')
															কার্টে যোগ করুন
													@else
															Add to cart
                          @endif
                          </a>
                      </div>
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.quantity-container -->
                </div>
                <!-- /.product-info -->
              </div>
              <!-- /.col-sm-7 -->
            </div>
            <!-- /.row -->
          </div>

          <div class="product-tabs inner-bottom-xs wow fadeInUp">
            <div class="row">
              <div class="col-sm-3">
                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                  <li class="active">
                    <a data-toggle="tab" href="#description">DESCRIPTION</a>
                  </li>
                  <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                  <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                </ul>
                <!-- /.nav-tabs #product-tabs -->
              </div>
              <div class="col-sm-9">
                <div class="tab-content">
                  <div id="description" class="tab-pane in active">
                    <div class="product-tab">
                        @if (session()->get('language') == 'bangla')
                            <p class="text">
                                {!! $products->long_descp_bn !!}
                            </p>
                        @else
                            <p class="text">
                                {!! $products->long_descp_en !!}
                            </p>
                        @endif
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div id="review" class="tab-pane">
                    <div class="product-tab">
                      <div class="product-reviews">
                        <h4 class="title">Customer Reviews</h4>

                        <div class="reviews">
                          <div class="review">
                            <div class="review-title">
                              <span class="summary">We love this product</span
                              ><span class="date"
                                ><i class="fa fa-calendar"></i
                                ><span>1 days ago</span></span
                              >
                            </div>
                            <div class="text">
                              "Lorem ipsum dolor sit amet, consectetur
                              adipiscing elit.Aliquam suscipit."
                            </div>
                          </div>
                        </div>
                        <!-- /.reviews -->
                      </div>
                      <!-- /.product-reviews -->

                      <div class="product-add-review">
                        <h4 class="title">Write your own review</h4>
                        <div class="review-table">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th class="cell-label">&nbsp;</th>
                                  <th>1 star</th>
                                  <th>2 stars</th>
                                  <th>3 stars</th>
                                  <th>4 stars</th>
                                  <th>5 stars</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="cell-label">Quality</td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="1"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="2"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="3"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="4"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="5"
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td class="cell-label">Price</td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="1"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="2"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="3"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="4"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="5"
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td class="cell-label">Value</td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="1"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="2"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="3"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="4"
                                    />
                                  </td>
                                  <td>
                                    <input
                                      type="radio"
                                      name="quality"
                                      class="radio"
                                      value="5"
                                    />
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- /.table .table-bordered -->
                          </div>
                          <!-- /.table-responsive -->
                        </div>
                        <!-- /.review-table -->

                        <div class="review-form">
                          <div class="form-container">
                            <form role="form" class="cnt-form">
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="exampleInputName"
                                      >Your Name
                                      <span class="astk">*</span></label
                                    >
                                    <input
                                      type="text"
                                      class="form-control txt"
                                      id="exampleInputName"
                                      placeholder=""
                                    />
                                  </div>
                                  <!-- /.form-group -->
                                  <div class="form-group">
                                    <label for="exampleInputSummary"
                                      >Summary
                                      <span class="astk">*</span></label
                                    >
                                    <input
                                      type="text"
                                      class="form-control txt"
                                      id="exampleInputSummary"
                                      placeholder=""
                                    />
                                  </div>
                                  <!-- /.form-group -->
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="exampleInputReview"
                                      >Review
                                      <span class="astk">*</span></label
                                    >
                                    <textarea
                                      class="form-control txt txt-review"
                                      id="exampleInputReview"
                                      rows="4"
                                      placeholder=""
                                    ></textarea>
                                  </div>
                                  <!-- /.form-group -->
                                </div>
                              </div>
                              <!-- /.row -->

                              <div class="action text-right">
                                <button class="btn btn-primary btn-upper">
                                  SUBMIT REVIEW
                                </button>
                              </div>
                              <!-- /.action -->
                            </form>
                            <!-- /.cnt-form -->
                          </div>
                          <!-- /.form-container -->
                        </div>
                        <!-- /.review-form -->
                      </div>
                      <!-- /.product-add-review -->
                    </div>
                    <!-- /.product-tab -->
                  </div>
                  <!-- /.tab-pane -->

                  <div id="tags" class="tab-pane">
                    <div class="product-tag">
                      <h4 class="title">Product Tags</h4>
                      <form role="form" class="form-inline form-cnt">
                        <div class="form-container">
                          <div class="form-group">
                            <label for="exampleInputTag"
                              >Add Your Tags:
                            </label>
                            <input
                              type="email"
                              id="exampleInputTag"
                              class="form-control txt"
                            />
                          </div>

                          <button
                            class="btn btn-upper btn-primary"
                            type="submit"
                          >
                            ADD TAGS
                          </button>
                        </div>
                        <!-- /.form-container -->
                      </form>
                      <!-- /.form-cnt -->

                      <form role="form" class="form-inline form-cnt">
                        <div class="form-group">
                          <label>&nbsp;</label>
                          <span class="text col-md-offset-3"
                            >Use spaces to separate tags. Use single quotes
                            (') for phrases.</span
                          >
                        </div>
                      </form>
                      <!-- /.form-cnt -->
                    </div>
                    <!-- /.product-tab -->
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.product-tabs -->

          <!-- ============================================== UPSELL PRODUCTS ============================================== -->
          <section class="section featured-product wow fadeInUp">
            <h3 class="section-title">
              @if (session()->get('language') == 'bangla')
                সম্পর্কিত পন্য  
              @else
                Related Product  
              @endif
            </h3>
            <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
              @forelse ($realtedProduct as $product)
								<div class="item item-carousel">
									<div class="products">
										<div class="product">		
											<div class="product-image">
												<div class="image">
													@if (session()->get('language') == 'bangla')
														<a href="{{ url('single/product/'.$product->id.'/'.$product->product_slug_bn) }}"><img src="{{ asset($product->product_thumbnail) }}" alt=""></a>
													@else
														<a href="{{ url('single/product/'.$product->id.'/'.$product->product_slug_en) }}"><img src="{{ asset($product->product_thumbnail) }}" alt=""></a>
													@endif
												</div><!-- /.image -->			
												@php
													$amount = $product->selling_price - $product->discount_price;
													$discount = ($amount/$product->selling_price) * 100;
												@endphp
												@if ($product->discount_price == null)
												<div class="tag new">
													@if (session()->get('language') == 'bangla')
														<span>নতুন</span>
													@else
														<span>new</span>
													@endif
													
												</div>
												@else
												<div class="tag new" style="background: #ff7878">
												@if (session()->get('language') == 'bangla')
													<span>{{ bn_price(round($discount)) }}%</span>
												@else
													<span>{{ round($discount) }}%</span>
												@endif
													
												</div>
												@endif
																				
											</div><!-- /.product-image -->
											<div class="product-info text-left">
												<h3 class="name text-capitalize">
													@if (session()->get('language') == 'bangla')
													<a href="{{ url('single/product/'.$product->id.'/'.$product->product_slug_bn) }}">{{ $product->product_name_bn }}</a>
													@else
													<a href="{{ url('single/product/'.$product->id.'/'.$product->product_slug_en) }}">{{ $product->product_name_en }}</a>
													@endif
												</h3>
												<div class="rating rateit-small"></div>
												<div class="description"></div>

												<div class="product-price">	
													@if ($product->discount_price == null)
														@if (session()->get('language') == 'bangla')
															<span class="price">${{ bn_price($product->selling_price) }}</span>
														@else
															<span class="price">${{ number_format($product->selling_price,2) }}</span>
														@endif
														
													@else
														@if (session()->get('language') == 'bangla')
															<span class="price">${{ bn_price($product->discount_price) }}</span>

															<span class="price-before-discount">${{ bn_price($product->selling_price) }}<span>
														@else
															<span class="price">${{ number_format($product->discount_price,2) }}</span>

															<span class="price-before-discount">${{ number_format($product->selling_price,2) }}<span>
														@endif
													@endif
													
												</div><!-- /.product-price -->
											</div><!-- /.product-info -->
											<div class="cart clearfix animate-effect">
												<div class="action">
													<ul class="list-unstyled">
														<li class="add-cart-button btn-group">
															<button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart">
																<i class="fa fa-shopping-cart"></i>													
															</button>
															<button class="btn btn-primary cart-btn" type="button">
																@if (session()->get('language') == 'bangla')
																	কার্টে যোগ করুন
																@else
																	Add to cart
																@endif
															</button>
																					
														</li>
												
														<li class="lnk wishlist">
															<a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist">
																<i class="icon fa fa-heart"></i>
															</a>
														</li>

														<li class="lnk">
															<a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare">
																<i class="fa fa-signal" aria-hidden="true"></i>
															</a>
														</li>
													</ul>
												</div><!-- /.action -->
											</div><!-- /.cart -->
										</div><!-- /.product -->
									</div><!-- /.products -->
								</div><!-- /.item -->
								@empty
									<h5 class="text-danger">
										<i class="fa fa-search"></i>
										@if (session()->get('language') == 'bangla')
											কোন পণ্য পাওয়া যায় নি!
										@else
											No Product Found!
										@endif
									</h5>
								@endforelse
              <!-- /.item -->

              {{-- <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="detail.html"
                          ><img src="{{asset('fontend')}}/assets/images/products/p2.jpg" alt=""
                        /></a>
                      </div>
                      <!-- /.image -->

                      <div class="tag sale"><span>sale</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name">
                        <a href="detail.html">Floral Print Buttoned</a>
                      </h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>

                      <div class="product-price">
                        <span class="price"> $650.99 </span>
                        <span class="price-before-discount">$ 800</span>
                      </div>
                      <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button
                              class="btn btn-primary icon"
                              data-toggle="dropdown"
                              type="button"
                            >
                              <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button
                              class="btn btn-primary cart-btn"
                              type="button"
                            >
                              Add to cart
                            </button>
                          </li>

                          <li class="lnk wishlist">
                            <a
                              class="add-to-cart"
                              href="detail.html"
                              title="Wishlist"
                            >
                              <i class="icon fa fa-heart"></i>
                            </a>
                          </li>

                          <li class="lnk">
                            <a
                              class="add-to-cart"
                              href="detail.html"
                              title="Compare"
                            >
                              <i class="fa fa-signal"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->
                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="detail.html"
                          ><img src="{{asset('fontend')}}/assets/images/products/p3.jpg" alt=""
                        /></a>
                      </div>
                      <!-- /.image -->

                      <div class="tag hot"><span>hot</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name">
                        <a href="detail.html">Floral Print Buttoned</a>
                      </h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>

                      <div class="product-price">
                        <span class="price"> $650.99 </span>
                        <span class="price-before-discount">$ 800</span>
                      </div>
                      <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button
                              class="btn btn-primary icon"
                              data-toggle="dropdown"
                              type="button"
                            >
                              <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button
                              class="btn btn-primary cart-btn"
                              type="button"
                            >
                              Add to cart
                            </button>
                          </li>

                          <li class="lnk wishlist">
                            <a
                              class="add-to-cart"
                              href="detail.html"
                              title="Wishlist"
                            >
                              <i class="icon fa fa-heart"></i>
                            </a>
                          </li>

                          <li class="lnk">
                            <a
                              class="add-to-cart"
                              href="detail.html"
                              title="Compare"
                            >
                              <i class="fa fa-signal"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->
                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="detail.html"
                          ><img src="{{asset('fontend')}}/assets/images/products/p4.jpg" alt=""
                        /></a>
                      </div>
                      <!-- /.image -->

                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name">
                        <a href="detail.html">Floral Print Buttoned</a>
                      </h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>

                      <div class="product-price">
                        <span class="price"> $650.99 </span>
                        <span class="price-before-discount">$ 800</span>
                      </div>
                      <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button
                              class="btn btn-primary icon"
                              data-toggle="dropdown"
                              type="button"
                            >
                              <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button
                              class="btn btn-primary cart-btn"
                              type="button"
                            >
                              Add to cart
                            </button>
                          </li>

                          <li class="lnk wishlist">
                            <a
                              class="add-to-cart"
                              href="detail.html"
                              title="Wishlist"
                            >
                              <i class="icon fa fa-heart"></i>
                            </a>
                          </li>

                          <li class="lnk">
                            <a
                              class="add-to-cart"
                              href="detail.html"
                              title="Compare"
                            >
                              <i class="fa fa-signal"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->
                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="detail.html"
                          ><img
                            src="{{asset('fontend')}}/assets/images/blank.gif"
                            data-echo="{{asset('fontend')}}/assets/images/products/p5.jpg"
                            alt=""
                        /></a>
                      </div>
                      <!-- /.image -->

                      <div class="tag hot"><span>hot</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name">
                        <a href="detail.html">Floral Print Buttoned</a>
                      </h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>

                      <div class="product-price">
                        <span class="price"> $650.99 </span>
                        <span class="price-before-discount">$ 800</span>
                      </div>
                      <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button
                              class="btn btn-primary icon"
                              data-toggle="dropdown"
                              type="button"
                            >
                              <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button
                              class="btn btn-primary cart-btn"
                              type="button"
                            >
                              Add to cart
                            </button>
                          </li>

                          <li class="lnk wishlist">
                            <a
                              class="add-to-cart"
                              href="detail.html"
                              title="Wishlist"
                            >
                              <i class="icon fa fa-heart"></i>
                            </a>
                          </li>

                          <li class="lnk">
                            <a
                              class="add-to-cart"
                              href="detail.html"
                              title="Compare"
                            >
                              <i class="fa fa-signal"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->
                </div>
                <!-- /.products -->
              </div>
              <!-- /.item -->

              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image">
                        <a href="detail.html"
                          ><img
                            src="{{asset('fontend')}}/assets/images/blank.gif"
                            data-echo="{{asset('fontend')}}/assets/images/products/p6.jpg"
                            alt=""
                        /></a>
                      </div>
                      <!-- /.image -->

                      <div class="tag new"><span>new</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                      <h3 class="name">
                        <a href="detail.html">Floral Print Buttoned</a>
                      </h3>
                      <div class="rating rateit-small"></div>
                      <div class="description"></div>

                      <div class="product-price">
                        <span class="price"> $650.99 </span>
                        <span class="price-before-discount">$ 800</span>
                      </div>
                      <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button
                              class="btn btn-primary icon"
                              data-toggle="dropdown"
                              type="button"
                            >
                              <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button
                              class="btn btn-primary cart-btn"
                              type="button"
                            >
                              Add to cart
                            </button>
                          </li>

                          <li class="lnk wishlist">
                            <a
                              class="add-to-cart"
                              href="detail.html"
                              title="Wishlist"
                            >
                              <i class="icon fa fa-heart"></i>
                            </a>
                          </li>

                          <li class="lnk">
                            <a
                              class="add-to-cart"
                              href="detail.html"
                              title="Compare"
                            >
                              <i class="fa fa-signal"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                  <!-- /.product -->
                </div>
                <!-- /.products -->
              </div> --}}
              <!-- /.item -->
            </div>
            <!-- /.home-owl-carousel -->
          </section>
          <!-- /.section -->
          <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
        </div>
        <!-- /.col -->
        <div class="clearfix"></div>
      </div>
      <!-- /.row -->
      <!-- ============================================== BRANDS CAROUSEL ============================================== -->
      
      <!-- /.logo-slider -->
      <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    {{-- </div> --}}
    <!-- /.container -->
  {{-- </div> --}}
  <!-- /.body-content -->
  @include('fontend.inc.brand')

@endsection