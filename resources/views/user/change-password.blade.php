@extends('layouts.fontend-master')

@section('content')
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
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    {{-- style="background-image: url({{ asset('fontend') }}/assets/media/profile.jpg);" --}}
                    {{-- <img src="{{ asset('fontend') }}/assets/media/profile.jpg" class="card-img-top" alt="..."> --}}
                    <div class="chat_container" style="background-image: url({{ (!empty(Auth::user()->image))?url('storage/'.Auth::user()->image):url('media/profile.jpg') }});" >

                        
                        <div class="overlay" >
                            {{-- <img src="{{ asset('fontend') }}/assets/media/profile.jpg" class="card-img-top" alt="..."> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush mt-2">
                            <a href="#" class="btn btn-sm btn-primary btn-block">Home</a>
                            <a href="{{ route('change.password') }}" class="btn btn-sm btn-primary btn-block">Change Password</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="btn btn-sm btn-danger btn-block"><i class="icon ion-power"></i> Sign Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                <h3 class="text-center"><span class="text-danger">Hi..! </span><strong class="text-warning">{{ Auth::user()->name }}</strong> Change Your Password</h3>
                <div class="card-body">
                    <form class="register-form outer-top-xs" role="form" action="{{ route('update.password') }}" method="POST" id="Myform">
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="old-password">Old Password <span>*</span></label>
                            <input type="password" name="old" class="form-control unicase-form-control text-input" id="old-password" />
                            <font class="text-danger">{{ ($errors->has('old'))?$errors->first('old'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="password">New Password <span>*</span></label>
                            <input type="password" name="password" class="form-control unicase-form-control text-input" id="password" />
                            <font class="text-danger">{{ ($errors->has('password'))?$errors->first('password'):'' }}</font>
                        </div>
                         <div class="form-group">
                            <label class="info-title" for="password_confirmation">Confirm Password <span>*</span></label>
                            <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="password_confirmation" >
                        </div>
                          <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit</button>
                    </form>
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
          old: {
            required: true,
          },
          password: {
            required: true,
            minlength: 8
          },
          password_confirmation: {
            required: true,
            equalTo: '#password'
          }
          
        },
        messages: {
          old: {
            required: "Please Enter Old Password",
          },
          password: {
            required: "Please Enter password",
            minlength: "Your password must be at least 8 characters long"
          },
          password_confirmation: {
            required: "Please Enter Confirm password",
            equalTo : "Confirm Password Does not Match"
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