@extends('admin.layout.layout')

@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row mt-3">
            <div class="col-md-10 offset-md-1">

                <div class="card">
                    <div class="card-header">
                        <strong>User Form</strong>

                    </div>
                    <div class="card-body">
                        @if(isset($user->id))
                        <form action="{{route('user.update', $user->id)}}" enctype="multipart/form-data" method="post">
                            @method('patch')
                            @csrf
                            @else
                            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data" method="post">

                                @csrf
                                @endif
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$user->name) }}" id="name" type="text" placeholder="e.g.Aung Aung...">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Email</label>
                                            <input class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email',$user->email) }}" name="email" type="text" placeholder="e.g. example@gmail.com...">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="ccnumber">Password</label>
                                                <input class="form-control @error('password') is-invalid @enderror" id="passowrd" name="password" type="password" placeholder="password...">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.row-->
                                {{-- <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="ccnumber">Confirm Password</label>
                                                <input class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" value="{{ old('confirm_password',$user->password) }}" name="confirm_password" type="text" placeholder="e.g. example@gmail.com...">
                                                @error('confirm_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> --}}
                                <!-- /.row-->
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="academic_year">Role Permission</label>
                                        <select name="type" class="form-control">
                                            <option value="">Choose...</option>
                                            <option value="admin">Admin</option>
                                            <option value="teacher">Teacher</option>
                                        </select>
                                        @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                </div>
                               
                                

                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Save" class="btn btn-success float-right">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @endsection
