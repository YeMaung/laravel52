@extends('backend.layouts.master')

@section('title', 'Role | Create')

@section('css')
  
@endsection

@section('content-header')
    <h1>
        {{$role->display_name}}
        <small>Role Name : {{$role->name}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/sys/user"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="/sys/role">Role Management</a></li>
        <li class="active">Role Detail</li>
    </ol>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">

    <div class="form-group">
      <!-- <a id="role" href="/sys/role/{{$role->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i> Edit Role Details</a> -->
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editDetail">
        <i class="fa fa-edit"></i> Edit Role Details
      </button>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#assignPermission">
        <i class="fa fa-bolt"></i> Assign Permission
      </button>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#assignUser">
        <i class="fa fa-user"></i> Assign User
      </button>
      <!-- <a id="role" href="/sys/role/{{$role->id}}/assign_permission" class="btn btn-success"><i class="fa fa-bolt"></i> Assign Permission</a> -->
      <!-- <a id="role" href="/sys/role/{{$role->id}}/assign_user" class="btn btn-success"><i class="fa fa-user"></i> Assign User</a> -->
      <a href="/sys/role/{{$role->id}}" class="btn btn-danger"><i class="fa fa-times-circle-o"></i> Delete Role</a>
    </div>

    <div class="box box-info">

      <div class="box-header with-border">
        <h3 class="box-title">Permission of the {{$role->display_name}}</h3>
      </div>
      <!-- /.box-header -->
      
      <div class="box-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="form-group">
          <h4 class="col-md-12">Role Details</h4>
          <label for="name" class="col-sm-3 control-label">Role Name</label>
          <label for="name" class="col-sm-9 control-label">{{$role->name}}</label>

          <label for="name" class="col-sm-3 control-label">Role Display Name</label>
          <label for="name" class="col-sm-9 control-label">{{$role->display_name}}</label>
        </div>       
      </div>
      <!-- /.box-body -->

    </div>

    <!-- Edit Detail Modal -->
    <div class="modal fade" id="editDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- form start -->
          {!! Form::open(['url'=>'/sys/role/'.$role->id,'method'=>'PUT', 'class'=>'form-horizontal']) !!}
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Role Details</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">Role Name</label>
                  <div class="col-sm-9">
                    <input class="form-control" name="name" id="name" value={{$role->name}} placeholder="Please Enter Role Name" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">Display Name</label>
                  <div class="col-sm-9">
                    <input class="form-control" name="display_name" value={{$role->display_name}} id="display_name" placeholder="Please Enter Display Name" type="text">
                  </div>
                </div>  
              </div>   
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
          {!! Form::close() !!}
          <!-- form End -->
        </div>
      </div>
    </div>
    <!-- End Edit Detail Modal -->
    
    <!-- Assign Permission Modal -->
    <div class="modal fade" id="assignPermission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      {!! Form::open(['url'=>'/sys/role/'.$role->id.'/assign_permission','method'=>'POST', 'class'=>'form-horizontal']) !!}
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <div class="col-md-12">
                  <div class="col-md-4">
                    {!!Form::label('permission_id','Select Permission',array('class'=>'control-label'))!!}
                  </div>
                  <div class="col-md-8">
                    {!!Form::select('permission_id',$permissions,'',array('class'=>'form-control'))!!}
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Assign</button>
          </div>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
    <!-- End Assign Permission Modal -->

    <!-- Assign User Modal -->
    <div class="modal fade" id="assignUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        {!! Form::open(['url'=>'/sys/role/'.$role->id.'/assign_user','method'=>'POST', 'class'=>'form-horizontal']) !!}
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="col-md-12">
                {!!Form::select('user_id',$users,'',array('class'=>'form-control'))!!}
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Assign</button>
          </div>
        {!! Form::close() !!}
        <!-- End Form -->
        </div>
      </div>
    </div>
    <!-- End Assign User Modal -->

  </div>
</div>
@endsection