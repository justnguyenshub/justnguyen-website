@if ($posts->count()>0)
    <p class="text-center mt-3" style="font-size: 26px; text-align: center">| Blog |</p>
    <div class="row row-cols-1 row-cols-md-3 mt-4">
        @foreach ($posts as $post)
            <div class="col mb-4">
                <a href=" {{ route('post-detail',[$post->po_id, slug($post->po_title)]) }} ">
                    <div class="card h-100 zoom">
                        <img src="{{ $post->image->img_path }}" class="card-img-top" alt="">
                   
                        <div class="card-body">
                            <h3 class="card-title">{{ $post->po_title }}</h3>
                            <p class="card-text">{{ $post->po_summary }}</p>
                            <p class="card-text text-right">
                                <small class="text-muted">{{ $post->updated_at->diffForHumans($now) }}</small>
                            </p>
                        </div>
                    {{-- <div class="card-footer text-left">
                        <small class="text-muted">
                            <a class="love" href="">
                                <i class="material-icons fl-left red">favorite_border</i>
                            </a>
                            <span>
                                {{ $post->updated_at->diffForHumans($now) }}
                            </span>
                        </small>
                    </div> --}}
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <p class="text-center">See more</p>
@endif