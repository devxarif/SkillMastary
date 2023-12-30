<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title & Meta -->
    @include('frontend.layouts.partials.title_meta')

    <!-- Links -->
    @include('frontend.layouts.partials.links')
</head>

<body class="">
    <!-- Header -->
    <header class="header-section header-four">
        <div class="container">
            <div class="header-bottom header-four">
                <div class="main-logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/images/logo-cap.png" alt="brand-logo">
                        E-Tutor
                    </a>
                </div>
                <div class="header-bottom-right">
                    @if (request()->routeIs('website.register'))
                        <div class="header-btn-wrap d-flex align-items-center">
                            <p>{{ __("Already have an account ?") }}</p>
                            <a class="button button--md button-p-s" href="{{ route('website.login') }}">{{ __('Sign In') }}</a>
                        </div>
                    @else
                        <div class="header-btn-wrap d-flex align-items-center">
                            <p>{{ __("Don't have an account ?") }}</p>
                            <a class="button button--md button-p-s" href="{{ route('website.register') }}">{{ __('Create Account') }}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </header>

    @yield('content')

   <!-- Scripts -->
   @include('frontend.layouts.partials.scripts')
</body>

</html>
