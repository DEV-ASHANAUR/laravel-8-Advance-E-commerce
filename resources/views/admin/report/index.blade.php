@extends('layouts.admin-master')
@section('report')
    active
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Search Report</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">  
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Search By Date</div>
                <div class="card-body">
                    <form action="{{ route('search-by-date') }}" method="POST" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                            <label class="form-control-label">Select Date: <span class="tx-danger">*</span></label>
                            <input type="date" class="form-control" name="date" required />
                            <font class="text-danger">{{ ($errors->has('date'))?$errors->first('brand_name_en'):'' }}</font>

                        </div>
                        <div class="form-layout-footer">
                            <button type="submit" class="btn btn-info mg-r-5">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div><!-- form-layout-footer -->
                    </form>
                </div>
            </div>
        </div> 
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Search By Month</div>
                <div class="card-body">
                    <form action="{{ route('search-by-month') }}" method="POST" data-parsley-validate id="selectForm">
                      @csrf
                      <div class="form-group">
                            <label class="form-control-label">Select Month: <span class="tx-danger">*</span></label>
                            <select name="month" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
                                <option label="Choose one"></option>
                                <option value="January">January</option> 
                                <option value="February">February</option> 
                                <option value="March">March</option> 
                                <option value="April">April</option> 
                                <option value="May">May</option> 
                                <option value="June">June</option> 
                                <option value="July">July</option> 
                                <option value="August">August</option>
                                <option value="September">September</option>  
                                <option value="October">October</option>  
                                <option value="November">November</option>  
                                <option value="December">December</option>     
                            </select>
                            <font class="text-danger">{{ ($errors->has('month'))?$errors->first('month'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Select Year: <span class="tx-danger">*</span></label>
                            <select name="year" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
                                <option label="Choose one"></option>
                                <option value="2021">2021</option>   
                                <option value="2022">2022</option>  
                                <option value="2023">2023</option>  
                                <option value="2024">2024</option>  
                                <option value="2025">2025</option>  
                            </select>
                            <font class="text-danger">{{ ($errors->has('year'))?$errors->first('year'):'' }}</font>
                        </div>
                        <div class="form-layout-footer">
                            <button type="submit" class="btn btn-info mg-r-5">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div><!-- form-layout-footer -->
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Search By Year</div>
                <div class="card-body">
                    <form action="{{ route('search-by-year') }}" method="POST" enctype="multipart/form-data" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                            <label class="form-control-label">Select Year: <span class="tx-danger">*</span></label>
                            <select name="year" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
                                <option label="Choose one"></option>
                                <option value="2021">2021</option>   
                                <option value="2022">2022</option>  
                                <option value="2023">2023</option>  
                                <option value="2024">2024</option>  
                                <option value="2025">2025</option>   
                            </select>
                            <font class="text-danger">{{ ($errors->has('year'))?$errors->first('year'):'' }}</font>
                        </div>
                        <div class="form-layout-footer">
                            <button type="submit" class="btn btn-info mg-r-5">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div><!-- form-layout-footer -->
                    </form>
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
        // Select2 by showing the search
       $('.select2-show-search').select2({
          minimumResultsForSearch: ''
        });

      $('#selectForm').parsley();
    });
  </script>
@endsection
