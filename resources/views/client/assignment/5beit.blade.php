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
              <h2>Lecture</h2>
              <div class="page_link">
                <a href="{{url('/')}}">Home</a>
                <a href="{{url('/assignment')}}">5BE-IT</a>
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
      <div class="row h_blog_item">
        </div>
        <div class="col-sm-12">
          <div class="h_blog_text">
            <div class="h_blog_text_inner left right">
              <h4 class="text-center">5BE-IT Assignment Detail</h4><br>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End About Area =================-->


@endsection
