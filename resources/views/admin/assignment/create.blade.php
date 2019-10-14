@extends('admin.layout.layout');


@section('content')
<div class="row">
        <div class="col-md-10 offset-md-1">
    @if(isset($assignment->id))
    <form action="{{route('assignment.update', $assignment->id)}}" method="post"  enctype="multipart/form-data">
            @method('patch')
            @csrf
    @else
    <form action="{{route('assignment.store')}}" method="post"  enctype="multipart/form-data">

            @csrf
    @endif

                <div class="card">
                        <div class="card-header">
                          <strong>Assignment</strong> Form</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nf-email">File</label>
                                <input type="file" name="file" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Class</label>
                                <select name="" id="" class="form-control">
                                  {{-- @foreach($speakers as $speaker) --}}
                                  <option value="">
                                    1BEIT
                                  </option>

                                  <option value="">
                                    2BEIT
                                  </option>

                                  <option value="">
                                    3BEIT
                                  </option>

                                  <option value="">
                                    4BEIT
                                  </option>

                                  <option value="">
                                    5BEIT
                                  </option>

                                  <option value="">
                                    VIT-IT
                                  </option>

                                  {{-- @endforeach --}}
                                </select>
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
