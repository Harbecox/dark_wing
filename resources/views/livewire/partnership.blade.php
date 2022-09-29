<form wire:submit.prevent="submit" method="post">
    <div class="contact_input">
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="fake_input d-flex position-relative w-100 @if(strlen($company) > 0) focus @endif">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">Name of company</span></div>
                    <div class="part right"></div>
                    <input wire:model="company" name="company">
                </div>
                @error('company')
                <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="fake_input d-flex position-relative w-100 @if(strlen($email) > 0) focus @endif">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">E-mail</span></div>
                    <div class="part right"></div>
                    <input wire:model="email" name="email">
                </div>
                @error('email')
                <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="fake_input d-flex position-relative w-100 @if(strlen($phone) > 0) focus @endif">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">Phone number</span></div>
                    <div class="part right"></div>
                    <input wire:model="phone" name="phone">
                </div>
                @error('phone')
                <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="fake_input d-flex position-relative w-100 @if(strlen($location) > 0) focus @endif">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">Location (Airport)</span></div>
                    <div class="part right"></div>
                    <input wire:model="location" name="location">
                </div>
                @error('location')
                <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    @if($success)
        <h5 class="text-center text-secondary mb-3">Email sent successfully</h5>
    @endif
    <div class="d-flex justify-content-center py-2">
        <button class="btn  text-white text-uppercase" style="width: 386px"><span class="pnt">~</span>Send a request<span
                class="pnt">~</span>
        </button>
    </div>
</form>
