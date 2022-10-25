<div class="airport_input my-3">
    <input wire:model="search" class="text-gray-6 fw-normal form-control-sm fs-20  search-input" type="text"
           placeholder="&#xE914; Enter the name of the airport">
        @if($count>0)
            <div class="airport_table">
                <table>
                    @foreach($airports as $airport)
                        <tr>
                            <td width="7%">
                                <div class="call_1"><img src="{{ Storage::url($airport->country->flag) }}"></div>
                            </td>
                            <td>
                                <div class="call_1">
                                    <a href="{{route("show_airport",$airport->id) }}">{{ $airport->title }}</a>
                                </div>
                            </td>
                            <td width="40%">
                                <div class="call_1">{{ $airport->country->name }}</div>
                            </td>
                            <td>
                                <div class="call_1">{{ $airport->IATA }}</div>
                            </td>
                            <td width="15%">
                                <div class="call_1">{{ $airport->OACI }}</div>
                            </td>
                        </tr>
                    @endforeach
                </table>
                    <div class="text-center">
                        <a href="{{ route("all_airports",['search' => $search]) }}" class="show_all fw-normal p_md lh-sm text-uppercase text-white text-center d-flex justify-content-center" style="width: 481px">Show all results</a>
                    </div>
            </div>
        @endif
</div>
