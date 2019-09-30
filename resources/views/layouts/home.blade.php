<!DOCTYPE html>
<html lang="en">
  <head>

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
                  <a href="#" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
                  <a href="#" class="primary-btn ml-sm-3 ml-0">see course</a>
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


    {{-- <div class="popular_courses">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Popular Courses</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/courses/c1.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="price">$25</span>
                  <span class="tag mb-4 d-inline-block">design</span>
                  <h4 class="mb-3">
                    <a href="course-details.html">Custom Product Design</a>
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <img src="img/courses/author1.png" alt="" />
                      <span class="d-inline-block ml-2">Cameron</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/courses/c2.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="price">$25</span>
                  <span class="tag mb-4 d-inline-block">design</span>
                  <h4 class="mb-3">
                    <a href="course-details.html">Social Media Network</a>
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <img src="img/courses/author2.png" alt="" />
                      <span class="d-inline-block ml-2">Cameron</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/courses/c3.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="price">$25</span>
                  <span class="tag mb-4 d-inline-block">design</span>
                  <h4 class="mb-3">
                    <a href="course-details.html">Computer Engineering</a>
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <img src="img/courses/author3.png" alt="" />
                      <span class="d-inline-block ml-2">Cameron</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->


    {{-- <div class="section_gap registration_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3">Register Now</h1>
                <p>
                  There is a moment in the life of any aspiring astronomer that
                  it is time to buy that first telescope. It’s exciting to think
                  about setting up your own viewing station.
                </p>
              </div>
              <div class="col clockinner1 clockinner">
                <h1 class="days">150</h1>
                <span class="smalltext">Days</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="hours">23</h1>
                <span class="smalltext">Hours</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="minutes">47</h1>
                <span class="smalltext">Mins</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="seconds">59</h1>
                <span class="smalltext">Secs</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
              <h3>Courses for Free</h3>
              <p>It is high time for learning</p>
              <form
                class="form_area"
                id="myForm"
                action="mail.html"
                method="post"
              >
                <div class="row">
                  <div class="col-lg-12 form_group">
                    <input
                      name="name"
                      placeholder="Your Name"
                      required=""
                      type="text"
                    />
                    <input
                      name="name"
                      placeholder="Your Phone Number"
                      required=""
                      type="tel"
                    />
                    <input
                      name="email"
                      placeholder="Your Email Address"
                      pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                      required=""
                      type="email"
                    />
                  </div>
                  <div class="col-lg-12 text-center">
                    <button class="primary-btn">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> --}}


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
          <!-- <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src={{ asset('images/hnin.jpeg') }} alt="" width="255px" height="216.2px" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Dr.Cho Cho Myint</h4>
              <p class="designation">Professor and Head Of Department (IT)</p>
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
            </div> -->



           <!-- <div class="col-lg-3 col-md-6 col-sm-12 single-trainer"> -->
          {{-- @foreach($teacher as $teach)
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="{{asset('/storage/teachers/'. $teach->file)}}" alt=""/>
            </div>
            <div class="meta-text text-sm-center">
              <h4>{{($teach->name)}}</h4>
              <p class="designation">{{($teach->position)}}</p>
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
          @endforeach   --}}

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
              <h2 class="mb-3">Video Lessons</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="testi_slider owl-carousel">
            <!-- <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src={{ asset('images/cho.jpeg') }} alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Dr. Cho Cho Myint</h4>
                    <h5><a href="/">Video Title</a></h5>
                    <p>
                      Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from
                    </p>
                  </div>
                </div>
              </div>
            </div> -->
            @foreach($events as $event)
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src={{ asset('images/kyi.jpeg') }} alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>{{$event->name}}</h4>
                    <h5><a href="/">Video Title</a></h5>
                    <p>
                      <!-- Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from -->
                      {{$event->description}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <!-- <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                <img src={{ asset('images/hnin.jpeg') }} alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Daw Hnin Yi Aye</h4>
                    <h5><a href="/">Video Title</a>
                    <p>
                      Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                <img src={{ asset('images/khet.jpg') }} alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Dr. Khin Khat Khat Kyaw</h4>
                    <h5><a href="/">Video Title</a></h5>
                    <p>
                      Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                <img src={{ asset('images/may.jpg') }} alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Dr. May Cho Aye</h4>
                    <h5><a href="/">Video Title</a></h5>
                    <p>
                      Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                <img src={{ asset('images/ni.jpg') }} alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Daw Ni Ni Win</h4>
                    <h5><a href="/">Video Title</a></h5>
                    <p>
                      Him, made can't called over won't there on divide there
                      male fish beast own his day third seed sixth seas unto.
                      Saw from
                    </p>
                  </div>
                </div>
              </div>
            </div> -->
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
