<!--================ Start Header Menu Area =================-->
<header class="header_area white-header">

<style>
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu .dropdown-menu {
    top:0;
    left:100%;
}
</style>

<script type="text/javascript">
$('.dropdown-submenu .dropdown-toggle').on("click", function(e) {
    e.stopPropagation();
    e.preventDefault();
    $(this).next('.dropdown-menu').toggle();
});
</script>


        <div class="main_menu">
          <div class="search_input" id="search_input_box">
            <div class="container">
              <form class="d-flex justify-content-between" method="post" action="/thesis/search">
                @csrf
                <input
                  type="text"
                  class="form-control"
                  id="search_input"
                  name="keyword"
                  placeholder="Search Here!!!"
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
                    <a class="nav-link" href={{url('/')}}>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href={{url('/about')}}>About</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                      <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Assignments</a
                      >
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a
                          class="nav-link" href={{url('/1beit')}}>1BE-IT</a>                    

                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/2beit')}}> 2BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/3beit')}}> 3BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/4beit')}}> 4BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/5beit')}}> 5BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/6beit')}}> VIT-IT</a>
                        </li>
                      
                      </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                      <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Lecture</a
                      >
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a
                          class="nav-link" href={{url('/1beit')}}>1BE-IT</a>                    

                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/2beit')}}> 2BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/3beit')}}> 3BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/4beit')}}> 4BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/5beit')}}> 5BE-IT</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href={{url('/6beit')}}> VIT-IT</a>
                        </li>
                      
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href={{url('/event')}}>News & Events</a>
                    </li>

                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href={{url('/thesis_link')}}>Thesis Title</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href={{url('/contact')}}>Contact</a>
                  </li>

                  <li class="nav-item">
                  <a href="{{url('/secureadmin/')}}" class="nav-link"><i class="fa fa-fw fa-user ml-5" style="font-size:24px;" ></i> Login</a>
                  </li>       

                  <li class="nav-item">
                    <a href="#" class="nav-link search" id="search">
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
