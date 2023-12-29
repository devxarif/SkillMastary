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
        @if ($auth_user->role == 'student')
            @include('components.frontend.student.sidebar')
        @elseif ($auth_user->role == 'instructor')
            @include('components.frontend.instructor.sidebar')
        @endif

        <!-- main content -->
        @yield('content')
    </div>

    <!-- Scripts -->
    @include('frontend.layouts.partials.scripts')
</body>

</html>
