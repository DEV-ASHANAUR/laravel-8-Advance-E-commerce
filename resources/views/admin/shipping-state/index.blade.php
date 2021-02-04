@extends('layouts.admin-master')
@section('shippingArea')
    active show-sub
@endsection
@section('add-state')
    active 
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">State</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">State List</div>
                <div class="card-body">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-20p">SL</th>
                          <th class="wd-20p">Division Name</th>
                          <th class="wd-20p">District Name</th>
                          <th class="wd-20p">State Name</th>
                          <th class="wd-20p">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($state as $key => $item)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td class="text-capitalize">{{ $item->division->division_name }}</td>
                          <td class="text-capitalize">{{ $item->district->district_name }}</td>
                          <td class="text-capitalize">{{ $item->state_name }}</td>
                          <td>
                            <a href="{{ route('state.edit',$item->id) }}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>

                            <a href="{{ route('state.delete',$item->id) }}" id="delete" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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
                <div class="card-header">Add State</div>
                <div class="card-body">
                    <form action="{{ route('state.store') }}" method="POST" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                          <label class="form-control-label">Select Division Name: <span class="tx-danger">*</span></label>
                          <select name="division_id" id="division" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)" required>
                              <option label="Choose one"></option>
                              @foreach ($division as $div)
                                <option value="{{ $div->id }}">{{ ucwords($div->division_name)  }}</option> 
                              @endforeach
                          </select>
                          <font class="text-danger">{{ ($errors->has('division_id'))?$errors->first('division_id'):'' }}</font>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Select District Name: <span class="tx-danger">*</span></label>
                          <select name="district_id" class="form-control select2-show-search" id="district" data-placeholder="Choose one (with searchbox)" required>
                              <option label="Select Division First"></option>
                          </select>
                          <font class="text-danger">{{ ($errors->has('district_id'))?$errors->first('district_id'):'' }}</font>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">State Name: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="state_name"  value="{{ old('state_name') }}" placeholder="Enter State Name" required />
                            <font class="text-danger">{{ ($errors->has('state_name'))?$errors->first('state_name'):'' }}</font>
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
  $(document).ready(function(){
    $(document).on('change','#division',function(){
      var division_id = $(this).val();
      // alert(division_id);
      $.ajax({
        url:"{{route('get-district')}}",
        type:"GET",
        data:{division_id:division_id},
        success:function(data){
          var html = '<option value="">Selcet District</option>';
          $.each(data,function(key,v){
            html +='<option value="'+v.id+'">'+v.district_name+'</option>';
          });
          $('#district').html(html);
        }
      });
    });
  });
</script>
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
