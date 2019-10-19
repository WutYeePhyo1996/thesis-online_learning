@extends('admin.layout.layout');


@section('content')

<div class="container-fluid">

        <div class="animated fadeIn">

          <a href="{{url('/secureadmin/speakers/create/'.$id)}}" class="btn btn-info btn-ladda" data-style="slide-down">Create New</a> 
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
                    <th>Name</th>
                    <th>Position</th>
                    <th>Class</th>
                    <th>Created at</th>
                    <th>Operation</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($speakers as $speaker)
                  <tr>
                    <td>{{$speaker->name}}</td>
                    <td>{{$speaker->position}}</td>
                  <td>{{$speaker->class->year}}</td>
                    <td>
                      {{$speaker->created_at}}
                    </td>
                    <td>

                    {!! Form::open(array('url' => route('speakers.destroy', $speaker->id),'method' => 'DELETE', 'class'=> '')) !!}
                    @csrf
                    <a href="{{route('speakers.edit', $speaker->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                        
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>         
                    {!! Form::close() !!}
                    </td>

                    <td> <a href="{{url('/secureadmin/audio_lessons/create/'.$speaker->id)}}" class="btn btn-dark">Lecture</a></td>

                  </tr>
                @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  @endsection