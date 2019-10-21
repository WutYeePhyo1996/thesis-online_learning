@extends('admin.layout.layout');


@section('content')

<div class="container-fluid">

        <div class="animated fadeIn">
                <a class="btn btn-success mb-2" href="{{route('event.create')}}">Create New</a>

          <div class="card">
            <div class="card-header">
              <i class="fa fa-edit"></i> DataTables
              <div class="card-header-actions">
                <a class="card-header-action" href="https://datatables.net" target="_blank">
                  <small class="text-muted">docs</small>
                </a>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <tr>
                    <th>Event Type</th>
                    <th>Event</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Operation</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                  <tr>
                  <td>{{$event->eventType->name}}</td>
                    <td>{{$event->name}}</td>
                  <td>{{$event->description}}</td>
                    <td>
                      {{$event->created_at}}
                    </td>
                    <td>
                      {{-- <a class="btn btn-success" href="#">
                        <i class="fa fa-search-plus"></i>
                      </a> --}}
                    {{-- <a class="btn btn-info" href="{{route('speakers.edit', $speaker->id)}}">
                        <i class="fa fa-edit"></i>
                      </a>
                    <form action="{{route('speakers.destroy', $speaker->id)}}" method="post">
                        @method('destroy')
                        @csrf
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form> --}}

                    {!! Form::open(array('url' => route('event.destroy', $event->id),'method' => 'DELETE', 'class'=> '')) !!}
                    @csrf
                    <a href="{{route('event.edit', $event->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>

                    <a href="{{url('/secureadmin/event_images/'.$event->id)}}" class="btn btn-dark">Event Image</a>

                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                    {!! Form::close() !!}
                    </td>
                  </tr>
                @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  @endsection
