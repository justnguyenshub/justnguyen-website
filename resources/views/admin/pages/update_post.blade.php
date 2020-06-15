@extends('admin.master.master')

@section('title', 'Add new post - Just Nguyen')

@section('update-post')
    {{-- alert --}}
    @if (session('msg'))
        <script>
            alert('{{ session('msg') }}');
        </script>
    @endif
    
    <div class="row">
        <div class="col-xs-12 col-lg-10 mx-auto">
            <h1 class="display-4">Update post</h1>
            <br>
            
            @include('admin.comps.post_detail_form')
        </div>
    </div>
@endsection