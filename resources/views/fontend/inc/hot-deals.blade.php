<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">
        @if (session()->get('language') == 'bangla')
            গরম অফার 
        @else
            hot deals
        @endif
    </h3>
    @php
        $hot_deals = App\Models\Product::where('hot_deals',1)->where('status',1)->where('discount_price','!=',NULL)->latest()->get();
    @endphp
    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
        @forelse ($hot_deals as $product)
        <div class="item">
            <div class="products">
            <div class="hot-deal-wrapper">
                <div class="image">
                <img
                    src="{{asset($product->product_thumbnail)}}"
                    alt=""
                />
                </div>
                @php
                    $amount = $product->selling_price - $product->discount_price;
                    $discount = ($amount/$product->selling_price) * 100;
                @endphp
                @if ($product->discount_price == null)
                <div class="sale-offer-tag" style="background: #46aad7">
                    @if (session()->get('language') == 'bangla')
                        <span>নতুন</span>
                    @else
                        <span>new</span>
                    @endif
                </div>
                @else
                <div class=sale-offer-tag>
                    @if (session()->get('language') == 'bangla')
                        <span>{{ bn_price(round($discount)) }}%<br />বন্ধ</span>
                    @else
                        <span>{{ round($discount) }}%<br />off</span>
                    @endif
                </div>
                @endif

                {{-- <div class="sale-offer-tag">
                    <span>49%<br />off</span>
                </div> --}}
                <div class="timing-wrapper">
                <div class="box-wrapper">
                    <div class="date box">
                    <span class="key">120</span>
                    <span class="value">DAYS</span>
                    </div>
                </div>

                <div class="box-wrapper">
                    <div class="hour box">
                    <span class="key">20</span>
                    <span class="value">HRS</span>
                    </div>
                </div>

                <div class="box-wrapper">
                    <div class="minutes box">
                    <span class="key">36</span>
                    <span class="value">MINS</span>
                    </div>
                </div>

                <div class="box-wrapper hidden-md">
                    <div class="seconds box">
                    <span class="key">60</span>
                    <span class="value">SEC</span>
                    </div>
                </div>
                </div>
            </div>
            <!-- /.hot-deal-wrapper -->

            <div class="product-info text-left m-t-20">
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
            </div>
            <!-- /.product-info -->

            <div class="cart clearfix animate-effect">
                <div class="action">
                <div class="add-cart-button btn-group">
                    <button
                    class="btn btn-primary icon"
                    data-toggle="dropdown"
                    type="button"
                    >
                    <i class="fa fa-shopping-cart"></i>
                    </button>
                    <button class="btn btn-primary cart-btn" type="button">
                    @if (session()->get('language') == 'bangla')
                        কার্টে যোগ করুন
                    @else
                        Add to cart
                    @endif
                    </button>
                </div>
                </div>
                <!-- /.action -->
            </div>
            <!-- /.cart -->
            </div>
        </div>
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
        </div>
    <!-- /.sidebar-widget -->
  </div>