@extends('layouts.admin-master')
@section('alluser')
    active
@endsection
@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">ShopMama</a>
      <span class="breadcrumb-item active">Users</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-12">
            <div class="card">
                @php
                    $online_cus = 0;
                @endphp
                @foreach ($alluser as $row)
                @php
                    if($row->userIsOnline()){
                        $online_cus += 1;
                    }
                @endphp
                @endforeach
                <div class="card-header">Total Customer <span class="badge badge-pill badge-success">{{ count($alluser) }}</span>
                    And Active User <span class="badge badge-pill badge-success">{{ $online_cus }}</span>
                </div>
                <div class="card-body">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap text-center">
                      <thead>
                        <tr>
                          <th class="wd-10p text-center">SL</th>
                          <th class="wd-15p text-center">Thumbnail</th>
                          <th class="wd-10p text-center">User Name</th>
                          <th class="wd-10p text-center">User Email</th>
                          <th class="wd-10p text-center">Type</th>
                          <th class="wd-10p text-center">Status</th>
                          <th class="wd-20p text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($alluser as $key => $item)
                        <tr>
                          <td>{{ $key+1 }}</td>
                          <td><img src="{{ (!empty($item->image))?asset($item->image):asset('media/profile.jpg') }}" class="img-thumbnail" style="width: 80px" alt=""></td>
                          <td style="text-transform: uppercase">{{ $item->name }}</td>
                          <td>{{ $item->email }}</td>
                          <td>
                              @if ($item->isban == 0)
                                <span class="square-8 bg-success mg-r-5 rounded-circle"></span>
                                Account Unbanned
                              @else
                                <span class="square-8 bg-pink mg-r-5 rounded-circle"></span>
                                Account Banned
                              @endif
                          </td>
                          <td>
                              @if ($item->userIsOnline())
                                <span class="badge badge-pill badge-success">Active Now</span>
                              @else
                                <span class="badge badge-pill badge-danger">{{ Carbon\Carbon::parse($item->last_seen)->diffForHumans() }}</span>
                              @endif
                            </td>
                          <td>
                            @if ($item->isban == 0)
                              <a href="{{ route('account.banned',$item->id) }}" class="btn btn-sm btn-danger" title="Press For banned">Banned</a>
                            @else
                              <a href="{{ route('account.unbanned',$item->id) }}" class="btn btn-sm btn-success" title="Press For unbanned">Unbanned</a> 
                            @endif
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                </div>
            </div><!-- card -->
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
