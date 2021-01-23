@extends('layouts.admin-master')

@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Starlight</a>
      <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-4">
            @include('admin.profile.inc.profile-sidebar')
        </div>
        <div class="col-md-8">
          <div class="card">
            {{-- <h3 class="text-center"><span class="text-danger">Hi..! </span><strong class="text-warning">{{ Auth::user()->name }}</strong> Update Your Profile</h3> --}}
            <div class="card-body">
                <form class="register-form outer-top-xs" role="form" action="{{ route('password.update') }}" method="POST" data-parsley-validate id="selectForm">
                    @csrf
                    <div class="form-group">
                        <label class="info-title" for="old-password">Old Password <span>*</span></label>
                        <input type="password" name="old" class="form-control unicase-form-control text-input" id="old-password" required placeholder="Enter current password" />
                        <font class="text-danger">{{ ($errors->has('old'))?$errors->first('old'):'' }}</font>
                    </div>
                    <div class="form-group">
                        <label class="info-title" for="password">New Password <span>*</span></label>
                        <input type="password" data-parsley-minlength="2" name="password" class="form-control unicase-form-control text-input" id="password" required placeholder="Enter New Password" />
                        <font class="text-danger">{{ ($errors->has('password'))?$errors->first('password'):'' }}</font>
                    </div>
                     <div class="form-group">
                        <label class="info-title" for="password_confirmation">Confirm Password <span>*</span></label>
                        <input type="password" data-parsley-equalto="#password" data-parsley-equalto-message="Confirm Password Does not Match" name="password_confirmation" class="form-control unicase-form-control text-input" data-equalto="#password" id="password_confirmation" required placeholder="Enter confirmed password" />
                    </div>
                      <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit</button>
                </form>
               </div>
            </div>
          </div>
        </div>  
      </div><!-- row -->
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
@endsection
@section('admin-script')
<script>
    $(function(){
      'use strict';
      $('.select2').select2({
        minimumResultsForSearch: Infinity
      });

      $('#selectForm').parsley();
    })
  </script>
@endsection