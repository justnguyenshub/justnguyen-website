@extends('master.master')

@section('title','My Projects - Just Nguyen')

@section('myprojects')
    <div class="lightslategrey-background">
        @if ($projects->count()>0)
            <section class="showcase">
                <div class="container-fluid p-0">
                    @for ($i = 0; $i < $projects->count(); $i++)
                        @if (fmod($i,2)>0)
                            <br>
                            <div class="row no-gutters mx-5 my-5">
                                <div class="col-lg-5 order-lg-2 showcase-img" style="background-image: url('{{ $projects[0]->image->img_path }}');"></div>
                                
                                <div class="col-lg-6 order-lg-1 my-auto showcase-text showcase-no-bgr">
                                    <div class="mx-5 my-3 zoom">
                                        <a class="text-white" href="./project/{{ $projects[$i]->po_id }}">
                                            <h3>{{ $projects[$i]->po_title }}</h3>
                                            <p class="lead mb-0">{{ $projects[$i]->po_summary }}</p>
                                            <br>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-1 order-lg-1 line"></div>
                            </div>
                        @else
                            <br>
                            <div class="row no-gutters mx-5 my-5">
                                <div class="col-lg-5 text-white showcase-img" style="background-image: url('{{ $projects[1]->image->img_path }}');"></div>
                                
                                <div class="col-lg-1 line-right"></div>
                                
                                <div class="col-lg-6 my-auto showcase-text showcase-no-bgr">
                                    <div class="mx-5 my-3 zoom">
                                        <a class="text-white" href="./project/{{ $projects[$i]->po_id }}">
                                            <h3>{{ $projects[$i]->po_title }}</h3>
                                            <p class="lead mb-0">{{ $projects[$i]->po_summary }}</p>
                                            <br>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endfor
                    {{-- <br>
                    <div class="row no-gutters mx-5 my-5">
                        <div class="col-lg-5 order-lg-2 showcase-img" style="background-image: url('{{ $projects[2]->image->img_path }}');"></div>
                        
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text showcase-no-bgr">
                            <div class="mx-5 my-3 zoom">
                                <a class="text-white" href="./project/{{ $projects[2]->po_id }}">
                                    <h3>{{ $projects[2]->po_title }}</h3>
                                    <p class="lead mb-0">{{ $projects[2]->po_summary }}</p>
                                    <br>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-1 order-lg-1 line"></div>
                    </div>
                    <br>
                    <div class="row no-gutters mx-5 my-5">
                        <div class="col-lg-5 text-white showcase-img" style="background-image: url('{{ $projects[3]->image->img_path }}');"></div>
                        <div class="col-lg-1 line-right"></div>
                        <div class="col-lg-6 my-auto showcase-text showcase-no-bgr">
                            <div class="mx-5 my-3 zoom">
                                <a class="text-white" href="./project/{{ $projects[3]->po_id }}">
                                    <h3>{{ $projects[3]->po_title }}</h3>
                                    <p class="lead mb-0">{{ $projects[3]->po_summary }}</p>
                                    <br>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                    <br>
                </div>
            </section>
        @else
            <div class="alert space">I have no project yet!</div>
        @endif
    </div>
@endsection