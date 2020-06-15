<div class="row">
    <div class="post-detail px-5 py-4">
        <h1 class="display-4">{{ $detail->po_title }}</h1>
        <sub><i class="material-icons">person</i></sub>
        <span>{{ $detail->admin->ad_full_name }}</span>
        <span>
            &nbsp-&nbsp
            <a style="font-style: italic; color: salmon !important;" href="./categories/{{ $detail->category->cate_name }}"> 
                {{ $detail->category->cate_name }}
            </a></span>
        <p>
            {{ $detail->updated_at->toDayDateTimeString($now) }}
        </p>
        <br>
    
        {!! $detail->po_content !!}
    
        <span class="material-icons md-32 md-dark md-inactive">
            emoji_nature
        </span>
    </div>
</div>
