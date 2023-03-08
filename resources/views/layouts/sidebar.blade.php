<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/assets/index3.html" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://lh3.googleusercontent.com/ogw/AAEL6siAx93Ku9rASwqyvHLeFjSn_E3vsaj-RK7lgWEmf4w=s64-c-mo" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Tio Irawan</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                
                <li class="nav-header">FITUR</li>
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/articles') }}" class="nav-link {{ request()->is('articles') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Artikel</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/hobbies') }}" class="nav-link {{ request()->is('hobbies') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-gamepad"></i>
                        <p>Hobi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/profile/tio-misbaqul-irawan') }}" class="nav-link {{ request()->segment(1) == 'profile' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/pengalaman-kuliah') }}" class="nav-link  {{ request()->is('pengalaman-kuliah') ? 'active' : '' }}">
                      <i class="nav-icon fas fa-university"></i>
                      <p>Pengalaman Kuliah</p>
                  </a>
              </li>
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
