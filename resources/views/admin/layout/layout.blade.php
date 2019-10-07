<!DOCTYPE html>
<!--
  * CoreUI Pro - Bootstrap Admin Template
  * @version v2.1.12
  * @link https://coreui.io/pro/
  * Copyright (c) 2018 creativeLabs Łukasz Holeczek
  * License (https://coreui.io/pro/license)
-->

<html lang="en">
<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <link rel="icon" href={{ url('images/wytu.png') }} type="image/png" />
  <title>Online Learning for IT Students</title>
  <!-- Icons-->
  <link href="{{asset('admin/vendors/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
  {{-- <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"> --}}
  
  <link href="{{asset('admin/vendors/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
  <!-- Main styles for this application-->
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
      <img class="navbar-brand-full" src={{ url('images/wytu.png') }} width="30" height="35" alt="CoreUI Logo">
      <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown d-md-down-none">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="icon-bell"></i>
          <span class="badge badge-pill badge-danger">5</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
          <div class="dropdown-header text-center">
            <strong>You have 5 notifications</strong>
          </div>
          <a class="dropdown-item" href="#">
            <i class="icon-user-follow text-success"></i> New user registered</a>
            <a class="dropdown-item" href="#">
              <i class="icon-user-unfollow text-danger"></i> User deleted</a>
              <a class="dropdown-item" href="#">
                <i class="icon-chart text-info"></i> Sales report is ready</a>
                <a class="dropdown-item" href="#">
                  <i class="icon-basket-loaded text-primary"></i> New client</a>
                  <a class="dropdown-item" href="#">
                    <i class="icon-speedometer text-warning"></i> Server overloaded</a>
                    <div class="dropdown-header text-center">
                      <strong>Server</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                      <div class="text-uppercase mb-1">
                        <small>
                          <b>CPU Usage</b>
                        </small>
                      </div>
                      <span class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </span>
                      <small class="text-muted">348 Processes. 1/4 Cores.</small>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="text-uppercase mb-1">
                        <small>
                          <b>Memory Usage</b>
                        </small>
                      </div>
                      <span class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                      </span>
                      <small class="text-muted">11444GB/16384MB</small>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="text-uppercase mb-1">
                        <small>
                          <b>SSD 1 Usage</b>
                        </small>
                      </div>
                      <span class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                      </span>
                      <small class="text-muted">243GB/256GB</small>
                    </a>
                  </div>
                </li>
               
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <img class="img-avatar" src="{{asset('images/wytu.png')}}" alt="{{ Auth::user()->name }} ">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      
                      
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="fa fa-lock"></i> Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </li>
                </ul>
                <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </header>
              
              <div class="app-body">
                
                <div class="sidebar">
                  <nav class="sidebar-nav">
                    <ul class="nav">
                      <li class="nav-item">
                        <a class="nav-link" href="index.html">
                          <i class="nav-icon icon-speedometer"></i> Dashboard
                          <span class="badge badge-info">NEW</span>
                        </a>
                      </li>
                      <li class="nav-title">Theme</li>
                      @if(auth()->user()->isAdmin())
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('speakers.index')}}">
                          <i class="fa fa-user" aria-hidden="true"></i>
                          Speakers</a>
                        </li>
                        @endif
                        @if(auth()->user()->isAdmin())
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('audio_lessons.index')}}">
                            <i class="fas fa-file-audio"></i>  Audio Lessons</a>
                          </li>
                          @endif
                          
                          @if(auth()->user()->isAdmin())
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('thesis.index')}}">
                              <i class="fas fa-book"></i>  Thesis</a>
                            </li>
                            
                            @else
                            
                            <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{route('assignment.index')}}"> 
                                <i class="fas fa-edit" aria-hidden="true"></i>
                                Assignment
                                </a> 
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown"  style="background-color:#002347;">
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('assignment.index')}}">
                                <i class="fas fa-edit" aria-hidden="true"></i> 1BE-IT</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" href="{{route('assignment.index')}}">
                                <i class="fas fa-edit" aria-hidden="true"></i>2BE-IT</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('assignment.index')}}">
                                <i class="fas fa-edit" aria-hidden="true"></i>3BE-IT</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" href="{{route('assignment.index')}}">
                                <i class="fas fa-edit" aria-hidden="true"></i>4BE-IT</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" href="{{route('assignment.index')}}">
                                <i class="fas fa-edit" aria-hidden="true"></i>5BE-IT</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" href="{{route('assignment.index')}}">
                                <i class="fas fa-edit" aria-hidden="true"></i> VIT-IT</a>
                                </li>
                              </ul>
                              </li>

                       @endif
                              

                            @if(auth()->user()->isAdmin())
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('eventType.index')}}">
                                <i class="fas fa-edit" aria-hidden="true"></i>
                                Event Type</a>
                              </li>
                              @endif
                              
                              @if(auth()->user()->isAdmin())
                              <li class="nav-item">
                                <a class="nav-link" href="{{route('user.index')}}">
                                  <i class="fas fa-user" aria-hidden="true"></i>
                                  User</a>
                                </li>
                                @endif
                                
                                @if(auth()->user()->isAdmin())
                                <li class="nav-item">
                                  <a class="nav-link" href="{{route('event.index')}}">
                                    <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                    Event </a>
                                  </li>
                                  @endif
                                  
                                </ul>
                              </nav>
                              <button class="sidebar-minimizer brand-minimizer" type="button"></button>
                            </div>
                            
                            
                            
                            <main class="main">
                              @yield('content')
                              
                              
                            </main>
                            
                          </div>
                        </div>
                        
                        
                        <footer class="app-footer">
                          <div>
                            <a href="https://coreui.io/pro/">CoreUI Pro</a>
                            <span>&copy; 2018 creativeLabs.</span>
                          </div>
                          <div class="ml-auto">
                            <span>Powered by</span>
                            <a href="https://coreui.io/pro/">CoreUI Pro</a>
                          </div>
                        </footer>
                        <!-- CoreUI and necessary plugins-->
                        <script src="{{asset('admin/vendors/jquery/js/jquery.min.js')}}"></script>
                        @yield('script')
                        <script src="{{asset('admin/vendors/popper.js/js/popper.min.js')}}"></script>
                        <script src="{{asset('admin/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
                        <script src="{{asset('admin/vendors/pace-progress/js/pace.min.js')}}"></script>
                        <script src="{{asset('admin/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js')}}"></script>
                        <script src="{{asset('admin/vendors/@coreui/coreui-pro/js/coreui.min.js')}}"></script>
                        <!-- Plugins and scripts required by this view-->
                        <script src="{{asset('admin/vendors/chart.js/js/Chart.min.js')}}"></script>
                        <script src="{{asset('admin/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js')}}"></script>
                        <script src="{{asset('admin/js/main.js')}}"></script>
                        
                        <script src="{{asset('admin/vendors/datatables.net/js/jquery.dataTables.js')}}"></script>
                        <script src="{{asset('admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
                        <script src="{{asset('admin/js/datatables.js')}}"></script>
                        
                      </body>
                      </html>
                      