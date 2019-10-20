@extends('admin.layout.layout');


@section('content')
<div class="row">
        <div class="col-md-10 offset-md-1">
    @if(isset($speaker->id))
    <form action="{{route('speakers.update', $speaker->id)}}" method="post">
            @method('patch')
            @csrf
    @else
    <form action="{{route('speakers.store')}}" method="post">

            @csrf
    @endif

                <div class="card">
                        <div class="card-header">
                          <strong>Speaker</strong> Form</div>
                        <div class="card-body">
                            <fieldset class="form-group col-12">
                                <div class="form-group">
                                        <label for="class_id">Class </label>
                                        <input type="hidden" name="class_id" value="{{$class->id}}">
                                        <input type="text" class="form-control" value="{{$class->year}}" readonly>
                                        <span class="invalid-feedback">{{$errors->first('class_id')}}</span>
                                    </div>
                            </fieldset>

                            <div class="form-group">
                              <label for="nf-email">Name</label>
                            <input class="form-control" id="" type="text" name="name" placeholder="Enter Spaker Name" autocomplete="email" value="{{old('name', $speaker->name)}}">
                              <span class="help-block">Please enter Speaker Name</span>
                            </div>
                            <div class="form-group">
                              <label for="nf-password">Position</label>
                            <input class="form-control" id="" type="text" name="position" placeholder="speaker postion.." autocomplete="" value="{{old('position', $speaker->position)}}">
                              <span class="help-block">Please enter speaker position</span>
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
