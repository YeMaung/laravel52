@extends('web.layouts.app')

@section('css')
    <style type="text/css">
        #well{
            margin-top: 60px;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="well bs-component" id="well">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-field col-md-8 col-md-offset-2">
                            <input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-8 col-md-offset-2">
                            <input type="password" placeholder="Password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                            <button type="submit" class="btn btn-block btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i>Login
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                            <a class="pull-left btn-link" href="{{ url('/auth/register') }}">Register Now</a>
                            <a class="pull-right btn-link" href="{{ url('/auth/password/reset') }}">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
@endsection


