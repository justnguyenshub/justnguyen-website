@extends('admin.master.master')

@section('title')
    {{ $type->pt_name }} - Admin
@endsection
    
@section('my-posts')
    {{--  breadcrumb  --}}
    {{--  @include('../comps.blog_breadcrumb')  --}}

    <!-- Image Showcases -->
    @if ($posts->count()>0)
        @include('admin.comps.posts_list')
    @else
    <div class="alert space">There is no post yet.</div>
    @endif
@endsection