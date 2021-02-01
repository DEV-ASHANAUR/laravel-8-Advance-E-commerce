<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>
        @if (session()->get('language') == 'bangla')
        ক্যাটেগরী
        @else
            Categories
        @endif
         
        </div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            @php
                $category = App\Models\Category::orderBy('category_name_en','ASC')->get();
            @endphp
            @foreach ($category as $category)
            <li class="dropdown menu-item">
                {{-- category bangla english starts --}}
                @if (session()->get('language') == 'bangla')
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon {{ $category->category_icon }}" aria-hidden="true"></i>{{ $category->category_name_bn }}</a>
                @else
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon {{ $category->category_icon }}" aria-hidden="true"></i>{{ $category->category_name_en }}</a>
                @endif
                {{-- category bangla english end --}}
                
                 <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        <div class="row">
                            @php
                                $subcategories = App\Models\Subcategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                            @endphp
                            @foreach ($subcategories as $subcategory)
                            <div class="col-sm-12 col-md-3">
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
                                        <a href="{{ url('product/subsubcategory/'.$subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_bn) }}">{{ $subsubcategory->subsubcategory_name_bn }}</a>
                                    </li>  
                                    @else
                                    <li>
                                        <a href="{{ url('product/subsubcategory/'.$subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_en) }}">{{ $subsubcategory->subsubcategory_name_en }}</a>
                                    </li> 
                                    @endif
                                    {{-- subsubcategory bangla english end --}}
                                    @endforeach
                                </ul>
                            </div><!-- /.col -->
                            @endforeach
                        </div><!-- /.row -->
                    </li><!-- /.yamm-content -->                    
                </ul><!-- /.dropdown-menu -->
            </li><!-- /.menu-item -->
            @endforeach
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div>