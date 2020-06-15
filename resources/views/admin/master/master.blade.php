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
    
    <script src="public/ckeditor/ckeditor.js"></script>
    <script src="public/js/show_add_post_form.js"></script>
    
    <title> @yield('title') </title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-3 col-xl-2">
                <nav class="navbar navbar-expand-md navbar-light">
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        
                        <div class="accordion" id="accordionExample">
                            {{-- POSTS --}}
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Posts
                                        </button>
                                    </h2>
                                </div>
                            
                                @if ($types->count()>0)
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="nav">
                                                @foreach ($types as $type)
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('ad.my-posts',[slug($type->pt_name), $type->pt_id]) }}">{{ $type->pt_name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            {{-- CATEGORIES --}}
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Categories
                                    </button>
                                </h2>
                                </div>
        
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Add new</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Config</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            {{-- ACCOUNT --}}
                            {{-- <div class="card">
                                <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Account
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-md-9 col-xl-10">
                @yield('index')
                @yield('add-post')
                @yield('update-post')
                @yield('')
                @yield('')
                @yield('')
            </div>
        </div>
    </div>
</body>
</html>