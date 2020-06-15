@extends('master.master')

@section('title')
    {{ $detail->po_title }} - Just Nguyen
@endsection

@section('post_detail')
    @if (!empty($detail) and !empty($detail->category))

        {{-- search-box --}}
        @include('comps.search_box')

        {{-- post-detail --}}
        @include('comps.post_detail')

    @else
        <div class="alert space">Sorry, there is no post</div>
    @endif
    
    {{-- Related posts --}}
    @if ($relates->count()>1)
        <div class="mt-5 rel-posts">
            <h6 class="card-title"><u>Related posts: </u></h6>
        </div>

        {{-- Grid card --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mt-4">
            @foreach ($relates as $relate)
                {{-- trừ bài biết đang hiển thị chi tiết ra --}}
                @if ($relate->po_id != $detail->po_id)
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href="{{ route('post-detail',[$relate->po_id, slug($relate->po_title)]) }}">
                                <img src="{{ $relate->image->img_path }}" class="card-img-top" alt="">
                            </a>
                                
                            <div class="card-body">
                                <a href="{{ route('post-detail',[$relate->po_id, slug($relate->po_title)]) }}">
                                    <h5 class="card-title">{{ $relate->po_title }}</h5>
                                </a>
                            </div>
                                
                            <div class="card-footer text-left">
                                <small class="text-muted">
                                    <span>
                                        <i class="material-icons fl-left love red" onclick="">favorite_border</i>
                                    </span>
                                    <span class="fl-right">
                                        {{ $relate->updated_at->diffForHumans($now) }}
                                    </span>
                                </small>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @else
        
    @endif
@endsection