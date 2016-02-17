@extends('web.layouts.app')
@section('title', 'Single')

@section('css')
<style type="text/css">
    header{
        background-color: #009688;
    }
    .header-background {
        transform: translate3d(0px, 0px, 0px);
        transition: all 0.33s cubic-bezier(0.694, 0.0482, 0.335, 1) 0s;
    }
    .post, .contact, .ads {
        background: #FFF none repeat scroll 0% 0%;
        padding: 20px;
        margin-bottom: 15px;
    }

    section.blog, .content-9, .register, .login {
        padding: 100px 0px;
        background: #F5F5F5 none repeat scroll 0% 0%;
    }
</style>
@endsection

@section('content')
<section class="blog">
    <div class="container">
        <div class="row banner">

            <div class="col-md-8">
                
                <div class="post">
                    {!!$post->body!!}
                </div>

            </div>

        </div>
    </div>
</section>
@endsection