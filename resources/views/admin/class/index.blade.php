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
                      <th>id</th>
                    <th>Class</th>
                    {{-- <th>Created at</th> --}}
                  </tr>
                </thead>
                <tbody>
                @foreach($classes as $class)
                  <tr>
                  <td>{{$class->id}}</td>
                    <td>{{$class->year}}</td>
                    {{-- <td>
                      {{$class->created_at}}
                    </td> --}}
                    </td>

                    <td> <a href="{{url('/secureadmin/speakers/create/'.$class->id)}}" class="btn btn-dark">Speaker</a></td>
                  
                  </tr>
                @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  @endsection
