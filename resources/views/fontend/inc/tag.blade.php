<!-- =========== PRODUCT TAGS ============ -->
@php
	$tags_en = App\Models\Product::groupBy('product_tag_en')->select('product_tag_en')->get();
	$tags_bn = App\Models\Product::groupBy('product_tag_bn')->select('product_tag_bn')->get();
@endphp
<div class="sidebar-widget product-tag wow fadeInUp">
	<h3 class="section-title">
		@if (session()->get('language') == 'bangla')
			পণ্যর ট্যাগসমূহ
		@else
			Product tags
		@endif
	</h3>

	<div class="sidebar-widget-body outer-top-xs">
		<div class="tag-list">	
			@if (session()->get('language') == 'bangla')
				@foreach ($tags_bn as $tag)
					<a class="item active" title="Vest" href="{{ url('product/tag/'.$tag->product_tag_bn) }}">{{ str_replace(',',' ',$tag->product_tag_bn)  }}</a>
				@endforeach	
			@else
				@foreach ($tags_en as $tag)
					<a class="item active" title="Vest" href="{{ url('product/tag/'.$tag->product_tag_en) }}">{{ str_replace(',',' ',$tag->product_tag_en)  }}</a>
				@endforeach
			@endif		
				
		</div><!-- /.tag-list -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->