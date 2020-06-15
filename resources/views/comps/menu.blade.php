<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="menu">
        <ul class="navbar-nav ">
            <li class="nav-item px-2 active">
                <a class="nav-link" href="/justnguyen/"> Home </span> </a>
            </li>
            <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle" href="./blog/" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Blog </a>
                @if ($cates->count()>0)
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        @foreach ($cates as $cate)
                            <a class="dropdown-item" href="./categories/{{ $cate->cate_name }}">{{ $cate->cate_name }}</a>
                        @endforeach                                
                    </div>
                @endif
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./my-projects/">Projects</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="./about-me/">About me</a>
            </li>
        </ul>
    </div>
</nav>