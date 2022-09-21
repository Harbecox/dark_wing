<form id="personal_data_form" wire:submit.prevent="submit" method="post">
    <div class="personal_main d-flex justify-content-center">
        <div class="personal_main_left">
            <img style="border-radius: 50%; width: 100px; height: 100px" src="{{ Storage::url($user->avatar ?? 'images/blank-profile-picture-973460_150.png') }}">
            <div class="camera d-flex align-items-center justify-content-center">
                <img id="profile_avatar_button" src="/image/Camera.svg"> <input id="profile_avatar_input" class="d-none"  type="file" wire:model="avatar">
            </div>
        </div>
        <div class="personal_main_right d-flex">
            <div class="d-flex flex-column personal_info">
                <div class="personal_info_line">
                    <p class="fs-20 fw-normal lh-140 text-white">Your name</p>
                    <div class="d-flex">
                        <input wire:model="user.firstName" value="{{$user->firstName}}"
                               class="d-inline p_lg fw-normal lh-140 text-white bg-transparent border-0" id="name">
                        <label class="edit d-flex align-items-center" for="name"><img src="/image/Edit.png"></label>
                    </div>
                </div>
                <div class="personal_info_line">
                    <p class="fs-20 fw-normal lh-140 text-white">Company name</p>
                    <div class="d-flex">
                        <input wire:model="user.company" value="{{$user->company}}"
                               class="p_lg fw-normal lh-140 text-white bg-transparent border-0" id="company">
                        <label class="edit d-flex align-items-center" for="company"><img src="/image/Edit.png"></label>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column personal_info">
                <div class="personal_info_line">
                    <p class="fs-20 fw-normal lh-140 text-white">E-mail</p>
                    <div class="d-flex">
                        <p wire:model="user.email"
                           class="p_lg fw-normal lh-140 text-white opacity-100">{{$user->email}}</p>
                    </div>
                </div>
                <div class="personal_info_line">
                    <p class="fs-20 fw-normal lh-140 text-white">Accounting email</p>
                    <div class="d-flex">
                        <input wire:model="user.accounting_email" value="{{$user->accounting_email}}"
                               class="p_lg fw-normal lh-140 text-white bg-transparent border-0" id="ac_email">
                        <label class="edit d-flex align-items-center" for="ac_email"><img src="/image/Edit.png"></label>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column personal_info">
                <div class="personal_info_line">
                    <p class="fs-20 fw-normal lh-140 text-white">Phone number</p>
                    <div class="d-flex">
                        <p wire:model="user.phone"
                           class="p_lg fw-normal lh-140 text-white opacity-100">{{$user->phone}}</p>
                    </div>
                </div>
                <div class="personal_info_line">
                    <p class="fs-20 fw-normal lh-140 text-white">Billing address</p>
                    <div class="d-flex">
                        <input wire:model="user.billing_address" value="{{$user->billing_address}}"
                               class="p_lg fw-normal lh-140 text-white bg-transparent border-0" id="address">
                        <label class="edit d-flex align-items-center" for="address"><img src="/image/Edit.png"></label>
                    </div>
                </div>
            </div>
            <button type="submit" style="display: none">Save</button>
        </div>
    </div>
</form>

