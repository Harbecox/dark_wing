<form class="order_input" wire:submit.prevent="submit" method="post">
    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="fake_input d-flex position-relative w-100 @if(strlen($name) > 0) focus @endif">
                <div class="part left"></div>
                <div class="part main"><span class="title">First name</span></div>
                <div class="part right"></div>
                <input wire:model="name">
            </div>
            @error('name')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="fake_input d-flex position-relative w-100 @if(strlen($lname) > 0) focus @endif">
                <div class="part left"></div>
                <div class="part main"><span class="title">Last name</span></div>
                <div class="part right"></div>
                <input wire:model="lname">
            </div>
            @error('lname')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="fake_input d-flex position-relative w-100 @if(strlen($email) > 0) focus @endif">
                <div class="part left"></div>
                <div class="part main"><span class="title">E-mail</span></div>
                <div class="part right"></div>
                <input wire:model="email">
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
                <input wire:model="phone">
            </div>
            @error('phone')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
        @if($isContactPage)
            <div class="col-md-12">
                <div class="fake_input textarea d-flex position-relative w-100 @if(strlen($question) > 0) focus @endif">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">My question is about...</span></div>
                    <div class="part right"></div>
                    <textarea wire:model="question"></textarea>
                </div>
                @error('question')
                    <span class="text-danger error">{{ $message }}</span>
                @enderror
            </div>
        @endif
    </div>
    @if($success)
        <h5 class="text-center text-secondary mb-3">Email sent successfully</h5>
    @endif
    <div class="d-flex justify-content-center">
        <button class="btn  text-white text-uppercase contact_button" style="width: 386px"><span class="pnt">~</span>Send the mail<span
                class="pnt">~</span>
        </button>
    </div>
</form>

