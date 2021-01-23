@extends('layouts.admin-master')
@section('brands')
    active
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Brands</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Brand List</h6><br>
                <div class="table-wrapper">
                  <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th class="wd-15p">First name</th>
                        <th class="wd-15p">Last name</th>
                        <th class="wd-20p">Position</th>
                        <th class="wd-15p">Start date</th>
                        <th class="wd-10p">Salary</th>
                        <th class="wd-25p">E-mail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger</td>
                        <td>Nixon</td>
                        <td>System Architect</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>t.nixon@datatables.net</td>
                      </tr>
                      <tr>
                        <td>Garrett</td>
                        <td>Winters</td>
                        <td>Accountant</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                        <td>g.winters@datatables.net</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div>    
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Add Brand</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data" data-parsley-validate id="selectForm">
                        <div class="form-group">
                            <label class="form-control-label">Brand Name English: <span class="tx-danger">*</span></label>
                            <input class="form-control" data-parsley-minlength="5" name="brand_name_en" id="en" type="text" name="firstname" value="{{ old('brand_name_en') }}" placeholder="Enter brand_name_en" required />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Brand Name Bangla: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="brand_name_bn" type="text" name="firstname" value="{{ old('brand_name_bn') }}" placeholder="Enter brand_name_bn" required />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Brand Image: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="brand_name_bn" type="file" name="firstname" value="John Paul" placeholder="Enter Image" required />
                        </div>
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Submit Form</button>
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

      $('#selectForm').parsley();
    })
  </script>
@endsection
