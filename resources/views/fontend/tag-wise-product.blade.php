@extends('layouts.fontend-master')
@section('content')
@section('title')
@if (session()->get('language') == 'bangla')
    পণ্য সুমহ
@else
    Shop Page
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
          <li class="active">Handbags</li>
        </ul>
      </div>
      <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.breadcrumb -->
  <div class="body-content outer-top-xs">
    <div class="container">
      <div class="row">
        <div class="col-md-3 sidebar">
          <!-- ================================== TOP NAVIGATION ================================== -->
          {{-- <div class="side-menu animate-dropdown outer-bottom-xs">
            <div class="head">
              <i class="icon fa fa-align-justify fa-fw"></i> Categories
            </div>
            <nav class="yamm megamenu-horizontal" role="navigation">
              <ul class="nav">
                <li class="dropdown menu-item">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    ><i class="icon fa fa-shopping-bag" aria-hidden="true"></i
                    >Clothing</a
                  >
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes </a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Sport Wear</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shorts</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Winter Wear</a></li>
                            <li><a href="#">Night Suits</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Toys &amp; Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">School Bags</a></li>
                            <li><a href="#">Lunch Box</a></li>
                            <li><a href="#">Footwear</a></li>
                            <li><a href="#">Wipes</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Sandals </a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Night Dress</a></li>
                            <li><a href="#">Swim Wear</a></li>
                            <li><a href="#">Toys</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    ><i class="icon fa fa-laptop" aria-hidden="true"></i
                    >Electronics</a
                  >
                  <!-- ================================== MEGAMENU VERTICAL ================================== -->
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-lg-4">
                          <ul>
                            <li><a href="#">Gaming</a></li>
                            <li><a href="#">Laptop Skins</a></li>
                            <li><a href="#">Apple</a></li>
                            <li><a href="#">Dell</a></li>
                            <li><a href="#">Lenovo</a></li>
                            <li><a href="#">Microsoft</a></li>
                            <li><a href="#">Asus</a></li>
                            <li><a href="#">Adapters</a></li>
                            <li><a href="#">Batteries</a></li>
                            <li><a href="#">Cooling Pads</a></li>
                          </ul>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-lg-4">
                          <ul>
                            <li><a href="#">Routers &amp; Modems</a></li>
                            <li><a href="#">CPUs, Processors</a></li>
                            <li><a href="#">PC Gaming Store</a></li>
                            <li><a href="#">Graphics Cards</a></li>
                            <li><a href="#">Components</a></li>
                            <li><a href="#">Webcam</a></li>
                            <li><a href="#">Memory (RAM)</a></li>
                            <li><a href="#">Motherboards</a></li>
                            <li><a href="#">Keyboards</a></li>
                            <li><a href="#">Headphones</a></li>
                          </ul>
                        </div>

                        <div class="dropdown-banner-holder">
                          <a href="#"
                            ><img
                              alt=""
                              src="{{ asset('fontend') }}/assets/images/banners/banner-side.png"
                          /></a>
                        </div>
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                  <!-- ================================== MEGAMENU VERTICAL ================================== -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    ><i class="icon fa fa-paw" aria-hidden="true"></i>Shoes</a
                  >
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes </a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Sport Wear</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shorts</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Winter Wear</a></li>
                            <li><a href="#">Night Suits</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Toys &amp; Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">School Bags</a></li>
                            <li><a href="#">Lunch Box</a></li>
                            <li><a href="#">Footwear</a></li>
                            <li><a href="#">Wipes</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Sandals </a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Night Dress</a></li>
                            <li><a href="#">Swim Wear</a></li>
                            <li><a href="#">Toys</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    ><i class="icon fa fa-clock-o"></i>Watches</a
                  >
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-lg-4">
                          <ul>
                            <li><a href="#">Gaming</a></li>
                            <li><a href="#">Laptop Skins</a></li>
                            <li><a href="#">Apple</a></li>
                            <li><a href="#">Dell</a></li>
                            <li><a href="#">Lenovo</a></li>
                            <li><a href="#">Microsoft</a></li>
                            <li><a href="#">Asus</a></li>
                            <li><a href="#">Adapters</a></li>
                            <li><a href="#">Batteries</a></li>
                            <li><a href="#">Cooling Pads</a></li>
                          </ul>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-lg-4">
                          <ul>
                            <li><a href="#">Routers &amp; Modems</a></li>
                            <li><a href="#">CPUs, Processors</a></li>
                            <li><a href="#">PC Gaming Store</a></li>
                            <li><a href="#">Graphics Cards</a></li>
                            <li><a href="#">Components</a></li>
                            <li><a href="#">Webcam</a></li>
                            <li><a href="#">Memory (RAM)</a></li>
                            <li><a href="#">Motherboards</a></li>
                            <li><a href="#">Keyboards</a></li>
                            <li><a href="#">Headphones</a></li>
                          </ul>
                        </div>

                        <div class="dropdown-banner-holder">
                          <a href="#"
                            ><img
                              alt=""
                              src="{{ asset('fontend') }}/assets/images/banners/banner-side.png"
                          /></a>
                        </div>
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    ><i class="icon fa fa-diamond"></i>Jewellery</a
                  >
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes </a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Sport Wear</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shorts</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Winter Wear</a></li>
                            <li><a href="#">Night Suits</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Toys &amp; Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">School Bags</a></li>
                            <li><a href="#">Lunch Box</a></li>
                            <li><a href="#">Footwear</a></li>
                            <li><a href="#">Wipes</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-12 col-md-3">
                          <ul class="links list-unstyled">
                            <li><a href="#">Sandals </a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Night Dress</a></li>
                            <li><a href="#">Swim Wear</a></li>
                            <li><a href="#">Toys</a></li>
                          </ul>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    ><i class="icon fa fa-heartbeat"></i>Health and Beauty</a
                  >
                  <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-lg-4">
                          <ul>
                            <li><a href="#">Gaming</a></li>
                            <li><a href="#">Laptop Skins</a></li>
                            <li><a href="#">Apple</a></li>
                            <li><a href="#">Dell</a></li>
                            <li><a href="#">Lenovo</a></li>
                            <li><a href="#">Microsoft</a></li>
                            <li><a href="#">Asus</a></li>
                            <li><a href="#">Adapters</a></li>
                            <li><a href="#">Batteries</a></li>
                            <li><a href="#">Cooling Pads</a></li>
                          </ul>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-lg-4">
                          <ul>
                            <li><a href="#">Routers &amp; Modems</a></li>
                            <li><a href="#">CPUs, Processors</a></li>
                            <li><a href="#">PC Gaming Store</a></li>
                            <li><a href="#">Graphics Cards</a></li>
                            <li><a href="#">Components</a></li>
                            <li><a href="#">Webcam</a></li>
                            <li><a href="#">Memory (RAM)</a></li>
                            <li><a href="#">Motherboards</a></li>
                            <li><a href="#">Keyboards</a></li>
                            <li><a href="#">Headphones</a></li>
                          </ul>
                        </div>

                        <div class="dropdown-banner-holder">
                          <a href="#"
                            ><img
                              alt=""
                              src="{{ asset('fontend') }}/assets/images/banners/banner-side.png"
                          /></a>
                        </div>
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- /.yamm-content -->
                  </ul>
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    ><i class="icon fa fa-paper-plane"></i>Kids and Babies</a
                  >
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    ><i class="icon fa fa-futbol-o"></i>Sports</a
                  >
                  <!-- ================================== MEGAMENU VERTICAL ================================== -->
                  <!-- /.dropdown-menu -->
                  <!-- ================================== MEGAMENU VERTICAL ================================== -->
                </li>
                <!-- /.menu-item -->

                <li class="dropdown menu-item">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    ><i class="icon fa fa-envira"></i>Home and Garden</a
                  >
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.menu-item -->
              </ul>
              <!-- /.nav -->
            </nav>
            <!-- /.megamenu-horizontal -->
          </div> --}}
          @include('fontend.inc.category')
          <!-- /.side-menu -->
          <!-- ================================== TOP NAVIGATION : END ================================== -->
          <div class="sidebar-module-container">
            <div class="sidebar-filter">
              <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
              <div class="sidebar-widget wow fadeInUp">
                <h3 class="section-title">shop by</h3>
                <div class="widget-header">
                  <h4 class="widget-title">Category</h4>
                </div>
                <div class="sidebar-widget-body">
                  <div class="accordion">
                    @foreach ($categories as $category)
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a
                          href="#collapse{{ $category->id }}"
                          data-toggle="collapse"
                          class="accordion-toggle collapsed"
                        >
                          @if (session()->get('language') == 'bangla')
                              {{ $category->category_name_bn }}
                          @else
                            {{ $category->category_name_en }}
                          @endif
                        </a>
                      </div>
                      <!-- /.accordion-heading -->
                      <div
                        class="accordion-body collapse"
                        id="collapse{{ $category->id }}"
                        style="height: 0px"
                      >
                        <div class="accordion-inner">
                            @php
                                $subcategory = App\Models\Subcategory::where('category_id',$category->id)->orderBy('id','DESC')->get();
                            @endphp
                          <ul>
                              @if (session()->get('language') == 'bangla')
                                @forelse ($subcategory as $subcategory)
                                    <li><a href="{{ url('product/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug_bn) }}">{{ $subcategory->subcategory_name_bn }}</a></li>
                                @empty
                                    <li><a href="#">দুঃখিত কোন আইটেম নেই!</a></li>
                                @endforelse
                                
                              @else
                                @forelse ($subcategory as $subcategory)
                                    <li><a href="{{ url('product/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en) }}">{{ $subcategory->subcategory_name_en }}</a></li>
                                @empty
                                    <li><a href="#">Sorry. No Item Found!</a></li>
                                @endforelse
                              @endif
                            
                          </ul>
                        </div>
                        <!-- /.accordion-inner -->
                      </div>
                      <!-- /.accordion-body -->
                    </div>
                    @endforeach
                    <!-- /.accordion-group -->

                    <!-- /.accordion-group -->
                  </div>
                  <!-- /.accordion -->
                </div>
                <!-- /.sidebar-widget-body -->
              </div>
              <!-- /.sidebar-widget -->
              <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

              <!-- ============================================== PRICE SILDER============================================== -->
              <div class="sidebar-widget wow fadeInUp">
                <div class="widget-header">
                  <h4 class="widget-title">Price Slider</h4>
                </div>
                <div class="sidebar-widget-body m-t-10">
                  <div class="price-range-holder">
                    <span class="min-max">
                      <span class="pull-left">$200.00</span>
                      <span class="pull-right">$800.00</span>
                    </span>
                    <input
                      type="text"
                      id="amount"
                      style="
                        border: 0;
                        color: #666666;
                        font-weight: bold;
                        text-align: center;
                      "
                    />

                    <input type="text" class="price-slider" value="" />
                  </div>
                  <!-- /.price-range-holder -->
                  <a href="#" class="lnk btn btn-primary">Show Now</a>
                </div>
                <!-- /.sidebar-widget-body -->
              </div>
              <!-- /.sidebar-widget -->
              <!-- ============================================== PRICE SILDER : END ============================================== -->
              <!-- ============================================== MANUFACTURES============================================== -->
              {{-- <div class="sidebar-widget wow fadeInUp">
                <div class="widget-header">
                  <h4 class="widget-title">Manufactures</h4>
                </div>
                <div class="sidebar-widget-body">
                  <ul class="list">
                    <li><a href="#">Forever 18</a></li>
                    <li><a href="#">Nike</a></li>
                    <li><a href="#">Dolce & Gabbana</a></li>
                    <li><a href="#">Alluare</a></li>
                    <li><a href="#">Chanel</a></li>
                    <li><a href="#">Other Brand</a></li>
                  </ul>
                  <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
                </div>
                <!-- /.sidebar-widget-body -->
              </div> --}}
              <!-- /.sidebar-widget -->
              <!-- ============================================== MANUFACTURES: END ============================================== -->
              <!-- ============================================== COLOR============================================== -->
              {{-- <div class="sidebar-widget wow fadeInUp">
                <div class="widget-header">
                  <h4 class="widget-title">Colors</h4>
                </div>
                <div class="sidebar-widget-body">
                  <ul class="list">
                    <li><a href="#">Red</a></li>
                    <li><a href="#">Blue</a></li>
                    <li><a href="#">Yellow</a></li>
                    <li><a href="#">Pink</a></li>
                    <li><a href="#">Brown</a></li>
                    <li><a href="#">Teal</a></li>
                  </ul>
                </div>
                <!-- /.sidebar-widget-body -->
              </div> --}}
              <!-- /.sidebar-widget -->
              <!-- ============================================== COLOR: END ============================================== -->
              <!-- ============================================== COMPARE============================================== -->
              {{-- <div class="sidebar-widget wow fadeInUp outer-top-vs">
                <h3 class="section-title">Compare products</h3>
                <div class="sidebar-widget-body">
                  <div class="compare-report">
                    <p>You have no <span>item(s)</span> to compare</p>
                  </div>
                  <!-- /.compare-report -->
                </div>
                <!-- /.sidebar-widget-body -->
              </div> --}}
              <!-- /.sidebar-widget -->
              <!-- ============= COMPARE: END ================== -->
              <!-- ============== PRODUCT TAGS =================== -->
              @include('fontend.inc.tag')
              <!-- /.sidebar-widget -->
              <!-- =================== PRODUCT TAGS : END ===================== -->
              <!-- ================= Testimonials================ -->
              @include('fontend.inc.testimonial')

              <!-- ============================================== Testimonials: END ============================================== -->

              <div class="home-banner">
                <img src="{{ asset('fontend') }}/assets/images/banners/LHS-banner.jpg" alt="Image" />
              </div>
            </div>
            <!-- /.sidebar-filter -->
          </div>
          <!-- /.sidebar-module-container -->
        </div>
        <!-- /.sidebar -->
        <div class="col-md-9">
          <!-- ========================================== SECTION – HERO ========================================= -->

          <div id="category" class="category-carousel hidden-xs">
            <div class="item">
              <div class="image">
                <img
                  src="{{ asset('fontend') }}/assets/images/banners/cat-banner-1.jpg"
                  alt=""
                  class="img-responsive"
                />
              </div>
              <div class="container-fluid">
                <div class="caption vertical-top text-left">
                  <div class="big-text">Big Sale</div>

                  <div class="excerpt hidden-sm hidden-md">
                    Save up to 49% off
                  </div>
                  <div class="excerpt-normal hidden-sm hidden-md">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                  </div>
                </div>
                <!-- /.caption -->
              </div>
              <!-- /.container-fluid -->
            </div>
          </div>

          <!-- ========================================= SECTION – HERO : END ========================================= -->
          <div class="clearfix filters-container m-t-10">
            <div class="row">
              <div class="col col-sm-6 col-md-2">
                <div class="filter-tabs">
                  <ul
                    id="filter-tabs"
                    class="nav nav-tabs nav-tab-box nav-tab-fa-icon"
                  >
                    <li class="active">
                      <a data-toggle="tab" href="#grid-container"
                        ><i class="icon fa fa-th-large"></i>Grid</a
                      >
                    </li>
                    <li>
                      <a data-toggle="tab" href="#list-container"
                        ><i class="icon fa fa-th-list"></i>List</a
                      >
                    </li>
                  </ul>
                </div>
                <!-- /.filter-tabs -->
              </div>
              <!-- /.col -->
              {{-- <div class="col col-sm-12 col-md-6">
                <div class="col col-sm-3 col-md-6 no-padding">
                  <div class="lbl-cnt">
                    <span class="lbl">Sort by</span>
                    <div class="fld inline">
                      <div
                        class="dropdown dropdown-small dropdown-med dropdown-white inline"
                      >
                        <button
                          data-toggle="dropdown"
                          type="button"
                          class="btn dropdown-toggle"
                        >
                          Position <span class="caret"></span>
                        </button>

                        <ul role="menu" class="dropdown-menu">
                          <li role="presentation">
                            <a href="#">position</a>
                          </li>
                          <li role="presentation">
                            <a href="#">Price:Lowest first</a>
                          </li>
                          <li role="presentation">
                            <a href="#">Price:HIghest first</a>
                          </li>
                          <li role="presentation">
                            <a href="#">Product Name:A to Z</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- /.fld -->
                  </div>
                  <!-- /.lbl-cnt -->
                </div>
                <!-- /.col -->
                <div class="col col-sm-3 col-md-6 no-padding">
                  <div class="lbl-cnt">
                    <span class="lbl">Show</span>
                    <div class="fld inline">
                      <div
                        class="dropdown dropdown-small dropdown-med dropdown-white inline"
                      >
                        <button
                          data-toggle="dropdown"
                          type="button"
                          class="btn dropdown-toggle"
                        >
                          1 <span class="caret"></span>
                        </button>

                        <ul role="menu" class="dropdown-menu">
                          <li role="presentation"><a href="#">1</a></li>
                          <li role="presentation"><a href="#">2</a></li>
                          <li role="presentation"><a href="#">3</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- /.fld -->
                  </div>
                  <!-- /.lbl-cnt -->
                </div>
                <!-- /.col -->
              </div> --}}
              <!-- /.col -->
              <div class="col col-sm-6 col-md-4 text-right">
                <div class="pagination-container">
                  {{-- <ul class="list-inline list-unstyled">
                    <li class="prev">
                      <a href="#"><i class="fa fa-angle-left"></i></a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="next">
                      <a href="#"><i class="fa fa-angle-right"></i></a>
                    </li>
                  </ul> --}}
                  {{  $products->links() }}
                  <!-- /.list-inline -->
                </div>
                <!-- /.pagination-container -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <div class="search-result-container">
            <div id="myTabContent" class="tab-content category-list">
              <div class="tab-pane active" id="grid-container">
                <div class="category-product">
                  <div class="row">
                    @forelse ($products as $product)
                    <div class="col-sm-6 col-md-4 wow fadeInUp">
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
                                                <button class="btn btn-primary icon" type="button" title="Add Cart"
                                                id="{{ $product->id }}"	
															                  data-toggle="modal" data-target="#cartModal"  
															                  onclick="productView(this.id)"
                                                >
                                                    <i class="fa fa-shopping-cart"></i>													
                                                </button>
                                                <button class="btn btn-primary cart-btn" type="button"
                                                id="{{ $product->id }}"	
															                  data-toggle="modal" data-target="#cartModal"  
															                  onclick="productView(this.id)"
                                                >
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
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->
                    @empty
                      @if (session()->get('language') == 'bangla')
                        <h4 class="text-center text-danger text-uppercase">দুঃখিত! কোন পণ্য পাওয়া যায় নি!</h4>
                      @else
                        <h4 class="text-center text-danger text-uppercase">Sorry! no product found</h4>
                      @endif
                    @endforelse 

                    <!-- /.item -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.category-product -->
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="list-container">
                <div class="category-product">
                  @forelse ($products as $product) 
                  <div class="category-product-inner">
                    <div class="products">
                      <div class="product-list product">
                        <div class="row product-list-row">
                          <div class="col col-sm-4 col-lg-4">
                            <div class="product-image">
                              <div class="image">
                                <img
                                  src="{{ asset($product->product_thumbnail) }}"
                                  alt=""
                                />
                              </div>
                            </div>
                            <!-- /.product-image -->
                          </div>
                          <!-- /.col -->
                          <div class="col col-sm-8 col-lg-8">
                            <div class="product-info">
                              <h3 class="name text-capitalize">
                                @if (session()->get('language') == 'bangla')
                                    <a href="{{ url('single/product/'.$product->id.'/'.$product->product_slug_bn) }}">{{ $product->product_name_bn }}</a>
                                @else
                                    <a href="{{ url('single/product/'.$product->id.'/'.$product->product_slug_en) }}">{{ $product->product_name_en }}</a>
                                @endif
                              </h3>
                              <div class="rating rateit-small"></div>
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
                              </div>
                              <!-- /.product-price -->
                              <div class="description m-t-10">
                                @if (session()->get('language') == 'bangla')
                                    {!! $product->short_descp_bn !!}
                                @else
                                    {!! $product->short_descp_en !!}
                                @endif
                              </div>
                              <div class="cart clearfix animate-effect">
                                <div class="action">
                                  <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                      <button
                                        class="btn btn-primary icon"
                                        data-toggle="dropdown"
                                        type="button"
                                        id="{{ $product->id }}"	
															          data-toggle="modal" data-target="#cartModal"  
															          onclick="productView(this.id)"
                                      >
                                        <i class="fa fa-shopping-cart"></i>
                                      </button>
                                      <button class="btn btn-primary cart-btn" type="button"
                                      id="{{ $product->id }}"	
															        data-toggle="modal" data-target="#cartModal"  
															        onclick="productView(this.id)"
                                      >
                                        @if (session()->get('language') == 'bangla')
                                            কার্টে যোগ করুন
                                        @else
                                            Add to cart
                                        @endif
                                      </button>
                                    </li>

                                    <li class="lnk wishlist">
                                      <a 
                                        data-toggle="tooltip"
                                        class="add-to-cart"
                                        href="detail.html"
                                        title="Wishlist"
                                      >
                                        <i class="icon fa fa-heart"></i>
                                      </a>
                                    </li>

                                    <li class="lnk">
                                      <a
                                        data-toggle="tooltip"
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
                            <!-- /.product-info -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.product-list-row -->
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
                      </div>
                      <!-- /.product-list -->
                    </div>
                    <!-- /.products -->
                  </div>
                  <!-- /.category-product-inner -->
                  @empty
                    @if (session()->get('language') == 'bangla')
                    <h4 class="text-center text-danger text-uppercase">দুঃখিত! কোন পণ্য পাওয়া যায় নি!</h4>
                    @else
                      <h4 class="text-center text-danger text-uppercase">Sorry! no product found</h4>
                    @endif
                  @endforelse 
                  
                  <!-- /.category-product-inner -->
                </div>
                <!-- /.category-product -->
              </div>
              <!-- /.tab-pane #list-container -->
            </div>
            <!-- /.tab-content -->
            <div class="clearfix filters-container">
              <div class="text-right">
                <div class="pagination-container">
                  {{-- <ul class="list-inline list-unstyled"> --}}
                    {{ $products->links() }}
                  {{-- </ul> --}}
                  <!-- /.list-inline -->
                </div>
                <!-- /.pagination-container -->
              </div>
              <!-- /.text-right -->
            </div>
            <!-- /.filters-container -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- ============================================== BRANDS CAROUSEL ============================================== -->
      
    </div>
    <!-- /.container -->
  </div>
@include('fontend.inc.brand')

@endsection