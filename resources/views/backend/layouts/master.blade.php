<!DOCTYPE html>
    <!--
    This is a starter template page. Use this page to start your new project from
    scratch. This page gets rid of all links and provides the needed markup only.
    -->
    <html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- Bootstrap 3.3.2 -->
        <link href="{{ asset('/assets/libs/bootstrap-3.3.5-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <link href="{{ asset('/assets/libs/font-awesome-4.4.0/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset('/assets/libs/AdminLTE-2.3.0/dist/css/AdminLTE.min.css') }}" rel="stylesheet">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="{{ asset('/assets/libs/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">

        @yield('css')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-black sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        @section('navbar')
            @include('backend.layouts.partials.header')
        @show
        <!-- Left side column. contains the logo and sidebar -->
        @section('sidebar')
            @include('backend.layouts.partials.sidebar')
        @show

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            	@yield('content-header')
            </section>

            <!-- Main content -->
            <section class="content">
                @include('backend.layouts.partials.error')
                <!-- Your Page Content Here -->
                @yield('content')

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <!-- Main Footer -->
        @section('footer')
            @include('backend.layouts.partials.footer')
        @show
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset('/assets/libs/jquery-2.1.4/jquery.min.js') }}"></script> 
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('/assets/libs/bootstrap-3.3.5-dist/js/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/assets/libs/AdminLTE-2.3.0/dist/js/app.min.js') }}"></script>
    
    @yield('script')
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience -->
    </body>
</html>