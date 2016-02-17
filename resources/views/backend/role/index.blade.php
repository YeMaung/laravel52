@extends('backend.layouts.master')

@section('title', 'Role | Index')

@section('css')
  <style type="text/css">
    .btn-circle, .btn.btn-circle {
        border-radius: 50%;
    }
  </style>
@endsection

@section('content-header')
    <h1>
        Role Management
        {{-- <small>Optional description</small> --}}
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <a href="/sys/role/create" class="btn btn-primary"><span><i class="fa fa-fw fa-plus"></i>Create New Role</span></a> &nbsp;
      {{-- <a href="#" class="btn btn-primary"><span>Follow</span></a> &nbsp; --}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">List All Role</h3>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
          @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
          @endif
          <table class="table">
            <tbody>
              <tr>
                <th>Role ID</th>
                <th>Role Name</th>
                <th>Display Name</th>
                <th>Action</th>
              </tr>
              @forelse($roles as $role)
                <tr>
                  <td>{{$role->id}}</td>
                  <td>{{$role->name}}</td>
                  <td>{{$role->display_name}}</td>
                  <td>
                      <a data-original-title="Show user details" href="/sys/role/{{$role->id}}" data-toggle="tooltip" class="btn btn-icon btn-circle btn-sm btn-success">
                          <i class="fa fa-angle-double-right"></i>
                      </a>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="3">There is no role yet.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
          
        </div><!-- /.box-body -->
      </div>
  </div>
</div>

@section('script')
  
@endsection

@endsection