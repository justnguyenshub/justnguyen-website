<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta charset="ISO-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
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

	<title>@yield('title')</title>
</head>
<body>
    @include('master.header')

        <div class="wrapping">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-10 mx-auto">
                        @yield('content')
                        @yield('blog')
                        @yield('myprojects')
                        @yield('bio')
                        @yield('project_detail')
                        @yield('post_detail')
                    </div>
                </div>
            </div>
        </div>

        @include('master.footer')
</body>
</html>