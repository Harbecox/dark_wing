<form class="order_input" wire:submit.prevent="submit" method="post">
    <div class="fake_input d-flex position-relative">
        <div class="part left"></div>
        <div class="part main"><span class="title">Name *</span></div>
        <div class="part right"></div>
        <input wire:model="firstName" name="firstName" value="{{$user->firstName ?? ""}}">
    </div>
    <div class="fake_input d-flex position-relative">
        <div class="part left"></div>
        <div class="part main"><span class="title">E-mail *</span></div>
        <div class="part right"></div>
        <input wire:model="email" name="email" value="{{$user->email ?? ""}}">
    </div>
    <div class="fake_input d-flex position-relative">
        <div class="part left"></div>
        <div class="part main"><span class="title">Phone number *</span></div>
        <div class="part right"></div>
        <input wire:model="phone" name="phone" value="{{$user->phone ?? ""}}">
    </div>
    <div class="fake_input d-flex position-relative">
        <div class="part right">
            <select wire:model="deliveryAirport" class="form-select" style="margin-right: 12px" aria-label="Default select example" name="deliveryAirport">
                <option selected class="title">Delivery Airport *</option>
                @foreach($airports as $airport)
                    <option value="{{$airport->id}}">{{$airport->title}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="order_select d-flex justify-content-between w-100">
        <select wire:model="deliveryDay" class="form-select" style="margin-right: 12px" aria-label="Default select example" name="deliveryDay">
            <option selected>Delivery Day *</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <select wire:model="deliveryTime" class="form-select" aria-label="Default select example" name="deliveryTime">
            <option selected>Delivery time (LT) *</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="fake_input d-flex position-relative">
        <div class="part left"></div>
        <div class="part main"><span class="title">Company name</span></div>
        <div class="part right"></div>
        <input wire:model="company" name="company" value="{{$user->company ?? ""}}">
    </div>
    <div class="fake_input d-flex position-relative">
        <div class="part left"></div>
        <div class="part main"><span class="title">Handling</span></div>
        <div class="part right"></div>
        <input wire:model="handling" name="handling" value="">
    </div>
    <div class="fake_input d-flex position-relative">
        <div class="part left"></div>
        <div class="part main"><span class="title">Packaging(foil or MW)</span></div>
        <div class="part right"></div>
        <input wire:model="packaging" name="packaging" value="">
    </div>
    <div class="fake_input d-flex position-relative">
        <div class="part left"></div>
        <div class="part main"><span class="title">Allergies</span></div>
        <div class="part right"></div>
        <input wire:model="allergies" name="allergies" value="">
    </div>
    <button type="submit" class="btn text-white text-uppercase" style="width: 100%"><span class="pnt">~</span>SEND order<span
            class="pnt">~</span>
    </button>
</form>
