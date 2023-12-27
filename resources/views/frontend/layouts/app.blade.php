<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Links -->
    @include('frontend.layouts.partials.links')
</head>

<body>
    <!-- Header Section-->
    @include('frontend.layouts.partials.header')

    @yield('content')

    <!-- Footer Section -->
    @include('frontend.layouts.partials.footer')

    <!-- Scripts -->
    @include('frontend.layouts.partials.scripts')
</body>

</html>
