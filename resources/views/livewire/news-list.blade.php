<div class="py-5">
    <div class="row">
        @foreach($news as $post)
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card card_info">
                    <img src={{Storage::url($post->image)}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="span_sm fw-normal lh-sm text-gray-7">{{$post->created_at}}</span>
                        <p  style="height: 72px" class="p_lg fw-normal lh-1 text-white py-2">{{$post->title}}</p>
                        <div style="height: 160px; overflow: hidden;display: inline-block" class="span_sm fw-normal lh-sm text-gray-5">{!! $post->context !!}</div>
                        <p class="p_sm fw-bold lh-sm text-uppercase text-gray-5 pt-3"><a href="{{ route("show_news",$post->id) }}">Read more</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if($count < $all_count)
        <div class="text-center">
            <button wire:click="increment" class="btn btn-lg btn-outline-light text-white text-uppercase news_see_more">See more</button>
        </div>
    @endif
</div>
