<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 100vh;">

    <a href="index3.html" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin panel</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Навигация</li>
                <li class="nav-item">
                    <a href="pages/layout/boxed.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Проекты</p>
                    </a>
                </li>

                <li class="nav-header">Users</li>
                        <li class="nav-item">
                            <a href="{{route('admin.clients')}}" class="nav-link {{request()->routeIs(['admin.clients','admin.clients.*'])? 'active' : ''}}">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.admins')}}" class="nav-link {{request()->routeIs(['admin.admins','admin.admins.*'])? 'active' : ''}}">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p>Admins</p>
                            </a>
                        </li>

                <li class="nav-header">Расчёты</li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Расчёт крыши </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Расчёт полов</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/boxed.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Расчёт стен (обои) </p>
                            </a>
                        </li>

            </ul>
        </nav>

    </div>

</aside>
