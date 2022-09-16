<form class="order_input" wire:submit.prevent="submit" method="post">
    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="fake_input d-flex position-relative w-100">
                <div class="part left"></div>
                <div class="part main"><span class="title">First name</span></div>
                <div class="part right"></div>
                <input wire:model="name" name="first_name">
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="fake_input d-flex position-relative w-100">
                <div class="part left"></div>
                <div class="part main"><span class="title">Last name</span></div>
                <div class="part right"></div>
                <input wire:model="lname" name="last_name">
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="fake_input d-flex position-relative w-100">
                <div class="part left"></div>
                <div class="part main"><span class="title">E-mail</span></div>
                <div class="part right"></div>
                <input wire:model="email" name="email">
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="fake_input d-flex position-relative w-100">
                <div class="part left"></div>
                <div class="part main"><span class="title">Phone number</span></div>
                <div class="part right"></div>
                <input wire:model="phone" name="phone">
            </div>
        </div>
        @if($isContactPage)
            <div class="col-md-12">
                <div class="fake_input textarea d-flex position-relative w-100">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">My question is about...</span></div>
                    <div class="part right"></div>
                    <textarea wire:model="question" name="message"></textarea>
                </div>
            </div>
        @endif
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn  text-white text-uppercase contact_button" style="width: 386px"><span class="pnt">~</span>Send the mail<span
                class="pnt">~</span>
        </button>
    </div>
</form>

