<div class="menu">
    <div class="simvol_title d-flex flex-column align-items-center" style="margin-bottom: 41px">
        <div class="simvol_image"><img src="/image/simvol.png"></div>
        <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor">Our Menu</h2>
    </div>
    <div class="owl-menu-cards owl-carousel owl-theme position-relative swiper text_swiper"
         style="width: 94%; margin: 0 auto;">
        <div class="swiper-wrapper">
            @foreach($menu_images as $image)
                <div class="item swiper-slide">
                    <div class="menu_card">
                        <img src={{Storage::url($image->image)}}>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="swiper-button-next menu_button hide-for-small-only hide-for-medium-only" style="z-index: 11 "></div>
        <div class=" swiper-button-prev menu_button hide-for-small-only hide-for-medium-only " style="z-index: 11"></div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <a href="{{ route("download_menu") }}" class="btn btn-outline-light text-white text-uppercase"
           style="width: 320px">
            <span class="pnt">~</span>Download Menu<span class="pnt">~</span>
        </a>
    </div>
</div>
