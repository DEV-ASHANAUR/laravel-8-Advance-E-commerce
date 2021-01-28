@extends('layouts.admin-master')
@section('slider')
    active
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Slider</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Slider List</div>
                <div class="card-body">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-25p">SL</th>
                          <th class="wd-25p">Image</th>
                          <th class="wd-25p">Title</th>
                          <th class="wd-25p">Status</th>
                          <th class="wd-25p">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($slider as $key => $item)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td>
                            <img src="{{ asset($item->image) }}" class="img-thumbnail" style="width: 80px" alt="">
                          </td>
                          <td style="text-transform: capitalize">{{ $item->title_en }}</td>
                          <td>
                            @if ($item->status == 0)
                              <span class="badge badge-pill badge-danger">Disable</span>
                            @else
                              <span class="badge badge-pill badge-success">Active</span>
                            @endif
                          </td>
                          <td>
                            @if ($item->status == 0)
                              <a href="{{ route('slider.active',$item->id) }}" class="btn btn-sm btn-success" title="Press For Active"><i class="fa fa-check-circle"></i></a>
                            @else
                              <a href="{{ route('slider.disable',$item->id) }}" class="btn btn-sm btn-danger" title="Press For Disable"><i class="fa fa-check-circle"></i></a> 
                            @endif

                            <a href="{{ route('slider.edit',$item->id) }}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>

                            <a href="{{ route('slider.delete',$item->id) }}" id="delete" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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
                <div class="card-header">Add Brand</div>
                <div class="card-body">
                    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate id="selectForm">
                      @csrf
                        <div class="form-group">
                            <label class="form-control-label">Slider Title English: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="title_en"  value="{{ old('title_en') }}" placeholder="Enter title English" />
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Slider Title: <span class="tx-danger">*</span></label>
                          <input type="text" class="form-control" name="title_bn" value="{{ old('title_bn') }}" placeholder="Enter title Bangla" />

                      </div>
                        <div class="form-group">
                            <label class="form-control-label">Slider Description English: <span class="tx-danger">*</span></label>
                            {{-- <input type="text" class="form-control" name="description"  value="{{ old('description') }}" placeholder="Enter description" required /> --}}
                            <textarea name="description_en" class="form-control" placeholder="Enter description English"></textarea>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Slider Description Bangla: <span class="tx-danger">*</span></label>
                          {{-- <input type="text" class="form-control" name="description"  value="{{ old('description') }}" placeholder="Enter description" required /> --}}
                          <textarea name="description_bn" class="form-control" placeholder="Enter description Bangla"></textarea>

                      </div>
                        <div class="form-group">
                            <label class="form-control-label">Slider Image: <span class="tx-danger">*</span></label>
                            <input type="file" class="form-control" name="image" required />

                            <font class="text-danger">{{ ($errors->has('image'))?$errors->first('image'):'' }}</font>
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

      $('#selectForm').parsley();
    })
  </script>
@endsection
