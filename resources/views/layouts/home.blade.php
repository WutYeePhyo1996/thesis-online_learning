<!DOCTYPE html>
<html lang="en">
  <head>

  <script src="https://kit.fontawesome.com/yourcode.js"></script>

   <style type="text/css">
     .nav-link{ color:#fff; }
     .img-fluid1{ width:255px;
      height:357px;}
   </style>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href={{ url('images/wytu.png') }} type="image/png" />
    <title>Online Learning for IT Students</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />

    <link href="css/bootstrap.css" rel="stylesheet" />
              <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
              <link href="css/ct-navbar.css" rel="stylesheet" />

              <script src="js/jquery-1.10.2.js"></script>
              <script src="js/bootstrap.js"></script>
              <script src="js/ct-navbar.js"></script>

  </head>


  <body>
    @include('layouts.homenav')

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="banner_inner">
     
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">
                  First online education Website In IT Department
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                  One Step Ahead This Season
                </h2>
                <div>
                  <a href="/about" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
                  <a href="#" class="primary-btn ml-sm-3 ml-0">See Course</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->

    @yield('content')

    <!--================ Start Popular Courses Area =================-->


    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->

    <!--================ End Registration Area =================-->

    <!--================ Start Trainers Area =================-->
    <section class="trainer_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Expert Teachers</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid1" src={{ asset('images/cho.jpeg') }} alt="" / style="width:255px; height:357px; !important">
            </div>
            <div class="meta-text text-sm-center">
              <h4>Daw Cho Cho Myint</h4>
              <p class="designation"> Professor and Head</p>
              <div class="mb-4">
                <p>
                  If you are looking at blank cassettes on the web, you may be
                  very confused at the.
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/kyi.jpeg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Daw Kyi Kyi Win</h4>
                  <p class="designation">Associate Professor</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                      <img class="img-fluid1" src={{ asset('images/hnin.jpeg') }} alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                      <h4>Daw Hnin Yi Aye</h4>
                      <p class="designation">PhD Course @Associate Professor</p>
                      <div class="mb-4">
                        <p>
                          If you are looking at blank cassettes on the web, you may be
                          very confused at the.
                        </p>
                      </div>
                      <div class="align-items-center justify-content-center d-flex">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                        <div class="thumb d-flex justify-content-sm-center">
                          <img class="img-fluid1" src={{ asset('images/khet.jpg') }} alt="" />
                        </div>
                        <div class="meta-text text-sm-center">
                          <h4>Dr. Khin Khat Khat Kyaw</h4>
                          <p class="designation">Associate Professor</p>
                          <div class="mb-4">
                            <p>
                              If you are looking at blank cassettes on the web, you may be
                              very confused at the.
                            </p>
                          </div>
                          <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                            <div class="thumb d-flex justify-content-sm-center">
                              <img class="img-fluid1" src={{ asset('images/may.jpg') }} alt="" />
                            </div>
                            <div class="meta-text text-sm-center">
                              <h4>Dr. May Cho Aye</h4>
                              <p class="designation">Associate Professor</p>
                              <div class="mb-4">
                                <p>
                                  If you are looking at blank cassettes on the web, you may be
                                  very confused at the.
                                </p>
                              </div>
                              <div class="align-items-center justify-content-center d-flex">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter"></i></a>
                                <a href="#"><i class="ti-linkedin"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                                <div class="thumb d-flex justify-content-sm-center">
                                  <img class="img-fluid1" src={{ asset('images/ni.jpg') }} alt="" />
                                </div>
                                <div class="meta-text text-sm-center">
                                  <h4>Daw Ni Ni Win</h4>
                                  <p class="designation">Associate Professor</p>
                                  <div class="mb-4">
                                    <p>
                                      If you are looking at blank cassettes on the web, you may be
                                      very confused at the.
                                    </p>
                                  </div>
                                  <div class="align-items-center justify-content-center d-flex">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-linkedin"></i></a>
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                  </div>
                                </div>
                              </div>

           <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid1" src={{ asset('images/nge.jpg') }} alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Daw Nge</h4>
              <p class="designation">Lecturer</p>
              <div class="mb-4">
                <p>
                  If you are looking at blank cassettes on the web, you may be
                  very confused at the.
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/thu.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Daw Thu Zar Win</h4>
                  <p class="designation">Assistant Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>

        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/phyo.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Daw Phyo Phyo Aung</h4>
                  <p class="designation">Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
           </div>

        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/han.jpeg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Daw Han Myint Shin</h4>
                  <p class="designation">Assistant Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>

             <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/su.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Daw Su Su Tin</h4>
                  <p class="designation">Assistant Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
          </div>

              <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/khu.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>U Zonun Khuma</h4>
                  <p class="designation"> Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/kyu.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Daw Kyu Kyu Than </h4>
                  <p class="designation"> Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/lai.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Daw Lai Yee Myint</h4>
                  <p class="designation"> Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/hnin.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Daw Hnin Myat Mon</h4>
                  <p class="designation"> Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/lawun.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Daw La Wun Nandar Kyaw</h4>
                  <p class="designation"> Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/khaing.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Dr. Khaing Myat Mon</h4>
                  <p class="designation"> Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/suhlaing.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Dr. Su Su Hlaing</h4>
                  <p class="designation"> Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/pyae.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Daw Pyae Ma</h4>
                  <p class="designation"> Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                  <img class="img-fluid1" src={{ asset('images/nandar.jpg') }} alt="" />
                </div>
                <div class="meta-text text-sm-center">
                  <h4>Daw Nandar Linn</h4>
                  <p class="designation">Assistant Lecturer</p>
                  <div class="mb-4">
                    <p>
                      If you are looking at blank cassettes on the web, you may be
                      very confused at the.
                    </p>
                  </div>
                  <div class="align-items-center justify-content-center d-flex">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                  </div>
                </div>
              </div>


        </div>

        </div>

        </div>

        </div>

        </div>

        </div>

        </div>

        </div>

        </div>

        </div>

        </div>

        </div>
      </div>
    </section>
    <!--================ End Trainers Area =================-->

    <!--================ Start Events Area =================-->


    {{-- <div class="events_area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">Upcoming Events</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="img/event/e1.jpg" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">
                  <div class="date"><span>15</span> Jun</div>

                  <div class="time-location">
                    <p>
                      <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                    </p>
                    <p>
                      <span class="ti-location-pin mr-2"></span> Hilton Quebec
                    </p>
                  </div>
                </div>
                <p>
                  One make creepeth man for so bearing their firmament won't
                  fowl meat over seas great
                </p>
                <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="img/event/e2.jpg" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">
                  <div class="date"><span>15</span> Jun</div>

                  <div class="time-location">
                    <p>
                      <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                    </p>
                    <p>
                      <span class="ti-location-pin mr-2"></span> Hilton Quebec
                    </p>
                  </div>
                </div>
                <p>
                  One make creepeth man for so bearing their firmament won't
                  fowl meat over seas great
                </p>
                <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="text-center pt-lg-5 pt-3">
              <a href="#" class="event-link">
                View All Event <img src="img/next.png" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div> --}}


    <!--================ End Events Area =================-->

    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap" style="padding: 0px;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Latest Events</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="testi_slider owl-carousel">
            @foreach($events as $event)
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white bg-primary mb-2" style="max-width: 18rem;">
                        <div class="card-body">
                          <p class="card-text">{{$event->created_at->format('d F Y')}}</p>
                        </div>
                      </div>

                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>{{$event->name}}</h4>
                    <p>
                      {{Str::limit($event->description, 90)}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <!--================ End Testimonial Area =================-->

    <!--================ Start footer Area  =================-->
    @include('layouts.footer')
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
