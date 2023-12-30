@extends('backend.layouts.auth')

@section('title', __('Login'))

@section('content')
    @livewire('backend.auth.login')
@endsection
