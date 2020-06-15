@extends('admin.master.master')

@section('title', 'Add new post - Just Nguyen')

@section('add-post')
    {{-- alert --}}
    @if (session('msg'))
        <script>
            alert('{{ session('msg') }}');
        </script>
    @endif
    
    <div class="row">
        <div class="col-xs-12 col-lg-10 mx-auto">
            <h1 class="display-4">Add new post</h1>
            <br>
            
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group" id="po_type">
                    <label for="po_type">Post type</label>
                    <select class="form-control" name="po_type" onChange="handleShowForm(this.value)" required>
                        <option value="">-- Choose the type --</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->pt_id }}">{{ $type->pt_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div id="hide-form">
                    <div class="form-group" id="po_topic">
                        <label for="po_topic">Topic</label>
                        <select class="form-control" name="po_topic">
                        <option value="">-- Choose category --</option>
                        @foreach ($cates as $cate)
                            <option value="{{ $cate->cate_id }}">{{ $cate->cate_name }}</option>
                        @endforeach
                        </select>
                    </div>
    
                    <div class="form-group" id="po_title">
                        <label for="po_title">Title</label>
                        <input type="text" class="form-control" name="po_title">
                        @if ($errors->has('po_title'))
                            <small id="" class="form-text msg">{{ $errors->first('po_title') }}</small>
                        @endif
                    </div>
    
                    <div class="form-group" id="po_summ">
                        <label for="po_summ">Summary</label>
                        <textarea class="form-control" name="po_summ" rows="3"></textarea>
                        @if ($errors->has('po_summ'))
                            <small id="" class="form-text msg">{{ $errors->first('po_summ') }}</small>
                        @endif
                    </div>
    
                    <div class="form-group" id="content">
                        <label for="po_content">Content</label>
                        <textarea class="form-control" name="po_content" rows="15"></textarea>
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
    
                    <div class="form-group" id="po_embed">
                        <label for="po_embed">Embed link</label>
                        <input type="text" class="form-control" name="po_embed">
                    </div>
    
                    <div class="form-group" id="po_img">
                        <label for="po_img">Avatar</label>
                        <input type="file" class="form-control-file" name="po_img">
                        @if ($errors->has('po_img'))
                            <small id="" class="form-text msg">{{ $errors->first('po_img') }}</small>
                        @endif
                    </div>
    
                    <div class="">
                        <button type="submit" class="btn btn-outline-primary">Add Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection