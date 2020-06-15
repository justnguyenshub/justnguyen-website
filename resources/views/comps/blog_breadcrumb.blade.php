@if (empty($cate_name))
    <div class="btn-toolbar my-5 mx-5" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="All posts">
            <a href="./blog/">
                <button type="button" class="btn active">All posts</button>
            </a>
        </div>
        @foreach ($cates as $cate)
            <div class="btn-group mr-2" role="group" aria-label="{{ $cate->cate_name }}">
                <a href="./categories/{{ $cate->cate_name }}">
                    <button type="button" class="btn zoom">{{ $cate->cate_name }}</button>
                </a>
            </div>
        @endforeach
    </div>
@else
    <div class="btn-toolbar my-5 mx-5" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="All posts">
            <a href="./blog/">
                <button type="button" class="btn zoom">All posts</button>
            </a>
        </div>
        @if (!empty($cates))
            @foreach ($cates as $cate)
                <div class="btn-group mr-2" role="group" aria-label="{{ $cate->cate_name }}">
                    <a href="./categories/{{ $cate->cate_name }}">
                        @if ($cate_name == $cate->cate_name)
                            <button type="button" class="btn active">{{ $cate->cate_name }}</button>
                        @else
                            <button type="button" class="btn zoom">{{ $cate->cate_name }}</button>
                        @endif
                    </a>
                </div>
            @endforeach
        @endif
    </div>
@endif