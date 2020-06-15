<section class="showcase">
    <div class="container-fluid p-0">
        @foreach ( $posts as $post)
            <div class="row no-gutters mx-5">
                <div class="col-lg-5 text-white showcase-img">
                    <img class="card-img-top" src="{{ $post->image->img_path }}" alt="">
                </div>
                <div class="col-lg-7 my-auto showcase-text showcase-bgr">
                    <div class="mx-5 my-3">
                        <p>
                            <span> <i class="material-icons md-26 mb-0 fl-left">person</i> </span> 
                            <span class="mx-1">{{ $post->admin->ad_full_name }}</span>
                            <span class="fl-right">
                                @switch($post->po_status)
                                    @case(1)
                                        <button class="btn btn-info btn-sm">Waiting</button>
                                        @break
                                    @case(2)
                                        <button class="btn btn-success btn-sm">Censored</button>
                                        @break
                                    @case(3)
                                        <button class="btn btn-warning btn-sm">Denied</button>
                                        @break
                                    @default
                                        <button class="btn btn-danger btn-sm">Deleted</button>
                                @endswitch
                            </span>
                        </p>
                        <h3>{{ $post->po_title }}</h3>
                        <p class="lead mb-0">{{ $post->po_summary }}</p>
                        <br>
                        <p class="text-right"><small class="text-muted">{{ $post->updated_at->diffForHumans($now) }}</small></p>
                        <a href="{{ route('update-post', [$post->po_id]) }}" class="btn btn-outline-info">Update</a>
                        <span><a href="{{ route('del-post', [$post->po_id]) }}" class="btn btn-outline-danger">Delete</a></span>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
    </div>
</section>