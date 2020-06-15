@if ($imgs->count()>0)
    <p class="text-center" style="font-size: 26px;">| Gallery |</p>
    <div class="card-columns my-3">         
        @foreach ($imgs as $img)
            <div class="card">
                <img class="card-img-top" src="{{ $img->img_path }}" alt="">
                <div class="card-img-overlay hide text-white">
                    @if (!empty($img->post->po_title))
                        <p class="card-text">{{ $img->post->po_title }}</p>                              
                    @endif
                </div>
            </div>
        @endforeach            
    </div>
    <p class="text-center">See more</p>
@endif