@extends('master.master')

@section('title','Home - Just Nguyen')

@section('content')     
    {{--  cover  --}}
    {{-- <img src="./public/images/index_cover.jpg" class="img-fluid" width="100%" alt=""> --}}

    {{--  blog  --}}
    @include('comps.lated_post')

    {{--  gallery  --}}
    @include('comps.gallery')
    
    {{--  videos  (de sau) --}}

@endsection