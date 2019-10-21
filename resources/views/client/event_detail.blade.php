@extends('layouts.pages')


@section('content')



<!--================Home Banner Area =================-->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
    {{-- <div class="container">
        <div class="row" >
        <div class="col-12 mb-2">

            <div class="card" >
                <div class="card-body">
                <h5 class="card-title text-center">{{$event->name}}</h5>
                <p class="card-text">Description : {{$event->description}} </p>
                @foreach($event->event_imgs as $event_img)
                <div class="col-md-4">
                  <img class="" src="{{asset('/storage/event_image/'.$event_img->file)}}" alt="..." width="300px" height="300px" style="margin-bottom: 20px">
              </div>
              @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>

    </div> --}}

    <div class="elh-section elh-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="elh-post-single">
                        <article class="elh-post style-4">

                            <h4 class="mm_text">{{$event->name}}
                            </h4> <br>

                            <div class="container">
                                <div class="row">
                                    @foreach($event->event_imgs as $event_img)
                                    <div class="col-md-4">
                                        <img class="" src="{{asset('/storage/event_image/'.$event_img->file)}}" alt="..." width="300px" height="300px" style="margin-bottom: 20px">
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="elh-post-body">
                                {{-- <p class="mm_text">{{$event->description}}</p> --}}
                                 <div class="elh-post-metas">
                                        <li><i class="fas fa-calendar-alt"></i>
                                        <span>{{ $event->created_at->format('d F Y') }}</span>
                                     &nbsp;&nbsp;&nbsp;&nbsp;

                                    {{-- <a class="elh-comment-count" href="#"><i class="fas fa-comments"></i> 25</a>&nbsp;&nbsp;&nbsp;&nbsp; --}}
                                    <span class="elh-post-categories">
                                        <i class="fas fa-folder-open"></i>
                                   <span>{{$event->eventType->name}}
                                    </span>
                                </li>
                                </div>
                                 <div class="elh-post-entry">
                                     <p class="mm_text">
                                        {{$event->description}}
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                                </div>


                                <!-- <div class="elh-post-tags">
                                    <i class="fa fa-tags"></i>
                                    <a href="#">Education</a>,
                                    <a href="#">Learning</a>,
                                    <a href="#">Student</a>,
                                    <a href="#">USA</a>
                                </div> -->
                                <div class="elh-post-social-share">
                                    <label>Share in Social&nbsp&nbsp</label>
                                    <a class="elh-share-facebook" href="https://www.facebook.com/groups/356731037717402/"><i class="fab fa-facebook"></i> Facebook</a>&nbsp&nbsp
                                    <a class="elh-share-messenger" href="#"><i class="fab fa-facebook-messenger"></i> Messenger</a>
                                    {{-- <a class="elh-share-google-plus" href="#"><i class="fab fa-google-plus"></i> Google Plus</a>
                                    <a class="elh-share-linkedin" href="#"><i class="fab fa-linkedin"></i> Linkedin</a> --}}
                                </div>
                            </div>
                        </article>
                        <!-- Author Box -->

                        <!-- Author Box End -->

                        <!-- Related News -->

                        <!-- Related News End -->

                        <!-- Given Comment -->

                        <!-- Given Comment End -->


                        <!-- Comment Form End -->

                </div>

            </div>
        </div>
    </div>

  </section>
  <!--================ End About Area =================-->
@endsection
