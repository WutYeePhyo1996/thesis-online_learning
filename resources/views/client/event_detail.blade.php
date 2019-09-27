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
              <h2>Thesis</h2>
              <div class="page_link">
                <a href="{{url('/')}}">Home</a>
                <a href="{{url('/event_detail')}}">News & Events Detail</a>
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
        <div class="row" >

        <div class="col-12 mb-2">

            <div class="card" >
                <div class="card-body">
                <h5 class="card-title text-center">{{$event->name}}</h5>
                <p class="card-text">Description : {{$event->description}} </p>

                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
  </section>
  <!--================ End About Area =================-->
@endsection
