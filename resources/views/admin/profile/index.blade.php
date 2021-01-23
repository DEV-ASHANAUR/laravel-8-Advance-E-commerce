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
                <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('profile.update') }}" id="Myform" enctype="multipart/form-data" data-parsley-validate id="selectForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label class="info-title" for="exampleInputEmail1">Image <span></span></label>
                            <input type="file" id="file" name="image" class="form-control form-control-file unicase-form-control text-input" id="exampleInputEmail1" >
                            <font class="text-danger">{{ ($errors->has('image'))?$errors->first('image'):'' }}</font>
                        </div>
                        <div class="col-md-4" id="test">
                
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="info-title" for="name"> Full Name <span>*</span></label>
                            <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control unicase-form-control text-input" id="name" placeholder="Enter Fullname" required />
                            <font class="text-danger">{{ ($errors->has('name'))?$errors->first('name'):'' }}</font>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                            <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control unicase-form-control text-input" id="exampleInputEmail2" placeholder="Enter Email" />

                            <font class="text-danger">{{ ($errors->has('email'))?$errors->first('email'):'' }}</font>
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