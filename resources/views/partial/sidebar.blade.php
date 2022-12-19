<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/">
            <img src="{{ asset('assets/images/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold fs-5 text-white">E-Surat PNL</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('/') ? 'active bg-gradient-primary' : '' }} "
                    href="/">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Surat pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/surat') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard.surat') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-envelope opacity-10 ms-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Surat</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/approve') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard.approve') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-bars-progress opacity-10 ms-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">Approve</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/history') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard.history') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-bars-progress opacity-10 ms-1"></i>
                    </div>
                    <span class="nav-link-text ms-1">History Surat</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Data pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/mahasiswa') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard.mahasiswa') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-sharp fa-solid fa-user-group"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Mahasiswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/approvesior') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard.approvesior') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-sharp fa-solid fa-user-group"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Approvesior</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/prodi') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard.prodi') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-sharp fa-solid fa-user-group"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Prodi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/jurusan') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard.jurusan') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-sharp fa-solid fa-user-group"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Jurusan</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/user') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard.user') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-sharp fa-solid fa-user-group"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/profile') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard.profile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-sharp fa-solid fa-user-group"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-8 ">
        <ul class="navbar-nav">
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button class="nav-link text-white w-75 bg-transparent border-0" type="submit"><i
                            class="fa-solid fa-right-from-bracket me-2 fs-6"></i>
                        Logout</button>
                </form>
            </li>
        </ul>
    </div>
</aside>
