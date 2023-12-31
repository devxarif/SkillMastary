<div class="login-content">
    <h3>{{ __('Login to your account') }}</h3>
    <form wire:submit="login">
        <div class="fromGroup rt-mb-16">
            <label for="email">{{ __('Email address') }}</label>
            <input wire:model="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="{{ __('Email address') }}" id="email"/>
            @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="fromGroup eye rt-mb-24 forget-password">
            <label for="password-hide_show">{{ __('Password') }} <a href="#">{{ __('Forget Password') }}</a></label>
            <div class="form-control-icon">
                <input wire:model="password" id="password-hide_show" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="{{ __('Password') }}" />
                <div class="has-badge">
                    <i class="ph-eye"></i>
                </div>
            </div>
            @error('password')
                <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        @if (config('captcha.active'))
            <div class="mt-3">
                <div id="captcha" wire:ignore></div>
                @error('captcha')
                    <p class="mb-3 text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        @endif
        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary pill btn-icon d-block">
            <span class="button-content-wrapper">
                <span class="button-icon align-icon-right">
                    <i class="ph-arrow-right"></i>
                </span>
                <span class="button-text">{{ __('Login') }}</span>
            </span>
        </button>
    </form>
</div>
