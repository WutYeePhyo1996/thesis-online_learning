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

    </ul>
    <ul class="nav navbar-nav ml-auto">

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
          <a class="nav-link" href="{{route('thesis.index')}}">
            <i class="fas fa-book mr-2"></i>Thesis</a>
          </li>
          @else




          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon fa fa-code"></i> Assignment </a>
              <ul class="nav-dropdown-items nav-border" style="background-color:#303F42;">
                @if(auth()->user()->isTeacher())
                <li class="nav-item">
                  <a class="nav-link" href="/secureadmin/assignment/showByClass/1">
                    <i class="nav-icon icon-user"></i> 1-BEIT</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="/secureadmin/assignment/showByClass/2">
                    <i class="nav-icon icon-user"></i> 2-BEIT</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="/secureadmin/assignment/showByClass/3">
                    <i class="nav-icon icon-user"></i> 3-BEIT</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="/secureadmin/assignment/showByClass/4">
                    <i class="nav-icon icon-user"></i> 4-BEIT</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="/secureadmin/assignment/showByClass/5">
                    <i class="nav-icon icon-user"></i> 5-BEIT</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="/secureadmin/assignment/showByClass/6">
                    <i class="nav-icon icon-user"></i> 6-BEIT</a>
                  </li>
                  @endif

                @if(auth()->user()->isStudent())
                @foreach (\App\Classes::all() as $item)
                @if(auth()->user()->$class->id === $item->id)
                <li class="nav-item">
                  <a class="nav-link" href="/secureadmin/assignment/showByClass/{{ $item->id }}">
                    <i class="nav-icon icon-user"></i> {{ $item->year }} </a>
                  </li>
                  @endif
                  @endforeach
                  @endif



                </ul>
              </li>
              @endif


              @if(auth()->user()->isAdmin())
              <li class="nav-item">
                <a class="nav-link" href="{{route('user.index')}}">
                  <i class="fas fa-user mr-2" aria-hidden="true"></i>
                  User</a>
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
                    <a class="nav-link" href="{{route('event.index')}}">
                      <i class="fas fa-calendar-alt mr-2" aria-hidden="true"></i>
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
