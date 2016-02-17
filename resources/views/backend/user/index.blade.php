@extends('backend.layouts.master')

@section('title', 'User | Index')

@section('css')
  <style type="text/css">
    .btn-circle, .btn.btn-circle {
        border-radius: 50%;
    }
  </style>
@endsection

@section('content-header')
    <h1>
        User Management
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
      <a href="/sys/user/create" class="btn btn-primary"><span><i class="fa fa-fw fa-plus"></i>Create New User</span></a> &nbsp;
      {{-- <a href="#" class="btn btn-primary"><span>Follow</span></a> &nbsp; --}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">List All User</h3>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table">
            <tbody>
              <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Confirmed</th>
                <th class="visible-lg">Created</th>
                <th class="visible-lg">Last Updated</th>
                <th>Actions</th>
              </tr>
              @forelse($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{!! link_to("mailto:".$user->email, $user->email) !!}</td>
                  <td>{!! $user->confirmed_label !!}</td>
                  <td class="visible-lg">{!! $user->created_at->diffForHumans() !!}</td>
                  <td class="visible-lg">{!! $user->updated_at->diffForHumans() !!}</td>
                  <td>
                      <?php $url = '/sys/user/'.$user->id; ?>
                      {{App\Render::action([
                          'url'=>$url,
                          'label'=>'User',
                          'default'=>'default',
                        ])
                      }}
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="3">There is no user yet.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div>
  </div>
</div>
@endsection