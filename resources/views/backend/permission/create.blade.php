@extends('backend.layouts.master')

@section('title', 'Permission | Create')

@section('css')
  
@endsection

@section('content-header')
    <h1>
        Permission Management
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
    {{-- <div class="form-group"> --}}
      {{-- <a href="/sys/role/create" class="btn btn-primary"><span><i class="fa fa-fw fa-plus"></i>Create New Role</span></a> &nbsp; --}}
      {{-- <a href="#" class="btn btn-primary"><span>Follow</span></a> &nbsp; --}}
    {{-- </div> --}}
  </div>
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Create New Permission</h3>
      </div><!-- /.box-header -->
      <!-- form start -->
      {!! Form::open(['url'=>'/sys/permission','method'=>'POST', 'class'=>'form-horizontal']) !!}
        <div class="box-body">
          
          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
              <input class="form-control" name="name" id="name" placeholder="Please Enter Permission Name" type="text">
            </div>
          </div>

          <div class="form-group">
            <label for="display_name" class="col-sm-3 control-label">Display Name</label>
            <div class="col-sm-9">
              <input class="form-control" name="display_name" id="display_name" placeholder="Please Enter Permission Display Name" type="text">
            </div>
          </div>

          
        </div><!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-info pull-right">Create</button>
        </div><!-- /.box-footer -->
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection