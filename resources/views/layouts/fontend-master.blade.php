<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">
        <title>Flipmart premium HTML5 & CSS3 Template</title>
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/style.css">
	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap.min.css">
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/main.css">
	    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/blue.css">
	    <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/owl.carousel.css">
		<link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/owl.transitions.css">
		<link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/animate.min.css">
		<link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/rateit.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/aditional/toastr.css">
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/font-awesome.css">
        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	</head>
    <body class="cnt-home">
		<!-- ========================= HEADER ======================= -->
<header class="header-style-1">
	<!-- ============== TOP MENU ====================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
                        <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                        <li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                        <li><a href="#"><i class="icon fa fa-check"></i>Checkout</a></li>
                        <li>
                            @auth
                                @if (session()->get('language') == 'bangla')
                                    <a href="{{ route('user.dashboard') }}"><i class="icon fa fa-user"></i>আমার প্রোফাইল</a> 
                                @else
                                <a href="{{ route('user.dashboard') }}"><i class="icon fa fa-user"></i>My Account</a> 
                                @endif
                                
                                @else
                                <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>Login/Register</a>
                            @endauth
                            
                        </li>
                    </ul>
                </div><!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
                            @if (session()->get('language') == 'bangla')
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">ভাষা পরিবর্তন করুন</span><b class="caret"></b></a>
                            @else
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">Language </span><b class="caret"></b></a>
                            @endif
                            
                            
                            <ul class="dropdown-menu">
                                @if (session()->get('language') == 'bangla')
                                    <li><a href="{{ route('english.language') }}">English</a></li>
                                @else
                                    <li><a href="{{ route('bangla.language') }}">বাংলা</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{asset('fontend')}}/assets/images/logo.png" alt="">
                        </a>
                    </div>
                </div><!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <div class="search-area">
                        <form>
                            <div class="control-group">

                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown">

                                        <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>

                                        <ul class="dropdown-menu" role="menu" >
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>

                                        </ul>
                                    </li>
                                </ul>
                                
                                <input class="search-field" placeholder="Search here..." />
                                <a class="search-button" href="#" ></a> 

                            </div>
                        </form>
                    </div><!-- /.search-area -->				
                </div><!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                        <!-- ======== SHOPPING CART DROPDOWN ============ -->
                    <div class="dropdown dropdown-cart">
                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count">
                                    <span class="count">2</span>
                                </div>
                                <div class="total-price-basket">
                                    <span class="lbl">cart -</span>
                                    <span class="total-price">
                                        <span class="sign">$</span>
                                        <span class="value">600.00</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image">
                                                <a href="detail.html">
                                                    <img src="{{asset('fontend')}}/assets/images/cart.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <h3 class="name">
                                                <a href="index8a95.html?page-detail">Simple Product</a>
                                            </h3>
                                            <div class="price">$600.00</div>
                                        </div>
                                        <div class="col-xs-1 action">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div><!-- /.cart-item -->
                                <div class="clearfix"></div>
                                <hr>
                                <div class="clearfix cart-total">
                                    <div class="pull-right">
                                        <span class="text">Sub Total :</span>
                                        <span class='price'>$600.00</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>	
                                </div><!-- /.cart-total-->
                            </li>
                        </ul><!-- /.dropdown-menu-->
                    </div><!-- /.dropdown-cart -->			
                </div><!-- /.top-cart-row -->
            </div><!-- /.row -->
        </div><!-- /.container -->
	</div><!-- /.main-header -->
	<!-- =========== NAVBAR =================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                {{-- home bangla english start --}}
                                @if (session()->get('language') == 'bangla')
                                <li class="active dropdown yamm-fw">
                                    <a href="{{ url('/') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">হোম</a>
                                </li>
                                @else
                                <li class="active dropdown yamm-fw">
                                    <a href="{{ url('/') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                </li>    
                                @endif
                                {{-- home bangla english end --}}
                                @php
                                    $categories = App\Models\Category::orderBy('category_name_en','ASC')->limit(8)->get();
                                @endphp
                                @foreach ($categories as $category)
                                <li class="dropdown yamm mega-menu">
                                    {{-- category bangla english start --}}
                                    @if (session()->get('language') == 'bangla')
                                    <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{ $category->category_name_bn }}</a>    
                                    @else
                                    <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{ $category->category_name_en }}</a>    
                                    @endif
                                    {{-- category bangla english end --}}
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content ">
                                                <div class="row">
                                                    @php
                                                        $subcategories = App\Models\Subcategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                                    @endphp
                                                    @foreach ($subcategories as $subcategory)
                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                        {{-- subcategory bangla english start --}}
                                                        @if (session()->get('language') == 'bangla')
                                                        <h2 class="title text-capitalize">{{ $subcategory->subcategory_name_bn }}</h2>     
                                                        @else
                                                        <h2 class="title text-capitalize">{{ $subcategory->subcategory_name_en }}</h2>     
                                                        @endif
                                                        {{-- subcategory bangla english start --}}
                                                        @php
                                                            $subsubcategories = App\Models\Subsubcategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();
                                                        @endphp
                                                        <ul class="links">
                                                            @foreach ($subsubcategories as $subsubcategory)
                                                            {{-- subsubcategory bangla english start --}}
                                                            @if (session()->get('language') == 'bangla')
                                                            <li>
                                                                <a href="#">{{ $subsubcategory->subsubcategory_name_bn }}</a>
                                                            </li>  
                                                            @else
                                                            <li>
                                                                <a href="#">{{ $subsubcategory->subsubcategory_name_en }}</a>
                                                            </li> 
                                                            @endif
                                                            {{-- subsubcategory bangla english end --}}
                                                            @endforeach
                                                        </ul>
                                                    </div><!-- /.col -->
                                                    @endforeach
                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                        <img class="img-responsive" src="{{ asset('fontend') }}/assets/images/banners/top-menu-banner.jpg" alt="">
                                                    </div><!-- /.yamm-content -->	
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                @endforeach
                                @if (session()->get('language') == 'bangla')
                                <li class="dropdown  navbar-right special-menu">
                                    <a href="#">আজকের অফার</a>
                                </li>  
                                @else
                                <li class="dropdown  navbar-right special-menu">
                                    <a href="#">Todays offer</a>
                                </li>
                                @endif
                                
                            </ul><!-- /.navbar-nav -->
                            <div class="clearfix"></div>				
                        </div><!-- /.nav-outer -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.nav-bg-class -->
            </div><!-- /.navbar-default -->
        </div><!-- /.container-class -->
    </div><!-- /.header-nav -->
<!-- ======= NAVBAR : END ============== -->
</header>

<!-- ============= HEADER : END ============== -->

@yield('content')
<!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->
<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
        <ul class="toggle-footer" style="">
            <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>+(888) 123-4567<br>+(888) 456-7890</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <span><a href="#">flipmart@themesground.com</a></span>
                </div>
            </li>
              
            </ul>
    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Customer Service</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="Contact us">My Account</a></li>
                <li><a href="#" title="About us">Order History</a></li>
                <li><a href="#" title="faq">FAQ</a></li>
                <li><a href="#" title="Popular Searches">Specials</a></li>
                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Corporation</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                          <li class="first"><a title="Your Account" href="#">About us</a></li>
                <li><a title="Information" href="#">Customer Service</a></li>
                <li><a title="Addresses" href="#">Company</a></li>
                <li><a title="Addresses" href="#">Investor Relations</a></li>
                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Why Choose Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Company">Company</a></li>
                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <ul class="link">
                  <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                  <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                  <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                  <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                  <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
                  <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
                  <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li><img src="{{asset('fontend')}}/assets/images/payments/1.png" alt=""></li>
                        <li><img src="{{asset('fontend')}}/assets/images/payments/2.png" alt=""></li>
                        <li><img src="{{asset('fontend')}}/assets/images/payments/3.png" alt=""></li>
                        <li><img src="{{asset('fontend')}}/assets/images/payments/4.png" alt=""></li>
                        <li><img src="{{asset('fontend')}}/assets/images/payments/5.png" alt=""></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->
	<!-- For demo purposes – can be removed on production -->
	<!-- For demo purposes – can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ asset('fontend') }}/assets/js/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('backend') }}/lib/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/lib/parsleyjs/parsley.js"></script>
	<script src="{{ asset('fontend') }}/assets/js/bootstrap.min.js"></script>
	<script src="{{ asset('fontend') }}/assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="{{ asset('fontend') }}/assets/js/owl.carousel.min.js"></script>
	<script src="{{ asset('fontend') }}/assets/js/echo.min.js"></script>
	<script src="{{ asset('fontend') }}/assets/js/jquery.easing-1.3.min.js"></script>
	<script src="{{ asset('fontend') }}/assets/js/bootstrap-slider.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="{{ asset('fontend') }}/assets/js/lightbox.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/scripts.js"></script>
    {{-- ============================aditional script===================== --}}
    <script src="{{ asset('fontend') }}/assets/js/aditional/toastr.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/aditional/jquery.validate.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/aditional/additional-methods.min.js"></script>
    <script src="{{ asset('fontend') }}/assets/js/aditional/preview.js"></script>
    @yield('script')
    <script>
        @if(Session::has('message'))
            var type="{{Session::get('alert-type','info')}}"
            switch(type){
            case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
            case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
            case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
            case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif  
    </script>
</body>

</html>