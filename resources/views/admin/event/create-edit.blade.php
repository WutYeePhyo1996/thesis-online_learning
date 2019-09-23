@extends('admin.layout.layout');

@section('content')
<div class="row">
        <div class="col-md-10 offset-md-1">
            @if(isset($event->id))
            <form action="{{route('event.update', $event->id)}}" method="post">
                    @method('patch')
            @else
            <form action="{{route('event.store')}}" method="post">


            @endif
            @csrf


                <div class="card">
                        <div class="card-header">
                          <strong>Event</strong> Form</div>
                        <div class="card-body">

                                <div class="form-group">
                                        <label for="eventType_id">Event Type</label>
                                        <select name="eventType_id" id="eventType_id" class="form-control">
                                          @foreach($eventTypes as $eventType)
                                          <option value="{{$eventType->id}}" @if($eventType->id == old('eventType_id', $event->eventType_id)) selected @endif>
                                            {{$eventType->name}}
                                          </option>

                                          @endforeach
                                        </select>
                                      </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                   <input class="form-control  @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Enter Event Name" autocomplete="off" value="{{old('name', $event->name)}}">
                                   <span class="invalid-feedback">{{$errors->first('description')}}</span>
                           </div>

                           <div class="form-group">
                                <label for="name">Description</label>
                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                value="{{ old('event',$event->description) }}"
                                > Enter Description </textarea>
                                <span class="invalid-feedback">{{$errors->first('description')}}</span>
                            <!-- <small>   <span class="help-block">Please Enter Teacher description</span></small> -->
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
