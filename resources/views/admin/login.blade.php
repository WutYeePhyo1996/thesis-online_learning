<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <title>Online Thesis</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .login-form{
            margin: 0 auto;
            width: 611px;
            margin-top: 149px;
        }
        .debug{
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <div id="app">
        <form>
            <div class="login-form">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticEmail" placeholder="Email...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>