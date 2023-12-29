@extends('frontend.layouts.auth')

@section('title', __('Login'))

@section('content')
<main class="register">
    <div class=" register__content">
        <!-- Left Content  -->
        <div class="register-left">
            <div class="register-imgWrapper">
                <img src="{{ asset('frontend') }}/images/banner/rocket.png" alt="rocket">
            </div>
        </div>

        <!-- Right  Content  -->
        @livewire('frontend.auth.register')
    </div>
</main>
@endsection
