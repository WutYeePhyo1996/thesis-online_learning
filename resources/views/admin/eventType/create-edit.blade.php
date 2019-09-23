@extends('admin.layout.layout');

@section('content')
<div class="row">
        <div class="col-md-10 offset-md-1">
            @if(isset($eventType->id))
            <form action="{{route('eventType.update', $eventType->id)}}" method="post">
                    @method('patch')
            @else
            <form action="{{route('eventType.store')}}" method="post">


            @endif
            @csrf


                <div class="card">
                        <div class="card-header">
                          <strong>Event Type</strong> Form</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                   <input class="form-control" id="name" type="text" name="name" placeholder="Enter Event Type Name" autocomplete="off" value="{{old('name', $eventType->name)}}">
                                <!-- <small>   <span class="help-block">Please Enter Teacher Name</span></small> -->
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
