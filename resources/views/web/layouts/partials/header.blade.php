<header class="header">
    <!-- <div class="container"> -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Laravel 4 You</a>
                </div>

                <!-- Navbar Right -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/about">About</a></li>
                        @if(Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                @can('sys_permission')
                                <li><a href="/sys/user">Backend</a></li>
                                @endcan
                                @can('admin_permission')
                                <li><a href="/admin/dashboard">Backend</a></li>
                                @endcan
                                <li><a href="/auth/logout">Log Out</a></li>
                            </ul>
                        </li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/auth/register">Register</a></li>
                                <li><a href="/auth/login">Login</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    <!-- </div> -->
</header>