@extends('layouts.fontend-master')
@section('content')
@section('title')
@if (session()->get('language') == 'bangla')
	কার্ট পেইজ
@else
	Cart Page
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
		  <li class="active">Shopping Cart</li>
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
		<div class="shopping-cart">
		  <div class="shopping-cart-table">
			<div class="table-responsive">
			  <table class="table">
				<thead>
				  <tr>
					<th class="cart-romove item">Remove</th>
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Subtotal</th>
					<th class="cart-total last-item">Grandtotal</th>
				  </tr>
				</thead>
				<!-- /thead -->
				<tfoot>
				  <tr>
					<td colspan="7">
					  <div class="shopping-cart-btn">
						<span class="">
						  <a
							href="#"
							class="btn btn-upper btn-primary outer-left-xs"
							>Continue Shopping</a
						  >
						  <a
							href="#"
							class="btn btn-upper btn-primary pull-right outer-right-xs"
							>Update shopping cart</a
						  >
						</span>
					  </div>
					  <!-- /.shopping-cart-btn -->
					</td>
				  </tr>
				</tfoot>
				<tbody id="cart">
				  
				</tbody>
				<!-- /tbody -->
			  </table>
			  <!-- /table -->
			</div>
		  </div>
		  <!-- /.shopping-cart-table -->
		  <div class="col-md-4 col-sm-12 estimate-ship-tax">
			<table class="table">
			  <thead>
				<tr>
				  <th>
					<span class="estimate-title"
					  >Estimate shipping and tax</span
					>
					<p>Enter your destination to get shipping and tax.</p>
				  </th>
				</tr>
			  </thead>
			  <!-- /thead -->
			  <tbody>
				<tr>
				  <td>
					<div class="form-group">
					  <label class="info-title control-label"
						>Country <span>*</span></label
					  >
					  <select
						class="form-control unicase-form-control selectpicker"
					  >
						<option>--Select options--</option>
						<option>India</option>
						<option>SriLanka</option>
						<option>united kingdom</option>
						<option>saudi arabia</option>
						<option>united arab emirates</option>
					  </select>
					</div>
					<div class="form-group">
					  <label class="info-title control-label"
						>State/Province <span>*</span></label
					  >
					  <select
						class="form-control unicase-form-control selectpicker"
					  >
						<option>--Select options--</option>
						<option>TamilNadu</option>
						<option>Kerala</option>
						<option>Andhra Pradesh</option>
						<option>Karnataka</option>
						<option>Madhya Pradesh</option>
					  </select>
					</div>
					<div class="form-group">
					  <label class="info-title control-label"
						>Zip/Postal Code</label
					  >
					  <input
						type="text"
						class="form-control unicase-form-control text-input"
						placeholder=""
					  />
					</div>
					<div class="pull-right">
					  <button type="submit" class="btn-upper btn btn-primary">
						GET A QOUTE
					  </button>
					</div>
				  </td>
				</tr>
			  </tbody>
			</table>
		  </div>
		  <!-- /.estimate-ship-tax -->

		  <div class="col-md-4 col-sm-12 estimate-ship-tax">
			<table class="table">
			  <thead>
				<tr>
				  <th>
					<span class="estimate-title">Discount Code</span>
					<p>Enter your coupon code if you have one..</p>
				  </th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>
					<div class="form-group">
					  <input
						type="text"
						class="form-control unicase-form-control text-input"
						placeholder="You Coupon.."
					  />
					</div>
					<div class="clearfix pull-right">
					  <button type="submit" class="btn-upper btn btn-primary">
						APPLY COUPON
					  </button>
					</div>
				  </td>
				</tr>
			  </tbody>
			  <!-- /tbody -->
			</table>
			<!-- /table -->
		  </div>
		  <!-- /.estimate-ship-tax -->

		  <div class="col-md-4 col-sm-12 cart-shopping-total">
			<table class="table">
			  <thead>
				<tr>
				  <th>
					<div class="cart-sub-total">
					  Subtotal<span class="inner-left-md">$600.00</span>
					</div>
					<div class="cart-grand-total">
					  Grand Total<span class="inner-left-md">$600.00</span>
					</div>
				  </th>
				</tr>
			  </thead>
			  <!-- /thead -->
			  <tbody>
				<tr>
				  <td>
					<div class="cart-checkout-btn pull-right">
					  <button
						type="submit"
						class="btn btn-primary checkout-btn"
					  >
						PROCCED TO CHEKOUT
					  </button>
					  <span class="">Checkout with multiples address!</span>
					</div>
				  </td>
				</tr>
			  </tbody>
			  <!-- /tbody -->
			</table>
			<!-- /table -->
		  </div>
		  <!-- /.cart-shopping-total -->
		</div>
		<!-- /.shopping-cart -->
	  </div>
	  <!-- /.row -->
	  <!-- ============================================== BRANDS CAROUSEL ============================================== -->
	  
	  @include('fontend.inc.brand')


@endsection