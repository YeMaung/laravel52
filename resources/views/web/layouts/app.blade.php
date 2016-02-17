<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Laravel 4 You | @yield('title') </title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="/assets/libs/bootstrap-material-design/dist/css/roboto.min.css" rel="stylesheet">
    <link href="/assets/libs/bootstrap-material-design/dist/css/material.min.css" rel="stylesheet">
    <link href="/assets/libs/bootstrap-material-design/dist/css/ripples.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

    @yield('css')
</head>
<body id="app-layout">

    @include('web.layouts.partials.header')

    @yield('content')

    <!-- JavaScripts -->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="/assets/libs/bootstrap-material-design/dist/js/ripples.min.js"></script>
    <script src="/assets/libs/bootstrap-material-design/dist/js/material.min.js"></script>
    <script>
        $(document).ready(function() {
            // This command is used to initialize some elements and make them work properly
            $.material.init();
        });
    </script>
</body>
</html>
