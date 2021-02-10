@extends('layouts.fontend-master')
@section('content')
@section('title')
@if (session()->get('language') == 'bangla')
    রিসেট পাসওয়াড
@else
    Reset Password
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
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class='active'>Reset Password</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	@if (session('status'))
		<div class="alert alert-success" role="alert">
			{{ session('status') }}
		</div>
	@endif
	<h4 class="">Reset Password</h4>
	
    <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('password.email') }}">
        @csrf
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="email" placeholder="Enter Email Address">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>
          <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Send Password Reset Link</button>
            <a href="{{ route('login') }}" class="forgot-password">Return To Login</a>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
        @include('fontend.inc.brand')

@endsection
