@extends('backend.layouts.master')

@section('title', 'Post | Index')

@section('css')

@endsection

@section('content-header')
    <h1>
        List All Posts
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
      <a href="/admin/post/create" class="btn btn-primary"><span><i class="fa fa-fw fa-plus"></i>Create New Post</span></a> &nbsp;
      {{-- <a href="#" class="btn btn-primary"><span>Follow</span></a> &nbsp; --}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">List All Posts</h3>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
          @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
          @endif
          <table class="table">
            <tbody>
              <tr>
                <th>Post ID</th>
                <th>Post Slug</th>
                <th>Post Title</th>
                <th>Post Body</th>
              </tr>
              @foreach($posts as $post)
                <tr>
                  <td>{{$post->id}}</td>
                  <td>{{$post->slug}}</td>
                  <td>{{$post->title}}</td>
                  <?php $body = App\Post::getFirstPara($post->body) ?>
                  <td>{{$body}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div>
  </div>
</div>
@endsection