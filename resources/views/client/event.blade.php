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
              <h2>News & Events</h2>
              <div class="page_link">
                <a href="{{url('/')}}">Home</a>
                <a href="{{url('/event')}}">News & Events</a>
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

    @foreach($events as $event)

        <div class="col-6 mb-2">

            <div class="card" >
                <div class="card-body">
                <h5 class="card-title">{{$event->name}}</h5>
                <p class="card-text">{{Str::limit($event->description, 90)}}</p>

                {{-- <p class="card-text">Authors : {{$event->author}} </p>
                <p class="card-text">downloads: <a href="{{ $event->filePath() }}">{{ $event->file }}</a> </p> --}}


                </div>
            </div>
        </div>
    @endforeach
    </div>
    </div>

    </div>
  </section>
  <!--================ End About Area =================-->

@endsection
