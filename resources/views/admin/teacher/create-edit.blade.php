@extends('admin.layout.layout');


@section('content')
<div class="row">
        <div class="col-md-10 offset-md-1">
        {{$teacher}}
    @if(isset($teacher->id))
    <form action="{{route('teacher.update', $teacher->id)}}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
    @else
    <form action="{{route('teacher.store')}}" method="post" enctype="multipart/form-data">
        
            @csrf
    @endif
        
                <div class="card">
                        <div class="card-header">
                          <strong>Teacher Detail</strong> Form</div>
                        <div class="card-body">
                            
                            <div class="form-group">
                                 <label for="name">Name</label>
                                    <input class="form-control" id="" type="text" name="name" placeholder="Enter Teacher Name" autocomplete="name" value="{{old('name', $teacher->name)}}">
                                 <small>   <span class="help-block">Please Enter Teacher Name</span></small>
                            </div>
                            <div class="form-group">
                                 <label for="position">Position</label>
                                    <input class="form-control" id="" type="text" name="position" placeholder="Enter Position" autocomplete="position" value="{{old('position', $teacher->position)}}">
                                    <span class="help-block">Please Enter Position</span>
                            </div>
                           
                            </div>
                            <div class="form-group">
                                <label for="name">File</label>
                                <input type="file" name="file" class="form-control">
                              </div>
                        </div>
                        <div class="card-footer">
                          <button class="btn btn-sm btn-primary" type="submit">
                            <i class="fa fa-dot-circle-o"></i> Submit</button>
                          <button class="btn btn-sm btn-danger" type="reset">
                            <i class="fa fa-ban"></i> Reset</button>
                        </div>
                      </div>
            </form>
        </div>
        <!-- /.col-->
      </div>
@endsection