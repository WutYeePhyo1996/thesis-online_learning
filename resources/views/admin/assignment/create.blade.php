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

                            <!-- <fieldset class="form-group col-md-6 col-12">
                                    <label>Assignment</label>
                                <div class="pull-right">
                                    <a id="add" @click="add" class="text-success cursor-pointer"><i class="fa fa-lg fa-plus-square"></i></a>

                                    <a id="remove" @click="remove" class="text-danger cursor-pointer"><i class="fa fa-lg fa-minus-square"></i></a>
                                </div>
                                    <transition-group name="slide-fade">
                                        <div  v-for="(eventImage,i) in eventImages" :key="`evnetImage${i}`" class="input-group mt-1">
                                            <span class="input-group-prepend">
                                            <span class="input-group-text">
                                            <i class="fa fa-sticky-note"></i>
                                            </span>
                                            </span>
                                            <input class="form-control" type="file" name="file[]">
                                        </div>
                                    </transition-group>

                            </fieldset> -->

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
