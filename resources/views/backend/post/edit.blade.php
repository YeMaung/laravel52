@extends('backend.layouts.master')

@section('title', 'Post | Create')

@section('css')
  
@endsection

@section('content-header')
    <h1>
        Post Management
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
      {{-- <a href="/admin/role/create" class="btn btn-primary"><span><i class="fa fa-fw fa-plus"></i>Create New Role</span></a> &nbsp; --}}
      {{-- <a href="#" class="btn btn-primary"><span>Follow</span></a> &nbsp; --}}
    {{-- </div> --}}
  </div>
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Post</h3>
      </div><!-- /.box-header -->
      <!-- form start -->
      {!! Form::open(['url'=>'/admin/post/'.$post->id,'method'=>'PUT', 'class'=>'form-horizontal']) !!}
        <div class="box-body">
          
          <div class="form-group">
            <label for="title" class="col-sm-12">Post Title</label>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input class="form-control" name="title" id="title" value={{$post->title}} placeholder="Please Enter Post Title" type="text">
            </div>
          </div>

          <div class="form-group">
            <label for="body" class="col-sm-12">Post Body</label>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <textarea class="form-control" name="body" id="mytextarea">{!!$post->body!!}</textarea>
            </div>
          </div>
          
        </div><!-- /.box-body -->
        <div class="box-footer">
          <a href="/admin/post" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-info pull-right">Update</button>
        </div><!-- /.box-footer -->
      {!! Form::close() !!}
    </div>
  </div>
</div>

@section('script')
  <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>

  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
@endsection
@endsection