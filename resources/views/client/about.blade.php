{{-- @extends('layouts.pages')


@section('content')


<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="banner_content text-center">
            <h2>Contact Us</h2>
            <div class="page_link">
              <a href={{url('/')}}>Home</a>
              <a href={{url('/about')}}>Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

  @include('layouts.feature')

@endsection --}}



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
                <a href={{url('/')}}>Home</a>
                <a href={{url('/about')}}>About Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  @include('layouts.feature')

  @endsection