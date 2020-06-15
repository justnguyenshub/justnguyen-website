<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
    <base href="{{ asset('') }}">
    <link rel = "icon" href = "" type = "image/x-icon"> 

    <link rel="stylesheet" type="text/css" href="public/css/style.css" media="all" />
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="public/css/icon.css">
    <link href="public/css/fontQuickSand.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">

    <script src="public/bootstrap/js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="public/bootstrap/js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="public/bootstrap/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="public/js/show_password.js"></script>

    <title>Login - Just Nguyen</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="usrname">User name</label>
                                <input type="text" name="usrname" class="form-control" id="usrname" aria-describedby="emailHelp">
                                @if ($errors->has('usrname'))
                                    <small id="" class="form-text msg">{{ $errors->first('usrname') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" name="pass" class="form-control" id="pass">
                                @if ($errors->has('pass'))
                                    <small id="" class="form-text msg">{{ $errors->first('pass') }}</small>
                                @endif
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" onclick="showPassWord()" class="form-check-input" id="showPass">
                                <label class="form-check-label" for="showPass">Show password</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>

                {{-- alert --}}
                @if (session('message'))
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ session('message') }}</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>