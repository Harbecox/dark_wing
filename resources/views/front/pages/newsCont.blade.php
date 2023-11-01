<div class="news">
    <div class="simvol_title d-flex flex-column align-items-center pb-5">
        <div class="simvol_image"><img src="/image/simvol.png"></div>
        <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor">News</h2>
    </div>

    <div class="owl-info-cards owl-carousel owl-theme">
        @foreach($posts as $post)
            <div class="item">
                <div class="card card_info">
                    <img src={{Storage::url($post->image)}} class="card-img-top" alt="...">
                    <div class="card-body">
                                            <span
                                                class="span_sm fw-normal lh-sm text-gray-7">{{ $post->created_at->toFormattedDateString() }}</span>
                        <p class="p_lg fw-normal lh-1 text-white py-2" style="height: 72px;">{{ $post->title }}</p>
                        <div style="height: 160px; overflow: hidden"
                             class="span_sm fw-normal lh-sm text-gray-5">{!! $post->context !!}</div>
                        <p class="p_sm fw-bold lh-sm text-uppercase text-gray-5 pt-3"><a
                                href="{{ route("show_news",$post->seo_url) }}">Read more</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <p class="p_md fw-bold lh-sm text-gray-6 text-center text-uppercase "><a
            href="{{ route("all_news") }}">View all</a></p>
</div>
