@extends('admin.layout.layout')
@section('content')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{url('/secureadmin/events')}}">Event</a>
  </li>
  <li class="breadcrumb-item">
    <a href="{{url('/secureadmin/event_images/'. $id)}}">Event Image</a>
  </li>
</ol>
    <div class="row m-1" id="app">
        <div class="col-12">
            <div class="card">
                <b-alert show></b-alert>
                <div class="card-header">
                  <i class="icon-note"></i> Event Images List


                </div>
                <div class="card-body">
                    <div class="col-md-3 py-3">
                        <a href="{{url('/secureadmin/event_images/create/'.$id)}}" class="btn btn-info btn-ladda" data-style="slide-down">Create New</a>
                    </div>
                    <div class="col-12">

                            <table class="table table-striped table-bordered datatable dataTable no-footer" id="datatable">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Created At</th>
                                  <th>Event Image</th>
                                  <th>Operation</th>
                                </tr>
                              </thead>
                              <tbody>

                                @foreach ($event_images as $event_image)       <tr>
                                <td>{{ $event_image->id}}</td>
                                <td>{{$event_image->created_at}}</td>
                                <td>
                                    <i class="icons mr-2 cui-file"></i><a href="{{asset('/storage/event_image/'.$event_image->file)}}">{{$event_image->file}}</a>
                                </td>
                              
                                <td>
                                  <form action="{{url('secureadmin/event_images/'.$event_image->id)}}" method="POST">
                                    @csrf
                                  {{-- <a href="{{url('secureadmin/event_images/1')}}" class="btn btn-success">Detail</a> --}}
                                  @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                  </form>
                                </td>
                              </tr>
                              @endforeach

                              </tbody>
                            </table>
                      </div>
                </div>
              </div>
        </div>

    </div>


@endsection
