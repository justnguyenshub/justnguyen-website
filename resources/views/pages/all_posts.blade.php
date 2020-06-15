@extends('master.master')

@section('title','Blog - Just Nguyen')

@section('blog')
    {{--  breadcrumb  --}}
    @include('comps.blog_breadcrumb')
    
    <!-- Image Showcases -->
    @if ($posts->count()>0)
        <section class="showcase">
            <div class="container-fluid p-0">
                @foreach ( $posts as $post)
                    <div class="row no-gutters mx-5">
                        <div class="col-lg-5 text-white showcase-img">
                            <img class="card-img-top" src="{{ $post->image->img_path }}" alt="">
                        </div>
                        <div class="col-lg-7 my-auto showcase-text showcase-bgr">
                            <div class="mx-5 my-3">
                                <p><span><i class="material-icons md-26 mb-0 fl-left">person</i></span> <span class="mx-1">{{ $post->admin->ad_full_name }}</span></p>
                                <h3>{{ $post->po_title }}</h3>
                                <p class="lead mb-0">{{ $post->po_summary }}</p>
                                <br>
                                <p class="text-right"><small class="text-muted">{{ $post->updated_at->diffForHumans($now) }}</small></p>
                                <a href="./post/{{ $post->po_id }}" class="btn showcase-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </section>
    @else
        <div class="alert space">There is no post yet.</div>
    @endif
@endsection