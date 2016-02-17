<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/assets/libs/AdminLTE-2.3.0/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            {{-- <li class="header">
                <a href="/admin/home"><span>Navigation</span> <i class="fa fa-home pull-right" style="font-size: 18px;"></i></a>
            </li> --}}
            <li class="header">Navigation</li>
            <!-- Optionally, you can add icons to the links -->
            @can('sys_permission')
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-users"></i> <span>Access Control</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li class="">
                        <a href="/sys/user">
                            <i class="fa fa-circle-o"></i> <span>User Management</span>
                        </a>
                    </li> 
                    <li class="">
                        <a href="/sys/role">
                            <i class="fa fa-circle-o"></i> <span>Role Management</span>
                        </a>
                    </li> 
                    <li class="">
                        <a href="/sys/permission">
                            <i class="fa fa-circle-o"></i> <span>Permission Management</span>
                        </a>
                    </li> 
                  </ul>
                </li>
                
            @endcan

            @can('admin_permission')
                <li class="">
                    <a href="/admin/dashboard">
                        <i class="fa fa-bar-chart-o"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin/post">
                        <i class="fa fa-edit"></i> <span>Post Management</span>
                    </a>
                </li>    
            @endcan
                    
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>