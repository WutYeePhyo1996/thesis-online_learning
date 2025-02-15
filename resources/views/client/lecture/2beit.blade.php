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
                <a href="{{url('/2beit')}}">2BE-IT</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================ Start About Area =================-->
<style>
tr, td, th{ border:solid 1px gray;}
</style>

 <section class="about_area section_gap">
    <div class="container">
      <div class="row h_blog_item">
        </div>
        <div class="col-sm-12">
          <div class="h_blog_text">
            <div class="h_blog_text_inner left right">
              <h4 class="text-center">2BE-IT Course Detail</h4><br>
                <table class="table table-striped">
                    <thead>
                        <tr >
                        <th scope="col">Day/Time</th>
                        <th scope="col">9:0 - 9:50</th>
                        <th scope="col">9:55 - 10:45</th>
                        <th scope="col">10:50 - 11:40</th>
                        <th scope="col">Lunch Break (11:40 - 12:40) </th>
                        <th scope="col">12:4 - 1:30</th>
                        <th scope="col">1:35 - 2:25</th>
                        <th scope="col">2:30 - 3:20</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                        <th scope="row">Monday</th>
                        <td colspan="3" class="text-center">NPM</td>
                        <td></td>
                        <td colspan="3" class="text-center">Wireless</td>
                        </tr>

                        <tr>
                        <th scope="row">Tuesday</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                         <td></td>
                        </tr>

                        <tr>
                        <th scope="row">Wednesday</th>
                        <td colspan="3" class="text-center">HSS</td>
                        <td></td>
                        <td colspan="3" class="text-center">PM</td>
                        </tr>

                        <tr>
                        <th scope="row">Thursday</th>
                        <td></td>
                        <td colspan="2" class="text-center">PM</td>
                        <td></td>
                        <td colspan="3" class="text-center">
                            HSS
                        </td>
                        </tr>

                        <tr>
                        <th scope="row">Friday</th>
                        <td></td>
                        <td colspan="2" class="text-center">Wireless</td>
                        <td></td>
                        <td colspan="3" class="text-center">
                            NP
                        </td>
                        </tr>

                    </tbody>
                </table>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="testi_slider owl-carousel">
          @foreach($audios as $audio)
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white bg-primary mb-2" style="max-width: 18rem;">
                        <div class="card-body">
                          <p class="card-text"> {{$audio->created_at->format('d F Y')}}</p>
                        </div>
                      </div>

                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>  <a href="{{asset('/storage/audios/'.$audio->file)}}">{{$audio->file}}</a>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--================ End About Area =================-->


@endsection
