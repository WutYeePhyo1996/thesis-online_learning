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
                <select name="speaker_id" id="" class="form-control">
                  @foreach ($speakers as $speaker)
                <option value="{{ $speaker->id }}" @if($speaker->id == old('speaker_id', $lesson->speaker_id)) selected @endif>{{ $speaker->name }}</option>
                  @endforeach 
              
                  {{-- @foreach($speakers as $speaker)
                  <option value="{{$speaker->id}}" @if($speaker->id == old('speaker_id', $lesson->speaker_id)) selected @endif>
                    {{$speaker->name}}
                  </option>

                  
                  @endforeach --}}
                </select>
              </div>
              
          

              <fieldset class="form-group col-12">
                <div class="form-group">
                        <label for="class_id">Class </label>
                        <input type="hidden" name="class_id" value="{{$classes->id}}">
                        <input type="text" class="form-control" value="{{$classes->name}}" readonly>
                        <span class="invalid-feedback">{{$errors->first('class_id')}}</span>
                    </div>
            </fieldset>
              
            <fieldset class="form-group col-md-6 col-12">
              <label>Lessons</label>
          <div class="pull-right">
              <a id="add" @click="add" class="text-success cursor-pointer"><i class="fa fa-lg fa-plus-square"></i></a>

              <a id="remove" @click="remove" class="text-danger cursor-pointer"><i class="fa fa-lg fa-minus-square"></i></a>
          </div>
              <transition-group name="slide-fade">
                  <div  v-for="(Lecture,i) in Lectures" :key="`Lecture${i}`" class="input-group mt-1">
                      <span class="input-group-prepend">
                      <span class="input-group-text">
                      <i class="fa fa-sticky-note"></i>
                      </span>
                      </span>
                      <input class="form-control" type="file" name="file[]">
                  </div>
              </transition-group>

      </fieldset>

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