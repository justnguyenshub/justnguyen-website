@extends('master.master')

@section('title')
    Project - {{ $detail->po_title }} - Just Nguyen
@endsection

@section('project_detail')
    @if (!empty($detail) and empty($detail->category))

        {{-- post-detail --}}
        @include('comps.project_detail')

    @else
        <div class="alert space">Sorry, there is no post</div>
    @endif
@endsection