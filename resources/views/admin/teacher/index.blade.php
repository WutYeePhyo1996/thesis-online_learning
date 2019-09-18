@extends('admin.layout.layout');


@section('content')
<div class="container-fluid">
        <a class="btn btn-success mb-2" href="{{route('teacher.create')}}">Create New</a>
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
                    <th>teacher</th>
                    <th>Postion</th>
                    <!-- <th>Description</th> -->
                    <th>File</th>
                    <th>Created_at</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                  <tr>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->position}}</td>
                    <td>
                    <a href="{{asset('/storage/teachers/'. $teacher->file)}}">{{$teacher->file}}</a>
                    </td>
                    
                    
                    <td>
                      <span class="badge badge-dark">Inactive</span>
                    </td>
                    <td>
                            {!! Form::open(array('url' => route('teacher.destroy', $teacher->id),'method' => 'DELETE', 'class'=> '')) !!}
                            @csrf
                            <a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                
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