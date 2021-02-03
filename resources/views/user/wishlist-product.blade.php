@extends('layouts.fontend-master')
@section('content')
@section('title')
@if (session()->get('language') == 'bangla')
	উইস লিস্ট
@else
	Wishlist
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
          <li><a href="home.html">Home</a></li>
          <li class="active">Wishlist</li>
        </ul>
      </div>
      <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.breadcrumb -->

  <div class="body-content">
    <div class="container">
      <div class="my-wishlist-page">
        <div class="row">
          <div class="col-md-12 my-wishlist">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th colspan="4" class="heading-title">My Wishlist</th>
                  </tr>
                </thead>
                <tbody id="wishlist">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      @include('fontend.inc.brand')
      <!-- /.sigin-in-->
      <!-- ============= BRANDS CAROUSEL ================= -->
      <!-- /.logo-slider -->
      <!-- =============== BRANDS CAROUSEL : END =================== -->

@endsection