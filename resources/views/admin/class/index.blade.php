@extends('admin.layout.layout');


@section('content')

<div class="container-fluid">

        <div class="animated fadeIn">
                {{-- <a class="btn btn-success mb-2" href="{{route('classs.create')}}">Create New</a> --}}

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
                    <th>Class</th>
                    <th>Created at</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($classes as $class)
                  <tr>
                    <td>{{$class->year}}</td>
                    <td>
                      {{$class->created_at}}
                    </td>

                    <td> <a href="{{url('/secureadmin/audio_lessons/'.$class->id)}}" class="btn btn-dark">Lecture</a></td>
                    {{-- <td>

                    {!! Form::open(array('url' => route('classs.destroy', $class->id),'method' => 'DELETE', 'class'=> '')) !!}
                    @csrf
                    <a href="{{route('classs.edit', $class->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                        
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>         
                    {!! Form::close() !!}
                    </td> --}}
                  </tr>
                @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  @endsection