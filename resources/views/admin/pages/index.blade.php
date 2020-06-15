@extends('admin.master.master')

@section('title', 'Home - Admin')
    
@section('index')
    <a href="{{route('ad.add-post')}}">
        <button type="button" class="btn btn-outline-primary">+ ADD NEW POST</button>
    </a>
    <br>
    <a href="{{ route('ad.logout') }}"><button type="button" class="btn btn-outline-danger">Logout</button></a>
    <br>
    
@endsection