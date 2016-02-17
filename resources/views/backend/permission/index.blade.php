@extends('backend.layouts.master')

@section('title', 'Permission | Index')

@section('css')
  <style type="text/css">
    .btn-circle, .btn.btn-circle {
        border-radius: 50%;
    }
  </style>
@endsection

@section('content-header')
    <h1>
        List All Permission
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
      <a href="/sys/permission/create" class="btn btn-primary"><span><i class="fa fa-fw fa-plus"></i>Create New Permission</span></a> &nbsp;
      {{-- <a href="#" class="btn btn-primary"><span>Follow</span></a> &nbsp; --}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">List All Permission</h3>
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
                <th>ID</th>
                <th>Name</th>
                <th>Display Name</th>
                <th class="visible-lg">Created</th>
                <th class="visible-lg">Last Updated</th>
                <th>Actions</th>
              </tr>
              @forelse($permissions as $permission)
                <tr>
                  <td>{{$permission->id}}</td>
                  <td>{{$permission->name}}</td>
                  <td>{{$permission->display_name}}</td>
                  <td class="visible-lg">{!! $permission->created_at->diffForHumans() !!}</td>
                  <td class="visible-lg">{!! $permission->updated_at->diffForHumans() !!}</td>
                  <td>
                      <?php $url = '/sys/permission/'.$permission->id; ?>
                      {{App\Render::action([
                          'url'=>$url,
                          'label'=>'Permission',
                          'default'=>'default',
                        ])
                      }}
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="3">There is no permission yet.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div>

      <!-- Edit Detail Modal -->
      <div class="modal fade" id="deletePermission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <!-- form start -->
            {!! Form::open(['url'=>'/sys/permission/','method'=>'DELETE', 'class'=>'form-horizontal']) !!}
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Delete Permission</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <p class="col-md-12">Are you sure you want to delete this permission?</p>
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
  </div>
</div>
@endsection