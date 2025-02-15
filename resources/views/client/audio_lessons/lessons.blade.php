@extends('layouts.pages')


@section('content')



<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="banner_content text-center">
              <h2>About Us</h2>
              <div class="page_link">
                <a href="index.html">Home</a>
                <a href="about-us.html">About Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================ Start About Area =================-->
  <section class="about_area section_gap">
    <div class="container">
        <div class="row">
    @foreach($speaker->lessons as $lesson)
       
        <div class="col-3 mr-3">

            <div class="card" >
                <div class="card-body">
                <h5 class="card-title">{{$lesson->speaker->name}}</h5>
                <h5 class="card-title">File :{{$lesson->file}}</h5>

                <p class="card-text">Position : {{$lesson->speaker->position}} </p>
                <audio controls style="width: 12rem;">
                        <source src="{{asset('/storage/audios/'. $lesson->file)}}" type="audio/mp3">
                      </audio> 

                      <a href="{{asset('/storage/audios/'. $lesson->file)}}" download>Download</a>
                </div>
            </div>
        </div>
    @endforeach
        
    </div>
    </div>

    </div>
  </section>
  <!--================ End About Area =================-->

<section class="feature_area section_gap_top title-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3 text-white">Information Technology Department</h2>
            <p>
              Replenish man have thing gathering lights yielding shall you
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single_feature">
            <div class="icon"><span class="flaticon-student"></span></div>
            <div class="desc">
              <h4 class="mt-3 mb-2">Scholarship Facility</h4>
              <p>
                One make creepeth, man bearing theira firmament won't great
                heaven
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single_feature">
            <div class="icon"><span class="flaticon-book"></span></div>
            <div class="desc">
              <h4 class="mt-3 mb-2">Sell Online Course</h4>
              <p>
                One make creepeth, man bearing theira firmament won't great
                heaven
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single_feature">
            <div class="icon"><span class="flaticon-earth"></span></div>
            <div class="desc">
              <h4 class="mt-3 mb-2">Global Certification</h4>
              <p>
                One make creepeth, man bearing theira firmament won't great
                heaven
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
