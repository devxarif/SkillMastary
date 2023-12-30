@extends('backend.layouts.auth')

@section('title', __('Login'))

@section('auth-content')
    @livewire('backend.auth.login')
@endsection
