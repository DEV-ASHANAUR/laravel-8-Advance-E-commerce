<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">
      <div class="sl-sideleft-menu">
        <a href="{{ url('/') }}" class="sl-menu-link" target="_blank">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Visit Site</span>
            </div><!-- menu-item -->
        </a>

        <a href="{{ route('admin.dashboard') }}" class="sl-menu-link @yield('dashboard')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a>
        <!-- slider start -->
        <a href="{{ route('sliders') }}" class="sl-menu-link @yield('slider')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Slider</span>
          </div><!-- menu-item -->
        </a>
        <!-- slider end -->
        <!-- brand start -->
        <a href="{{ route('brands') }}" class="sl-menu-link @yield('brands')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Brands</span>
          </div><!-- menu-item -->
        </a>
        <!-- brand end -->
        {{-- category start --}}
        <a href="#" class="sl-menu-link @yield('Categories')">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-list-outline tx-20"></i>
            <span class="menu-item-label">Categories</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link  active show-sub -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('category') }}" class="nav-link @yield('add-category')">Add Category</a></li>

          <li class="nav-item"><a href="{{ route('subcategory') }}" class="nav-link @yield('sub-category')">Sub Category</a></li>

          <li class="nav-item"><a href="{{ route('sub-subcategory') }}" class="nav-link @yield('sub-sub-category')">Sub sub-Category</a></li>
        </ul>
        {{-- category end --}}
        {{-- product start --}}
        <a href="#" class="sl-menu-link @yield('product')">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-cart-outline tx-20"></i>
            <span class="menu-item-label">Product</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link  active show-sub -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('product.create') }}" class="nav-link @yield('product-create')">Add Product</a></li>

          <li class="nav-item"><a href="{{ route('product.manage') }}" class="nav-link @yield('manage-product')">Manage Product</a></li>
        </ul>
        {{-- product end --}}
      </div><!-- sl-sideleft-menu -->
      <br>
    </div>
    <!-- sl-sideleft -->