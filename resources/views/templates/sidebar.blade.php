<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{$menu === 'dashboard' ? 'active' : ''}}">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <li class="nav-item {{$menu === 'biodata' ?  'active' : ''}}">
                <a class="nav-link" href="{{route('biodata')}}">
                    <i class="fas fa-user"></i>
                    <span>Biodata</span></a>
            </li>
            <li class="nav-item {{$menu === 'latihan' ?  'active' : ''}}">
                <a class="nav-link" href="{{route('latihan')}}">
                    <i class="fas fa-tasks"></i>
                    <span>Materi</span></a>
            </li>
           

            <li class="nav-item {{$menu === 'member' ?  'active' : ''}}">
                <a class="nav-link" href="{{route('member')}}">
                    <i class="fas fa-users"></i>
                    <span>Friend List</span></a>
            </li>
           
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> 

        </ul>
        <!-- End of Sidebar -->