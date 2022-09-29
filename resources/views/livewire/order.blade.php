<form class="order_input" wire:submit.prevent="submit" method="post">
    <div class="fake_input d-flex position-relative @if(strlen($firstName) > 0) focus @endif">
        <div class="part left"></div>
        <div class="part main"><span class="title">Name *</span></div>
        <div class="part right"></div>
        <input wire:model="firstName" name="firstName" value="{{$user->firstName ?? ""}}">
    </div>
    @error('firstName')
        <span class="text-danger error">{{ $message }}</span>
    @enderror
    <div class="fake_input d-flex position-relative @if(strlen($email) > 0) focus @endif">
        <div class="part left"></div>
        <div class="part main"><span class="title">E-mail *</span></div>
        <div class="part right"></div>
        <input wire:model="email" name="email" value="{{$user->email ?? ""}}">
    </div>
    @error('email')
    <span class="text-danger error">{{ $message }}</span>
    @enderror
    <div class="fake_input d-flex position-relative @if(strlen($phone) > 0) focus @endif">
        <div class="part left"></div>
        <div class="part main"><span class="title">Phone number *</span></div>
        <div class="part right"></div>
        <input wire:model="phone" name="phone" value="{{$user->phone ?? ""}}">
    </div>
    @error('phone')
    <span class="text-danger error">{{ $message }}</span>
    @enderror
    <div class="fake_input d-flex position-relative" @if(strlen($deliveryAirport) > 0) focus @endif">
        <div class="part right">
            <select wire:model="deliveryAirport" class="form-select" style="margin-right: 12px" aria-label="Default select example" name="deliveryAirport">
                <option selected class="title">Delivery Airport *</option>
                @foreach($airports as $airport)
                    <option value="{{$airport->id}}">{{$airport->title}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @error('deliveryAirport')
    <span class="text-danger error">{{ $message }}</span>
    @enderror
    <div class="order_select d-flex justify-content-between w-100">
        <div class="me-2">
            <select wire:model="deliveryDay" class="form-select" style="margin-right: 12px" aria-label="Default select example" name="deliveryDay">
                <option selected>Delivery Day *</option>
                @foreach(range(1,31) as $day)
                    <option value="{{ $day }}">{{ $day }}</option>
                @endforeach
            </select>
            @error('deliveryDay')
            <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
        <div class="ms-2">
            <select wire:model="deliveryTime" class="form-select" aria-label="Default select example" name="deliveryTime">
                <option selected>Delivery time (LT) *</option>
                @foreach(range(0,24) as $time)
                    <option value="{{ $time }}">{{ $time }}</option>
                @endforeach
            </select>
            @error('deliveryTime')
            <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="fake_input d-flex position-relative @if(strlen($company) > 0) focus @endif" >
        <div class="part left"></div>
        <div class="part main"><span class="title">Company name</span></div>
        <div class="part right"></div>
        <input wire:model="company" name="company" value="{{$user->company ?? ""}}">
    </div>
    @error('company')
    <span class="text-danger error">{{ $message }}</span>
    @enderror
    <div class="fake_input d-flex position-relative @if(strlen($handling) > 0) focus @endif">
        <div class="part left"></div>
        <div class="part main"><span class="title">Handling</span></div>
        <div class="part right"></div>
        <input wire:model="handling" name="handling" value="">
    </div>
    @error('handling')
    <span class="text-danger error">{{ $message }}</span>
    @enderror
    <div class="fake_input d-flex position-relative @if(strlen($packaging) > 0) focus @endif">
        <div class="part left"></div>
        <div class="part main"><span class="title">Packaging(foil or MW)</span></div>
        <div class="part right"></div>
        <input wire:model="packaging" name="packaging" value="">
    </div>
    @error('packaging')
    <span class="text-danger error">{{ $message }}</span>
    @enderror
    <div class="fake_input d-flex position-relative @if(strlen($allergies) > 0) focus @endif">
        <div class="part left"></div>
        <div class="part main"><span class="title">Allergies</span></div>
        <div class="part right"></div>
        <input wire:model="allergies" name="allergies" value="">
    </div>
    @error('allergies')
    <span class="text-danger error">{{ $message }}</span>
    @enderror
    @if($success)
        <h5 class="text-center text-secondary">Order sent successfully</h5>
    @endif
    <button type="submit" class="btn text-white text-uppercase" style="width: 100%"><span class="pnt">~</span>SEND order<span
            class="pnt">~</span>
    </button>
</form>
