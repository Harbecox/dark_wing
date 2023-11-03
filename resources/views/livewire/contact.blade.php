<form class="order_input" wire:submit.prevent="submit" method="post">
    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="fake_input d-flex position-relative w-100 @if(strlen($name) > 0) focus @endif">
                <div class="part left"></div>
                <div class="part main"><label for="input_first_name" class="title">First name</label></div>
                <div class="part right"></div>
                <input id="input_first_name" wire:model="name">
            </div>
            @error('name')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="fake_input d-flex position-relative w-100 @if(strlen($lname) > 0) focus @endif">
                <div class="part left"></div>
                <div class="part main"><label for="input_last_name" class="title">Last name</label></div>
                <div class="part right"></div>
                <input id="input_last_name" wire:model="lname">
            </div>
            @error('lname')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="fake_input d-flex position-relative w-100 @if(strlen($email) > 0) focus @endif">
                <div class="part left"></div>
                <div class="part main"><label for="input_email" class="title">E-mail</label></div>
                <div class="part right"></div>
                <input id="input_email" wire:model="email">
            </div>
            @error('email')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="fake_input d-flex position-relative w-100 @if(strlen($phone) > 0) focus @endif">
                <div class="part left"></div>
                <div class="part main"><label for="input_phone" class="title">Phone number</label></div>
                <div class="part right"></div>
                <input id="input_phone" wire:model="phone">
            </div>
            @error('phone')
                <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-12">
            <div class="fake_input textarea d-flex position-relative w-100 @if(strlen($question) > 0) focus @endif">
                <div class="part left"></div>
                <div class="part main"><label for="textarea_q" class="title">My question is about...</label></div>
                <div class="part right"></div>
                <textarea id="textarea_q" wire:model="question"></textarea>
            </div>
            @error('question')
            <span class="text-danger error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    @if($success)
        <h5 class="text-center text-secondary mb-3">Email sent successfully</h5>
    @endif
    <div class="d-flex justify-content-center">
        <button class="btn  text-white text-uppercase contact_button" style="width: 386px"><span class="pnt">~</span>Send<span
                class="pnt">~</span>
        </button>
    </div>
</form>

