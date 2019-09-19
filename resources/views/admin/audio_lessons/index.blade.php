@extends('admin.layout.layout');


@section('content')
<div class="container-fluid">
        <a class="btn btn-success mb-2" href="{{route('audio_lessons.create')}}">Create New</a>
        <div class="animated fadeIn">
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
                    <th>Speaker</th>
                    <th>Postion</th>
                    <th>File</th>
                    <th>Created_at</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($lessons as $lesson)
                  <tr>
                    <td>{{$lesson->speaker->name}}</td>
                    <td>{{$lesson->speaker->position}}</td>
                    <td>
                    <a href="{{asset('/storage/audios/'. $lesson->file)}}">{{$lesson->file}}</a>
                    </td>
                    
                    
                    <td>
                     {{$lesson->created_at}}
                    </td>
                    <td>
                            {!! Form::open(array('url' => route('audio_lessons.destroy', $lesson->id),'method' => 'DELETE', 'class'=> '')) !!}
                            @csrf
                            <a href="{{route('audio_lessons.edit', $lesson->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                
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