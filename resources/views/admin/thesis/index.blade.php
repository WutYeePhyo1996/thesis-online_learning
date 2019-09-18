@extends('admin.layout.layout');


@section('content')
<div class="container-fluid">
  <div class="animated fadeIn">
    <a class="btn btn-success mb-2" href="{{route('thesis.create')}}">Create New</a>
    <div class="card">
      <div class="card-header">
        <i class="fa fa-edit"></i> Thesis
      </div>
      <div class="card-body">
        
        <table class="table table-striped table-bordered datatable">
          <thead>
            <tr>
              <th>Title</th>
              <th>Author</th>
              <th>file</th>
              <th>Academic Year</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($all_thesis as $thesis)
            
            
            <tr>
              <td>{{ $thesis->title }}</td>
              <td>{{ $thesis->author }}</td>
              <td><a href="{{ $thesis->filePath() }}">{{ $thesis->file }}</a></td>
              <td>
                <span class="badge badge-dark">{{ $thesis->academic_year }}</span>
              </td>
              <td>
                <a class="btn btn-success" href="#">
                  <i class="fa fa-info"></i>
                </a>
                <a class="btn btn-info" href="{{route('thesis.edit', $thesis->id)}}">
                  <i class="fa fa-edit"></i>
                </a>
                {!! Form::open(array('url' => route('thesis.destroy', $thesis->id),'method' => 'DELETE', 'class'=> '')) !!}
                @csrf
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