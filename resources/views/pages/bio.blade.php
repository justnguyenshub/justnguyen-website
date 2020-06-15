@extends('master.master')

@section('title')
    About me - Just Nguyen
@endsection

@section('bio')
    @if ($bio->count()>0)
    <div class="row px-5 py-4 post-detail">
        <div class="col-lg-5">
            <div  class="paint-wrap">
                <div class="paint" style="stroke-width: 0; fill-opacity: 1; stroke: rgb(229, 178, 22); stroke-opacity: 1; fill: rgb(229, 178, 22);">
                    <svg preserveAspectRatio="xMidYMid meet" class="paint" data-bbox="10 44.8 180 110.4" viewBox="10 44.8 180 110.4" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                        <g>
                            <path d="M190 74.6s-.8-1.9-1.1-2.8c.2.2 0-.1-.1-.4v.2c-.1-.2-.2-.8-.3-1v.2-.1.4-.1c0 .1-.1 0-.2 0l-.1-.4.2-.2-1.3-4.1-3.4-3.2-8.6 1.2-6.9-1-16.7 1.4-1.1 1c-3.4-1.5-7.5.7-11.1-.2v.8c-1 .1-1-.4-1.2-.5-2.1.2-4.3.4-6.4.7-.4-.2-.9-.5-1.2-.7v-.3c.1 0 .1-.1 0-.1v-.3l-.3-1.6c.1-.1.2-.1.3.2.5 0 1.2.3 1.7 1l-.1-.8c.1 0 .5 1.1.4.1l.2-.4c.2 0 .2-.4.4 0 0 0 0 .1.1.1v-.1c.4.3-.1-.7.3-.3.1.3.1-.1.1-.4h.3l.2.6c.4.4.4-.1.6-.5h.4c.3.4.5 1.2.5 1.9 0-1 0-.7.2-1.2.1.4.1.5.1.9.3.4.1-.4.3-.4 0-.4-.1-.8-.1-1.3.4 0 .8-.1 1.3-.1.1 0 .2 0 .4-.1h.2c.6-.1 1.3-.2 1.9-.3 0 .1.1.2.1.2l-.1-.2c.1 0 .2 0 .4-.1.1.4.1.9.1 1.2l.1-.7.1.8c0-1 .2.1.3-.4.1.3 0 .5.1.6l.2-1.2-.2.5-.1-.9c.2 0 .5-.1.7-.1.1.1.1.3.3.4 0-.1-.1-.3-.1-.5h.1c0 .1.1.3.1.3V62c.1 0 .3-.1.4-.1v.1-.1h.1v.6-.6c.1 0 .2 0 .3-.1v.2l.9.1.1.7c0-1 .5.3.3-.9.2.6.6-.5.6.8.5 0 .7-1.3 1.4-.7.3 1.1.9.7 1.4.8.8-.5 1.3-1 2.1-1.4.6 1.6 1.2-.6 1.8.3l.1-.7c.4 1 .9-.3 1.5.7.1-.3.2-.4.2-.4s-.1-.2-.1-.6c.2.3.4-.1.4.7v.1c0 .8.4-.4.6.3l-.1-.9.3.1-.1.2c.6-1 1-.8 1.4-.5.4.2.8.5 1.4-.4-.2 1 .2-.5.2.5.3 1.3.5-.3.8-.6V60l.4.1c-.3 1.3.3-1.1.1 0 .5.5 1.1.5 1.7.5.6 0 1.3-.1 1.8.1v-.3c.3.1.7-.3.9.3.2.6.6-.8.7-.8.3-.5.4.4.3.5.3-.2.7-1.3 1-.7 0 1.1 1.2-.9 1 .3v-.1c.2.5.4.4.7.2.3-.1.5-.3.7.2 0 0 0 .1-.1.2 0 0 .4-.9.9-1.8s1-1.7 1-1.7.2-1 .3-2.1c.2-1 .3-2.1.3-2.1l-.2-1.8-.2-1.8h-.5c-.3 0-.7 0-1 .1l-.1-.6-1-3.4-1.2.4-1.2.4-2.1-1.3s-.3 0-.8.1-1.1.2-1.7.2c-.6.1-1.2.2-1.7.2-.5.1-.8.1-.8.1l-.3 1c-1.1-1.6-2.2.4-3.3-.7v.8c-.3.1-.3-.4-.4-.6-1.1.2-2.1.5-3.1.7-.3.1-.6.2-1 .2-.6-.3-1.1-.6-1.1-.1v-.2.5c-.9.1-1.8.1-2.7-.2-.3-.5-1-.1-1.2-.7-.6.9-1.3 1.1-2 1.2l-.2-.2.1.1h-.2.1v-.1c-.1-.1-.4-.1-.8-.1v.4c-.3.2-.7 0-1-.2.4-.1.7-.2 1-.2v-.3c-.4.1-.9.4-1.2.4-.2-.1-.6-.8-.4-1.2l-.2.7c-1.5.2-1.5.3-3.2-.3l.2.3c-.3.2-.6.5-.7-.1-1 0-2-.3-2.7-1v.8c-.2 0-.7-1.1-.6-.1l-.4.4c-.3 0-.4.4-.8 0 0 0 0-.1-.1-.1v.1c-.7-.3.1.7-.7.3-.3-.5-.1 1-.5.9l-.5-1c-.7-.5-.7.6-1.5.7-.5-.3-.8-1.2-.7-2.1-.2 1.1-.1.7-.5 1.2-.1-.4-.1-.5 0-.9-.5-.4-.2.4-.6.4 0 .8.1 2.1 0 2.1l.2.2c-.3-.1-.7 0-1.2.1v-.1l-.1.1c-.1 0-.2.1-.3.1l-.1-.4-.6.3.1.1c-.1.1-.6.3-.9.1v-.3c-.9-.7-1.4.5-2.3.7v-.6c-.4-.5.1.9-.4.7l-.1-.7c-.2 1-.5-.1-.8-.4l.3.9-.5-.1c-.5-.2-.5-1.1-.5-1.6l-.2.8-.2-.8c-.1 1-.3-.1-.6.5-.1-.3 0-.5-.2-.6l-.5 1.3.3-.6.2 1.2c-.3 1-.6 0-.9.4l.2-.4c-.5.4-.6-.1-.9-.3.1.2.3.5.1.7-.1.1-.2-.4-.3-.5.1.8-.2 1.3-.6 1v-.3c-.1.1-.1.4-.2.2l-.1-.9-.1.9c-.2-.2-.4.5-.5-.1l.1-.2h-1.5l-.1-.7c0 1-.8-.2-.6 1-.4-.6-1 .6-1.1-.7-.9.1-1.2 1.5-2.5 1-.6-1.1-1.7-.5-2.4-.5-1.3.7-2.2 1.4-3.5 2-1.2-1.4-2.1 1-3.2.3l.3 1c-.8-.9-1.5.5-2.6-.3-.1.3-.2.4-.2.5 0 0 .1.1.2.5-.3-.2-.7.2-.9-.6V53c-.1-.8-.7.5-1.1-.1l.3.8H95l.1-.2c-.2.3-.4.5-.6.7-.1 0-.1.1-.2.2-.1-.3 0-.5-.2-.6l-.6.8c-1 .1-2-.5-3 .9 0-1-.3.6-.5-.4-.8-1.2-.8.5-1.2.9v.2h-.7c.1-.9-.1-.1-.1.2v-.2c-.5-.2-1-.2-1.6-.2l-.1-.3c0 .2-.1.3-.1.3-.2 0-.3.1-.5.1s-.3 0-.4.1c-.5.1-1 .3-1.4.4-.1-.1-.2-.3-.1-.6-1.5.1-2.1 1.6-4 1.2-.8-1-2.5-.4-3.7-.3-2.2.9-3.5 1.5-5.8 2.3-1.7-1.4-3.4 1.2-5 .5l-.3.9c-1.2-.8-2.5.7-4-.1l-.5.5c.1 0 .2.1.3.5-.4-.2-1.2.3-1.3-.5l.1-.1c-.1-.8-1.1.6-1.7 0l.4.8h-.8l.2-.2c-2.9 2.5-4.9 0-7.6 2.3.2-1-.5.6-.7-.4-1-1.1-1.4.5-1.9 1v.2l-1.1.1c.4-1.4-.6 1.2-.2 0-.3 0-.5-.1-.8-.1-.1-.2-.2-.4-.4-.6v.6h-.1c-.1-.3-.2-.7-.2 0-.7 0-1.5.1-2.2.3-.1-.4-.2-.9-.2-1.4 0 1 0 .7-.2 1.2-.1-.4-.1-.5-.1-.9-.3-.5-.1.4-.2.4 0 .2.1.5.1.8-1 .2-2 .5-3 .7-.1 0-.2 0-.3.1-.1-.3-.1-.7-.1-1v.7l-.2-.8c.1 1-.1-.1-.2.4-.1-.3-.1-.5-.2-.6l-.1 1.2.1-.5.1.7c-.2 0-.4.1-.7.1 0 0 0-.1-.1-.1v.1c-.2 0-.3 0-.5.1V66v.1c-.2 0-.5 0-.7.1l.2.3h-.3l-.2-.7c.1.9-.4-.2-.1.9-.3-.5-.3.6-.6-.7-.4 0-.4 1.3-1 .8-.5-1.1-.9-.6-1.2-.6-.5.6-.8 1.2-1.3 1.7-.8-1.5-.8.8-1.4 0l.1.7c-.5-.9-.6.4-1.3-.5 0 .3 0 .4-.1.4 0 0 .1.1.2.5-.2-.2-.3.2-.5-.6v-.1c-.2-.8-.2.5-.5-.2l.3.8-.2-.1v-.2c0 .1 0 .2-.1.3-.3.1-.5.3-.8.5-.3-.1-.7-.3-.8.4h-.1c0-.1 0-.1 0 0-.1 0-.2-.1-.2-.3v.1c-.3-.6-.4-.4-.4-.1-1.3-.2-2.2 1.2-3.7.7V70l-1.2 2.4c-.1 0-.2.3-.3.5l-.2.1c-.1.1-.2.1-.3-.3v.1c-.6-.8-.5.8-1.1.1v-.2l.3 3.9 1.4 4 .6 1.2.2.6-.3-.1v-.2c-.6 2.1-1.7-.5-2.2 1.5-.1-1-.1.5-.3-.5-.5-1.2-.4.4-.5.8v.2h-.4c-.1-1.3 0 1.1-.1 0-1.1-.8-2.1.5-3.2.3l.1.3c-.3 0-.5.5-.8 0-.3-.5-.3.9-.3 1-.1.6-.5-.3-.5-.4-.2.3-.2 1.4-.6 1-.4-1.1-.7 1.3-.9 0v.1c-.6-.8-.7.8-1.3.1v-.2l-.1 3.9 1.2 4.1 1.5 3.2 2-1.2.8.4c-.1.3-.3.7-.5 1l-1 2.4 1.2 1.8c.6.9 1.1 1.8 1.1 1.8s.9.6 1.9 1.2c.9.6 1.9 1.2 1.9 1.2s.4-.2 1.1-.5c.7-.3 1.6-.6 2.5-1 1.8-.7 3.6-1.3 3.6-1.3h6.4s.2 0 .6-.1l.3 1.2c-.7.3-1.4.7-1.6 1.1 0 0 1 .4 2.1.9l.1.3.4 1-.1 1.5.1 1.4c-1.2 0-2.1 1.3-3.5 1v-.2l-2 4.5 1.7 3.5c-.6-.1-1.3-.2-2.2-.5v-.1c-.2.1-.1.2-.5.1l1 .4c-.5.4-.8.9-1.5 1.1-.2-.1-.3-.3-.3-.4l-1.6.5-.6-.5c-.4.4.1 1.7-1.4 1.3.7.8-.6.7-.3 1.1-.1-.1-.3-.2-.4-.4-.8.3-2.2.9-2.5 1.4 0 0 .5.2 1.2.5l-1 3.6.4 4.2 1 3.4.6-.2.8 2.2.3.3c-.6-.1-.8.7-1.5.5l.2.3c-.2 0-.2.5-.5 0-.3-.4.1.9.1 1 .1.5-.4-.2-.4-.4 0 .2.3 1.3-.1.9-.5-1 0 1.2-.5.1v.1c-.6-.7-.2.8-.7.2 0 0 0-.1-.1-.2l1.2 3.7 2 3.7 1.9 2.9s.2-.3.3-.6c.2-.3.3-.6.3-.6l1.4.9s.4-.3.9-.6c.4-.3.9-.6.9-.6v-.2l1 1.7 1.4 1 .4.9 1.6 3.1.9-1.1 1.4.9 2.1-1.2-.2-1c1 1.4.9-.6 1.8.4l-.3-.8c.1-.1.3.4.4.5 1.2-.6 2.1-2.1 3.6-1.5.3.5.5.1.8.6 0-1.1.4-1.2.8-1.2v.1l.1-.2c0 .1.1.2.1.2 0-.8.5-.2.8 0v.1c1.4-.3 2.2-2.2 4-1.7 1.1 1 1.2-1 2.3-.2.4.7 1.7-.4 1.7-.8l-.5-.9c.4-.6.9.1 1.1-.5h.1c.2-.1.4-.1.6-.2.1.2.3.4.5.6v.1s0-.2.1 0l-.3-.5v-.3c.1 0 .1 0 .2-.1.1.3.1.2 0 0 .1 0 .2-.1.3-.1l.2.4c0-.1-.1-.2-.1-.4h.1c1.2-.4 2-.6 2-.6l.7-1.2c3 .9 5.7-1.7 8.8-1.3l-.1-.8c.8-.2.8.3 1.1.4 7.1-2 14.3-4.8 21.1-5.3.8.4 2.6-.4 3.2.1 1.9-1.5 4.1-2 6.3-2.4l-.1.1 1-.4c.1.1.1.1.1.2 1-1 2.9-.7 4.4-.7l-.1.1c8.1-1.7 15.3-4.9 23.5-5.6 4 .4 7.9-2.3 12.5-2.2.4.2 1.9 0 3.6-.4l.6 1.5.8-1 1.2 1.1 1.8-1-.1-1c.8 1.5.8-.5 1.5.6l-.2-.8c.1-.1.2.4.3.5 1-.5 1.9-1.8 3.1-1.1.2.5.4.1.7.6.1-1.1.4-1.1.7-1.1v.1l.1-.2c0 .1.1.2.1.2 0-.7.4-.1.7.1v.1c1.2-.2 2-2 3.5-1.2.9 1.1 1.1-.8 2 .1.3.8 1.5-.2 1.5-.6l-.4-.9c.4-.6.8.3 1-.6v.2c.1.2-.4-2 .9.5v.1s0-.2.1 0l-.3-.6c0-.3-.1-.7 0-.8 0 .1.1.3.2.4l.2-.2.2.6c0-.4-.4-1.7 0-1-.3-.9-.1-.6-.2-1 0 .1.1.3.2.4.1-.1.2-.4.1-.9l.6.5c.2-.3.1-.8.3-1.2.1.2.1.1.2-.1.2-.1.4-.1.8 0-.4-.4-.2-.6 0-.7.2.1.4.1.6 0l-.4.2c.2 0 .4.2.5.2.3 0 .1-.2-.1-.4.4-.1.8-.3 1.2-.1l-.1-.3c.2 0 .4-.4.6.1.2.4.2-.3.2-.7.1-.1.2-.2.2-.3.1.2.1.4.1.5.1-.2.2-1.4.5-.9.2 1.1.5-1.2.7.1v-.1c.4.9.5-.7.9.1v.2l.3-3.9-.5-4.2-.7-2.4c.3-.1.6 0 .6.3v-.1c.8.4 1.4.2 2.1-.1.7-.2 1.4-.5 2.2-.1 0 0 0 .1-.1.2l.4-.6c.3-.4.6-.9 1-1.4.4-.6.9-1.1 1.2-1.5.1.1.2.3.3.5v.1s0-.2.1 0l-.2-.4v-.3l.2-.2s0-.1-.1-.3c.1.1.1.3.1.4l.3-.2.3.6c0-.4-.4-1.7.1-1-.3-.9 0-.6-.2-1 0 .1.1.3.2.4.1-.1.3-.5.3-1 0 0-.4-.6-.7-1.2.1-.1.3-.3.4.1v.2s.2-.9.4-1.9c.2-.9.5-1.9.5-1.9l.2-3.6c1.1 0 2.1-.9 3.4-.4 0 0 0 .1-.1.2l2.8-4.1-1.2-4.1-.2-.2.2-.7-.7-4.2-.2-.4c.2 0 .3.1.5.3.2.8 1.7 0 1.7-.4l-.3-1c.5-.5.9.4 1.2-.4v.2c.1.2-.2-2 1 .6v.1s0-.2.1 0l-.2-.6c0-.3 0-.7.1-.8 0 .1.1.3.1.5l.2-.2.2.6c0-.4-.2-1.7.1-1-.2-.9 0-.6-.1-1 0 .1.1.3.1.4.1-.1.3-.4.3-.9zM25.2 137.7zm68.5-83.2c.1 0 0 0 0 0zm76.2 62.1zm18.4-45.8c.1 0 .1 0 0 0z"></path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="mt-5 ml-4">
                <img class="mt-5" width="270px" src="{{ $bio->image->img_path  }}" alt="">
            </div>
        </div>
        
        <div class="col-lg-7 my-auto showcase-text showcase-no-bgr">
            <br>
            <h1 class="display-4">{{ $bio->po_title }}</h1>
            {!! $bio->po_content !!}
        </div>

        <div class="col-12">
            <span class="material-icons md-32 md-dark md-inactive">
                emoji_nature
            </span>
        </div>
    </div>    
    @else
        <div class="alert space">Sorry, I haven't written my bio</div>
    @endif
@endsection