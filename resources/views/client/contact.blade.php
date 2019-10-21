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
              <h2>Contact Us</h2>
              <div class="page_link">
                <a href={{url('/')}}>Home</a>
                <a href={{url('/contact')}}>Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

<section class="contact_area section_gap">
    <div class="container">
     
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.1610891316172!2d96.00708641486912!3d16.867923988391944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1bf1c49ac518d%3A0xf20029d58b338b3a!2sWest%20Yangon%20Technological%20University!5e0!3m2!1sen!2smm!4v1568797878325!5m2!1sen!2smm" width="992" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        <style>
            .googlemap {
        position: relative;
        padding-bottom: 75%; 
        height: 0;
        overflow: hidden;
}

.googlemap iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
}
         </style>

      <div class="row">
        <div class="col-lg-8">
          <div class="contact_info">
            <div class="info_item">
              <i class="ti-home"></i>
              <h6>WYTU (IT Department)</h6>
              <p>Hlaing Thar Yar, Yangon</p>
            </div>
            <div class="info_item">
              <i class="ti-headphone"></i>
              <h6><a href="/">01 710 705</a></h6>
              <p>Mon to Fri 9am to 4 pm</p>
            </div>

            <div class="info_item">
              <i class="ti-email"></i>
              <h6><a href="http://wytu.edu.mm/">wytu.edu.mm</a></h6>
              <p>Send us your query anytime!</p>
            </div>
          </div>

          <div class="row">
            </div>
            @if(session()->has('success-msg'))
            <div style="text-align:center; font-size: 20px; color:white; background-color:khaki">
                <p>Successfully sent message !</p>
            </div>
        @endif
          </div>
     
        <div class="col-lg-9 pt-3">
           <form action="{{route('feedback.store')}}" method="post"  method="post" class="row contact_form" aria-autocomplete="off">
           @csrf
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Name</label>
                <input name="name" class="form-control" id="name" type="text" placeholder="Enter Your Name" required>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input name="email" class="form-control" id="email" type="email" placeholder="Enter Your email" required>
              </div>

              <div class="form-group">
                <label for="subject">Subject</label>
                <input name="subject" class="form-control" id="subject" type="text" placeholder="Enter Your subject" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <textarea name="message" placeholder="Enter message" class="form-control" id="message"></textarea>
              </div>
            </div>

            <div class="col-md-12 text-right">
              <button type="submit" value="submit" class="btn primary-btn">
              Send Message
              </button>
            </div>

          </form>

        </div>

      </div>
    </div>
  </section>

  @endsection
