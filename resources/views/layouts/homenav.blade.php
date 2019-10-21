<!--================ Start Header Menu Area =================-->
    <style>
    .header_area .navbar .nav .nav-item {
    margin-right: 40px;
}
    
    </style>


<header class="header_area">
        <div class="main_menu" style="background-color:#002347;">
          <div class="search_input" id="search_input_box">
            <div class="container">
              <form class="d-flex justify-content-between" method="post" action="/thesis/search">
                @csrf
                <input
                  type="text"
                  class="form-control"
                  id="search_input"
                  placeholder="Search Here"
                />
                <button type="submit" class="btn"></button>
                <span
                  class="ti-close"
                  id="close_search"
                  title="Close Search"
                ></span>
              </form>
            </div>
          </div>

          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <a class="navbar-brand logo_h" href={{url('/')}}
                ><img src={{ asset('images/wytu.png') }} alt="" width="60px" height="75px"
              /></a>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div
                class="collapse navbar-collapse offset"
                id="navbarSupportedContent"
              >
                <ul class="nav navbar-nav menu_nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href={{url('/')}} style="color:yellow;">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href={{url('/about')}} style="color:yellow;">About</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                      <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false" style="color:yellow;"
                        >Assignments</a
                      >
                      <ul class="dropdown-menu"  style="background-color:#002347;">
                        @foreach ($classes as $class)                            
                      
                        <li class="nav-item">
                          <a
                          class="nav-link" href={{url('/secureadmin/login')}} style="color:yellow;">{{$class->year}}</a> 
                        </li>
                        @endforeach
                      </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                      <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false" style="color:yellow;"
                        >Lecture</a
                      >
                      <ul class="dropdown-menu"  style="background-color:#002347;">
                        <li class="nav-item">
                          <a
                          class="nav-link" href={{url('/1beit')}}  style="color:yellow;">1BE-IT</a>                    

                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/2beit')}}  style="color:yellow;"> 2BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/3beit')}}  style="color:yellow;"> 3BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/4beit')}}  style="color:yellow;"> 4BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/5beit')}}  style="color:yellow;"> 5BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/6beit')}}  style="color:yellow;"> VIT-IT</a>
                        </li>
                      
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href={{url('/event')}} style="color:yellow;">News & Events</a>
                    </li>

                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href={{url('/thesis_link')}} style="color:yellow;">Thesis Title</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href={{url('/contact')}} style="color:yellow;">Contact</a>
                  </li>

                  <li class="nav-item">
                  <a href="{{url('/secureadmin/')}}" class="nav-link" style="color:yellow;"><i class="fa fa-fw fa-user ml-5" style="font-size:24px; color:yellow;" ></i> Login</a>
                  </li>       

                  <li class="nav-item">
                    <a href="#" class="nav-link search" id="search" style="color:yellow;">
                      <i class="ti-search"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--================ End Header Menu Area =================-->
