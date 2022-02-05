<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ "welkin moon -Dashboard" }}</title>
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.png" sizes="32x32" type="image/png">
    <link href="{{ asset('dashboard/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    {{-- CSS Yield --}}
    @yield('css')
</head>
<body>
    <div id="layout-wrapper">
        <header id="page-topbar" style="background-color: #7D85EC;">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/wm2.png') }}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/wm2.png') }}" alt="" height="20">
                            </span>
                        </a>
                        <a href="" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/wm2.png') }}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/wm2.png') }}" alt="" height="20">
                            </span>
                        </a>
                    </div>
                    <button type="button" class="btn btn-sm px-3 text-white font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <!-- <div class="topbar-social-icon me-3 d-none d-md-block">
                        <ul class="list-inline title-tooltip m-0">
                            <li class="list-inline-item">
                                <a href="email-inbox.html" data-bs-toggle="tooltip" data-placement="top" title="Email">
                                 <i class="mdi mdi-email-outline"></i>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </div>
                <div class="d-flex">
                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn  header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="mdi text-white mdi-fullscreen"></i>
                        </button>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="{{ asset('dashboard/assets/images/default-profile-picture.jpg') }}" alt="Header Avatar">
                            <span class="d-none text-white d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none text-white d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" target="_blank" href="{{route('home')}}"><i
                                    class="mdi mdi-web font-size-16 align-middle me-1"></i> Website</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                <i
                                    class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i>{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!-- <div class="user-sidebar text-center">
                    <div class="dropdown">
                        <div class="user-img">
                            <img src="{{ asset('dashboard/assets/images/users/avatar-7.jpg') }}" alt="" class="rounded-circle">
                            <span class="avatar-online bg-success"></span>
                        </div>
                        <div class="user-info">
                            <h5 class="mt-3 font-size-16 text-white">James Raphael</h5>
                            <span class="font-size-13 text-white-50">Administrator</span>
                        </div>
                    </div>
                </div> -->
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="{{url('home')}}" class="waves-effect">
                                <i class="dripicons-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                {{-- <i class="dripicons-users"></i> --}}
                                <i class="fa fa-users"> </i>
                                <span>Teams</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('team.index')}}">All Members</a></li>
                                <li><a href="{{route('team.create')}}">Add Members</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fas fa-sliders-h"></i>
                                <span>Slider</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('slider.index')}}">Slider List</a></li>
                            </ul>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('slider.create')}}">Add Slider</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fas fa-quote-right"></i>
                                <span>Faq </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('faq.index')}}">Faq List</a></li>
                            </ul>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('faq.create')}}">Add Faq</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fas fa-project-diagram"></i>
                                <span>Our Project</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('project.index')}}">Project list</a></li>
                            </ul>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('project.create')}}">Add Project</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        @yield('content')
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © {{ config('app.name', 'Laravel') }}
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Developed <i class="mdi mdi-heart text-danger"></i> by Rakib Hasan</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    </div>
    <script src="{{ asset('dashboard/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
    </script>
    <script src="{{ asset('dashboard/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- delete confirmation --}}
    <script>
        function deleteData(id){
            Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            }).then((result) => {
            if (result.isConfirmed) {
                $('#deleteData'+id).submit()
            }
            })
        }
    </script>

    @if (session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}"
            })
        </script>
    @endif

    {{-- Script Yield --}}
    @yield('javacript')
</body>


</html>
