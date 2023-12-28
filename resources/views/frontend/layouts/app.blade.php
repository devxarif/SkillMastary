<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title & Meta -->
    @include('frontend.layouts.partials.title_meta')

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
