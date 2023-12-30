<div class="register-right">
    <!-- register form -->
    <div class="register-formWrapper">
        <form wire:submit="register" class="form" x-data="{ openEye: false, openEye2: false }">
            <h2 class="register-title">{{ __('Create your account') }}</h2>
            <div class="form-group form-group--">
                <div class="form-field form-field--">
                    <label for="fname">{{ __('Account Type') }}</label>
                    <div class="field-wrapper d-flex gap-2">
                        <div class="w-30">
                            <input wire:model="type" type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked value="student">
                            <label class="btn btn-outline-primary" for="success-outlined">{{ __('Student') }}</label>
                        </div>
                        <div class="w-30">
                            <input wire:model="type" type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" value="instructor">
                            <label class="btn btn-outline-primary" for="danger-outlined">{{ __('Instructor') }}</label>
                        </div>
                    </div>
                    @error('type')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group form-group--">
                <div class="form-field form-field--">
                    <label for="fname">{{ __('Full Name') }}</label>
                    <div class="field-wrapper">
                        <input wire:model="name" type="text" placeholder="{{ __('Full Name') }}" id="fname" class="@error('name') border-danger @enderror">
                        <span class="icon icon--success">
                            <img src="{{ asset('frontend') }}/images/svg-icon/checkcircle.svg" alt="success-icon">
                        </span>
                        <span class="icon icon--warning">
                            <img src="{{ asset('frontend') }}/images/svg-icon/Warning.svg" alt="warning-icon">
                        </span>
                    </div>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-field form-field--">
                    <label for="email">{{ __('Email address') }}</label>
                    <div class="field-wrapper">
                        <input wire:model="email" type="email" placeholder="{{ __('Email address') }}" id="email" autocomplete="off" class="@error('email') border-danger @enderror">
                        <span class="icon icon--success">
                            <img src="{{ asset('frontend') }}/images/svg-icon/checkcircle.svg" alt="success-icon">
                        </span>
                        <span class="icon icon--warning">
                            <img src="{{ asset('frontend') }}/images/svg-icon/Warning.svg" alt="warning-icon">
                        </span>
                    </div>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group form-group--2 my-0">
                <div class="form-field form-field--">
                    <label for="password">{{ __('Password') }}</label>
                    <div class="field-wrapper">
                        <input wire:model="password" :type="openEye ? 'text':'password'" placeholder="{{ __('Password') }}" id="password" autocomplete="off" class="@error('password') border-danger @enderror">
                        <span @click="openEye = !openEye" style="position: absolute;right: 2%;top: 30%;cursor: pointer">
                            <x-svg.eye-open-icon xShow="!openEye" />
                            <x-svg.eye-close-icon xShow="openEye" />
                        </span>
                    </div>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-field form-field--">
                    <label for="confirmPass">{{ __('Confirm Password') }}</label>
                    <div class="field-wrapper">
                        <input wire:model="password_confirmation" :type="openEye2 ? 'text':'password'" placeholder="{{ __('Confirm Password') }}" id="confirmPass" class="@error('password_confirmation') border-danger @enderror">
                        <span @click="openEye2 = !openEye2" style="position: absolute;right: 2%;top: 30%;cursor: pointer">
                            <x-svg.eye-open-icon xShow="!openEye2" />
                            <x-svg.eye-close-icon xShow="openEye2" />
                        </span>
                    </div>
                    @error('password_confirmation')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group  form-group--2 align-items-center my-4 py-2">
                <div class="form-check">
                    <input id="accept_condition" class="form-check-input" type="checkbox">
                    <label for="accept_condition" class="form-check-label">
                        {{ __('I Agree with all of your') }} <a href="#">Terms &amp; Conditions</a>
                    </label>
                </div>
                <button type="submit" class="button button--md button-i--r">
                    {{ __('Create Account') }}
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 12H20.25" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="form-signup">
                <h6>Sign up with</h6>
                <div class="form-signup__wrapper">
                    <a class="social-medaia-box-btn google icon-common" href="#"> Google </a>
                    <a class="social-medaia-box-btn facebook icon-common" href="#"> Facebook </a>
                    <a class="social-medaia-box-btn apple icon-common" href="#"> Apple </a>
                </div>
            </div>
        </form>
    </div>
</div>
