<div class="d-flex flex-column align-items-center">
    <h1 class="fw-normal lh-1 text-white text-uppercase tenor" style="letter-spacing: -0.08em;">
        Airports</h1>
    <p class="airport_text p_lg fw-normal lh-sm text-white text-center pt-2">All the airports we work with are displayed here. For convenience, use the search bar</p>
    <div class="airport_input my-5">
        <input wire:model="search" class="text-gray-6 fw-normal form-control-sm fs-20" type="text"
               placeholder="&#xE914; Enter the name of the airport">
        <div class="search_close">
            <img src="/image/close.svg">
        </div>
    </div>
    <div class="countries w-100">
        <div class="row">
            @foreach($airports as $airport)
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card_city">
                        <img src={{ Storage::url($airport->image) }}>
                        <div class="city_shadow"></div>
                        <div class="flag">
                            <img src={{ Storage::url($airport->country->flag) }}>
                        </div>
                        <div class="city_name">
                            <h5 class="fw-normal lh-sm text-white"><a href="{{ route("show_airport",$airport->id) }}" >{{$airport->title}}, {{ $airport->IATA }}</a></h5>
                            <p class="p_sm text-white lh-sm fw-normal opacity-75">{{ $airport->country->name }}</p>
                            <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                <a class="d-flex align-items-center" href="{{ route("show_airport",$airport->id) }}">Open<i class="icon-Line-right"></i></a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if($count < $all_count)
            <div class="text-center">
                <button wire:click="increment" class="btn btn-lg btn-outline-light text-white text-uppercase" style="width: 481px">See more</button>
            </div>
        @endif
    </div>
</div>

