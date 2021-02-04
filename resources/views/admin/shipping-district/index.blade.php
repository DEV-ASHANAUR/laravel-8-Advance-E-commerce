@extends('layouts.admin-master')
@section('shippingArea')
    active show-sub
@endsection
@section('add-district')
    active 
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">District</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">District List</div>
                <div class="card-body">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-25p">SL</th>
                          <th class="wd-50p">Division Name</th>
                          <th class="wd-50p">District Name</th>
                          <th class="wd-25p">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($district as $key => $item)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td class="text-capitalize">{{ $item->division->division_name }}</td>
                          <td class="text-capitalize">{{ $item->district_name }}</td>
                          <td>
                            <a href="{{ route('district.edit',$item->id) }}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>

                            <a href="{{ route('district.delete',$item->id) }}" id="delete" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                </div>
            </div><!-- card -->
        </div>    
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Add District</div>
                <div class="card-body">
                    <form action="{{ route('district.store') }}" method="POST" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                          <label class="form-control-label">Select Division Name: <span class="tx-danger">*</span></label>
                          <select name="division_id" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
                              <option label="Choose one"></option>
                              @foreach ($division as $div)
                                <option value="{{ $div->id }}">{{ ucwords($div->division_name)  }}</option> 
                              @endforeach
                          </select>
                          <font class="text-danger">{{ ($errors->has('division_id'))?$errors->first('division_id'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">District Name: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="district_name"  value="{{ old('district_name') }}" placeholder="Enter District Name" required />
                            <font class="text-danger">{{ ($errors->has('district_name'))?$errors->first('district_name'):'' }}</font>
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
