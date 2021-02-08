@extends('layouts.fontend-master')
@section('content')
@section('title')
@if (session()->get('language') == 'bangla')
	ইউজার পেইজ
@else
	User Profile
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
				<li class='active'>My Account</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content">
	<div class="container">
    <div class="sign-in-page">
        <div class="row">
            <div class="col-md-4">
                @include('user.inc.user-sidebar')
            </div>
            <div class="col-md-8">
              <div class="card">
                <h3 class="text-center"><span class="text-danger">Hi..! </span><strong class="text-warning">{{ Auth::user()->name }}</strong> Update Your Profile</h3>
                <div class="card-body">
                    <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('update.profile') }}" id="Myform" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label class="info-title" for="exampleInputEmail1">Image <span></span></label>
                                <input type="file" id="file" name="image" class="form-control form-control-file unicase-form-control text-input" id="exampleInputEmail1" />
                                <font class="text-danger">{{ ($errors->has('image'))?$errors->first('image'):'' }}</font>
                            </div>
                            <div class="col-md-4" id="test">
                    
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="info-title" for="name"> Full Name <span>*</span></label>
                                <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control unicase-form-control text-input" id="name" placeholder="Enter Fullname" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                                <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control unicase-form-control text-input" id="exampleInputEmail2" placeholder="Enter Email" />
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="info-title" for="exampleInputEmail1">Phone Number <span></span></label>
                                <input type="number" name="phone" value="{{ Auth::user()->phone }}" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Enter Phone" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
@include('fontend.inc.brand')
@endsection
@section('script')
<script>
    $(document).ready(function () {
      $('#Myform').validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          }
          
        },
        messages: {
          name: {
            required: "Please Enter FullName",
          },
          email: {
            required: "Please enter a email address",
            email: "Please enter a vaild email address"
          }
          
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
</script>
@endsection