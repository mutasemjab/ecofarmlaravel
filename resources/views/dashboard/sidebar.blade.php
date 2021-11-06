<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Eco Farm</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ESP-32Test1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Farm 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Farm3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.usersFarm')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Users Farm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.devices')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Devices Farm</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.sensors')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Read Sensor</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.outputs')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Contol The Farm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="schedule.html" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>Schedule Timer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="settings.html" class="nav-link">
                        <i class="fas fa-cogs"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Logout.html" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
