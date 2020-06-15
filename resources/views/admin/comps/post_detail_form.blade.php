<form method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group" id="po_type">
        <label for="po_type">Post type</label>
        <select class="form-control" name="po_type" required>
            <option checked value="{{ $post->po_type }}">{{ $post->type->pt_name }}</option>
        </select>
    </div>
    
    @if ($post->po_type == 1)
        <div class="form-group" id="po_topic">
            <label for="po_topic">Topic</label>
            <select class="form-control" name="po_topic">
                <option value="">-- Choose category --</option>
                
                @foreach ($cates as $cate)
                    @if ($cate->cate_id == $post->po_topic)

                        <option selected value="{{ $post->po_topic }}">{{ $post->category->cate_name }}</option>

                    @else

                        <option value="{{ $cate->cate_id }}">{{ $cate->cate_name }}</option>

                    @endif
                @endforeach
            </select>
        </div>
    @endif

    <div class="form-group" id="po_title">
        <label for="po_title">Title</label>
        <input type="text" class="form-control" name="po_title" value="{{ $post->po_title }}">
        @if ($errors->has('po_title'))
            <small id="" class="form-text msg">{{ $errors->first('po_title') }}</small>
        @endif
    </div>

    @if ($post->po_type == 1 && $post->po_type == 2)
        <div class="form-group" id="po_summ">
            <label for="po_summ">Summary</label>
            <textarea class="form-control" name="po_summ" rows="3">{{ $post->po_summary }}</textarea>
            @if ($errors->has('po_summ'))
                <small id="" class="form-text msg">{{ $errors->first('po_summ') }}</small>
            @endif
        </div>
    @endif

    <div class="form-group" id="content">
        <label for="po_content">Content</label>
        <textarea class="form-control" name="po_content" rows="15">{{ $post->po_content }}</textarea>
        @if ($errors->has('po_content'))
            <small id="" class="form-text msg">{{ $errors->first('po_content') }}</small>
        @endif
        <script>
            var editor = CKEDITOR.replace( 'po_content', {
                filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token() ]) }}",
                filebrowserUploadMethod: 'form',
                extraPlugins: 'notification',
                height: '400px',
            } );

            editor.on( 'required', function( evt ) {
                editor.showNotification( 'Vui lòng điền vào trường này!', 'warning' );
                evt.cancel();
            } );
        </script>
    </div>

    @if ($post->po_type == 5)
        <div class="form-group" id="po_embed">
            <label for="po_embed">Embed link</label>
            <input type="text" class="form-control" name="po_embed" value="">
        </div>
    @endif

    <div class="form-group">
        <label>Old Avatar</label>
        <img src="{{ $post->image->img_path }}" alt="old-avatar">
    </div>

    <div class="form-group" id="po_img">
        <label for="po_img">New Avatar (Only choose when need)</label>
        <input type="file" class="form-control-file" name="po_img">
    </div>

    <div class="">
        <button type="submit" class="btn btn-outline-primary">Update Post</button>
    </div>
</form>