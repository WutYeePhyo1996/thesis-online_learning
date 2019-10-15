<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')  }}">
    <title>Online Thesis</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .login-form{
            margin: 0 auto;
            width: 611px;
            margin-top: 149px;
            background: #fff;
            padding:10px 10px;
        }
        .debug{
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <div id="app">
        
        <form action="{{ route('postRegister') }}" method="POST">
            @csrf
            <div class="login-form card">
                @include('admin.layout.flash-message')
                <div class="card-title">
                    <h1> Rigister</h1>
                </div>
                
                <hr>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10 col-10">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="username..." autocomplete="username" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    
                    
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email...">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password...">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="confirm_password" name="password_confirmation" placeholder="Confirm Password...">
                        @error('confirm_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Class</label>
                    <div class="col-sm-10">
                        <select name="class_id" class="form-control @error('year') is-invalid @enderror" id="year">
                            <option value="">Choose ...</option>
                            @foreach ($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->year }}</option>
                            @endforeach
                            
                            
                        </select>
                        @error('year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                </div>
                <div class="form-group clearfix">
                    
                    <div class="float-right">
                        <input type="submit" class="btn btn-success btn-lg btn-block" value="Register">
                    </div>
                    <div class="float-right pb-2 pt-2 mr-2"><a href="#">Login Here</a></div>
                </div>
            </div>
            
        </form>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>