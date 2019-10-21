@extends('admin.layout.layout');


@section('content')
<div class="row">
  <div class="col-md-10 offset-md-1">
    
      <form action="{{route('class.store')}}" method="post" >
       
        @csrf
        
        <div class="card">
          <div class="card-header">
            <strong>Class</strong> Form</div>
            <div class="card-body">
              
              <div class="form-group">
                <label for="">Year</label>
                <input class="form-control  @error('year') is-invalid @enderror" id="year" type="text" name="year" placeholder="Enter Event year" autocomplete="off" value="{{old('year', $classes->year)}}">
                <span class="invalid-feedback">{{$errors->first('year')}}</span>
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