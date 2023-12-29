<div class="register-right">
    <div class="register-formWrapper">
        <form wire:submit="login" class="form" x-data="{ openEye: false }">
            <h2 class="register-title">{{ __('Sign In to your account') }}</h2>

            <div class="form-group">
                <div class="form-field form-field--">
                    <label for="email">{{ __('Email Address') }}</label>
                    <div class="field-wrapper">
                        <input wire:model="email" type="email" placeholder="{{ __('Email Address') }}" id="email" class="@error('email') border-danger @enderror"/>
                        <span class="icon icon--success">
                            <img src="{{ asset('frontend') }}/images/svg-icon/checkcircle.svg"
                                alt="success-icon" />
                        </span>
                        <span class="icon icon--warning">
                            <img src="{{ asset('frontend') }}/images/svg-icon/Warning.svg"
                                alt="warning-icon" />
                        </span>
                    </div>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group ">
                <div class="form-field form-field--">
                    <label for="password">{{ __('Password') }}</label>
                    <div class="field-wrapper">
                        <input wire:model="password" :type="openEye ? 'text':'password'" placeholder="Create Password" id="password" class="@error('password') border-danger @enderror" />
                        <span @click="openEye = !openEye" style="position: absolute;right: 2%;top: 30%;cursor: pointer">
                            <x-svg.eye-open-icon xShow="!openEye" />
                            <x-svg.eye-close-icon xShow="openEye" />
                        </span>
                    </div>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group  form-group--2 align-items-center my-2 py-2">
                <div class="form-check">
                    <input wire:model="remember" id="remember_me" class="form-check-input" type="checkbox">
                    <label for="remember_me" class="form-check-label">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <button wire:loading.attr="disabled" type="submit" class="button button--md button-i--r">
                    {{ __('Sign In') }}
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 12H20.25" stroke="white" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
            </div>
            <div class="form-signup">
                <h6>{{ __('Sign in with') }}</h6>
                <div class="form-signup__wrapper">
                    <a class="social-medaia-box-btn google icon-common" href="#"> Google </a>
                    <a class="social-medaia-box-btn facebook icon-common" href="#"> Facebook </a>
                    <a class="social-medaia-box-btn apple icon-common" href="#"> Apple </a>
                </div>
            </div>
        </form>
    </div>
</div>
