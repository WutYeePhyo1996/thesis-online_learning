@extends('admin.layout.layout');

@section('content')
<div class="row" id="app">
        <div class="col-md-10 offset-md-1">
                <div class="card">
                        <div class="card-header">
                          <strong>Create New Event Image</strong> </div>
                        <div class="card-body">
                                <form action="{{url('secureadmin/event_images')}}" method="post" enctype="multipart/form-data">
                                <!-- <form action="{{url('e-admin/event_images')}}" method="post" enctype="multipart/form-data"> -->
                               @csrf

                                <fieldset class="form-group col-12">
                                    <div class="form-group">
                                            <label for="event_id">Event </label>
                                            <input type="hidden" name="event_id" value="{{$event->id}}">
                                            <input type="text" class="form-control" value="{{$event->name}}" readonly>
                                            <span class="invalid-feedback">{{$errors->first('event_id')}}</span>
                                        </div>
                                </fieldset>

                                       <fieldset class="form-group col-md-6 col-12">
                                    <label>Image</label>
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
                                            <input class="form-control" type="file" name="file_name[]">
                                        </div>
                                    </transition-group>

                            </fieldset>
                            <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit">
                                      <i class="fa fa-dot-circle-o"></i> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset">
                                      <i class="fa fa-ban"></i> Reset</button>
                                  </div>
                                </form>

                        </div>

                    </div>


            </div>
        </div>

    </div>
    @endsection

    @section('script')
    <script src="{{ asset('js/event-type.js') }}"></script>
    <script>

    </script>
    @endsection
