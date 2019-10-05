@extends('admin.layout.layout');


@section('content')
<div class="container-fluid">
        <a class="btn btn-success mb-2" href="{{route('assignment.create')}}">Create New</a>
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
                    <th>Assignment</th>
                    <th>Created_at</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($assignments as $assignment)
                  <tr>
                    <td>
                    <a href="{{asset('/storage/assignment/'.$assignment->file)}}">{{$assignment->file}}</a>
                  
                    </td>
                    
                    
                    <td>
                     {{$assignment->created_at}}
                    </td>
                    <td>
                            {!! Form::open(array('url' => route('audio_assignments.destroy', $assignment->id),'method' => 'DELETE', 'class'=> '')) !!}
                            @csrf
                            <a href="{{route('assignments.edit', $assignment->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                
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