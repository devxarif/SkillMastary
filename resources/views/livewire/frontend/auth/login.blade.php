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
            @if (config('captcha.active'))
                <div>
                    <div id="captcha" wire:ignore></div>
                    @error('captcha')
                        <p class="mb-3 text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            @endif
            <div class="form-group  form-group--2 align-items-center my-2 py-2">
                <div class="form-check">
                    <input wire:model="remember" id="remember_me" class="form-check-input" type="checkbox">
                    <label for="remember_me" class="form-check-label">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <button wire:loading.attr="disabled" type="submit" class="button button--md button-i--r">
                    {{ __('Sign In') }}

                    <span wire:loading.remove wire:target="login">
                        <x-svg.arrow-right-icon />
                    </span>
                    <span wire:loading wire:target="login">
                        <x-svg.loading-icon />
                    </span>
                </button>
            </div>

            {{-- Social Login --}}
            <x-frontend.social-login />
        </form>
    </div>
</div>

@push('frontend_scripts')
    @if (config('captcha.active'))
        <script src="https://www.google.com/recaptcha/api.js?onload=handle&render=explicit" async defer></script>

        <script>
            var handle = function(e) {
                widget = grecaptcha.render('captcha', {
                    'sitekey': '{{ config('captcha.sitekey') }}',
                    'theme': 'light', // you could switch between dark and light mode.
                    'callback': verify
                });
            }
            var verify = function(response) {
                @this.set('captcha', response)
            }
        </script>
    @endif
@endpush
