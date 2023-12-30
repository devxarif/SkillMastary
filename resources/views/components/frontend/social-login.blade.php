<div class="form-signup">
    <h6>{{ __('Sign in with') }}</h6>
    <div class="form-signup__wrapper">
        <a class="social-medaia-box-btn google icon-common" href="{{ route('website.social.login', 'google') }}"> Google </a>
        <a class="social-medaia-box-btn facebook icon-common" href="{{ route('website.social.login', 'facebook') }}"> Facebook </a>
        <a class="social-medaia-box-btn apple icon-common" href="{{ route('website.social.login', 'apple') }}"> Apple </a>
    </div>
</div>
