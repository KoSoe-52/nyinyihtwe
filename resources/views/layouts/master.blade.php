<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/select2.css')}}">
    @yield('style')
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <!-- <img src="assets/images/logo.svg" alt="" srcset=""> -->
                    <!-- <img src="{{url('/storage/images/logo.jpg')}}" alt="logo" title="logo" style="border-radius:50%;"> -->
                    <span style='color:#00b6c1;font-family:"Cursive",Brush Script MT;'></span>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                            @if(Auth::check())
                                    <li class='sidebar-title'>Admin Account</li>
                                    <li class="sidebar-item">
                                        <a href="{{route('workspace')}}" class='sidebar-link workspace'>
                                            <i data-feather="shopping-bag"></i>                                            
                                            <span>Workspace</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('modelzadashi')}}" class='sidebar-link modelzadashi'>
                                            <i data-feather="shopping-bag"></i>                                            
                                            <span>моделизадачи</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('modelzadashar')}}" class='sidebar-link modelzadashar'>
                                            <i data-feather="shopping-bag"></i>                                            
                                            <span>предметзадача</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('sastartmodelstructure')}}" class='sidebar-link sastartmodelstructure'>
                                            <i data-feather="shopping-bag"></i>                                            
                                            <span>составк-моделиизструктур</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('structure')}}" class='sidebar-link structure'>
                                            <i data-feather="shopping-bag"></i>                                            
                                            <span>структуры</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('f1c')}}" class='sidebar-link f1c'>
                                            <i data-feather="shopping-bag"></i>                                            
                                            <span>элементстатструктурыf1с</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('f2c')}}" class='sidebar-link f2c'>
                                            <i data-feather="shopping-bag"></i>                                            
                                            <span>бинсвязистатструктурыf2c</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('f3c')}}" class='sidebar-link f3c'>
                                            <i data-feather="shopping-bag"></i>                                            
                                            <span>элементдинструктурыf3с</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('f4c')}}" class='sidebar-link f4c'>
                                            <i data-feather="shopping-bag"></i>                                            
                                            <span>бинсвязидинструктурыf4c</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('f6c')}}" class='sidebar-link f6c'>
                                            <i data-feather="shopping-bag"></i>                                            
                                            <span>структураувязкиf6с</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('km')}}" class='sidebar-link km'>
                                            <i data-feather="shopping-bag"></i>                                            
                                            <span>км</span>
                                        </a>
                                    </li>
                                  
                            @endif
                            <li class="sidebar-item">
                                <a href="{{route('logout')}}" class='sidebar-link'>
                                    <i data-feather="log-out" width="20"></i> 
                                    <span>Logout</span>
                                </a>
                            </li>
                            <!-- <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i data-feather="triangle" width="20"></i> 
                                    <span>Components</span>
                                </a>
                                <ul class="submenu ">
                                    <li>
                                        <a href="component-alert.html">Alert</a>
                                    </li>
                                    <li>
                                        <a href="component-badge.html">Badge</a>
                                    </li>
                                </ul>
                            </li> -->
                    </ul>
                </div><!--- sidebar-menu --->
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div><!--- sidebar-wrapper active --->
        </div><!---- sidebar ----->
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light mb-0">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto" >                   
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user" >
                                <div class="avatar mr-1">
                                    <img src="{{asset('assets/images/avatar/avatar-s-1.png')}}" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block" >Hi, 
                                    @if(Auth::check())
                                        {{Auth::user()->name}}
                                    @endif
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <!-- <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('/logout')}}"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="main-content container-fluid">
                    <div class="page-title">
                        <div class="row">
                            @yield('header')
                        </div>
                    </div>
                    <!-- Table head options start -->
                    <div class="row" id="table-head">
                        @yield('content')
                    </div><!---- row  --->
                    <!-- Table head options end -->
            </div> <!---- main-content ---> 
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2021 &copy;</p>
                    </div>
                    <div class="float-right">
                        <!-- <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p> -->
                    </div>
                </div>
            </footer>
        </div><!---- id main--->
    </div><!--- app --->
    <script src="{{asset('assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/select2.js')}}"></script>
    @yield("script")
</body>
</html>
