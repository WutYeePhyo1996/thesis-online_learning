@extends('admin.layout.layout');


@section('content')
<div class="row">
  <div class="col-md-10 offset-md-1">
    @if(isset($lesson->id))
    <form action="{{route('audio_lessons.update', $lesson->id)}}" method="post" enctype="multipart/form-data">
      @method('patch')
      @csrf
      @else
      <form action="{{route('audio_lessons.store')}}" method="post" enctype="multipart/form-data">
        
        @csrf
        @endif
        
        <div class="card">
          <div class="card-header">
            <strong>Normal</strong> Form</div>
            <div class="card-body">
              
              <div class="form-group">
                <label for="">Speaker Name</label>
                <select name="speaker_id" id="" class="form-control">\
                  @foreach($speakers as $speaker)
                  <option value="{{$speaker->id}}" @if($speaker->id == old('speaker_id', $lesson->speaker_id)) selected @endif>
                    {{$speaker->name}}
                  </option>
                  
                  @endforeach
                </select>
              </div>
              
              <div class="form-group">
                <label for="nf-email">File</label>
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