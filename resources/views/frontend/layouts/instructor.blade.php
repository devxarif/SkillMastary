<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title & Meta -->
    @include('frontend.layouts.partials.title_meta')

    <!-- Links -->
    @include('frontend.layouts.partials.links')
</head>

<body class="bodybg">
    @php
        $auth_user = authUser();
    @endphp

    <!-- Instrcutor Dashboard Layout Start -->
    <div class="instructor">
        <!-- sidbear -->
        @include('components.frontend.instructor.sidebar')

        <!-- main content -->
        @yield('content')
    </div>

    <!-- Scripts -->
    @include('frontend.layouts.partials.scripts')
</body>

</html>
