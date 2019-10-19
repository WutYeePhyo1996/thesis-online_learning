<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')  }}">
    <title>Online Learning for IT Students</title>
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
    <form action="{{ route('adminLogin') }}" method="POST">
            @csrf
            <div class="login-form">
                <h1> Login</h1>
                <hr>

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password...">
                    </div>
                </div>
                <div class="form-group clearfix">

                    <div class="float-right">
                        <input type="submit" class="btn btn-success btn-lg btn-block" value="Send">
                    </div>
                    <div class="float-right pb-2 pt-2 mr-2"><a href="/register">Sign Up</a></div>
                </div>
            </div>

        </form>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
