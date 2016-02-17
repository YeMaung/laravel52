@extends('web.layouts.app')
@section('title', 'Home')

@section('css')
<style type="text/css">
    /*header{
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
    }*/

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
                
                @foreach($posts as $post)
                    <div class="well">
                        <h2><a href="/blog/{{$post->slug}}">{{$post->title}}</a></h2>
                        <?php $body = App\Post::getFirstPara($post->body) ?>
                        {!!$body!!}
                        <!-- <br />   -->
                        <!-- <a href="/blog/{{$post->slug}}" class="btn btn-raised btn-info">Read More >></a>                       -->
                    </div>
                @endforeach

                {!! $posts->render() !!}

            </div>

        </div>
    </div>
</section>
@endsection