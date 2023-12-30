<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Links -->
    @include('backend.layouts.partials.links')
</head>

<body class="light">
    <main class="app-wrapper">
        <!-- Header -->
        @include('backend.layouts.partials.header')

        <!-- Sidebar -->
        @include('backend.layouts.partials.sidebar')

        @yield('content')
    </main>

    <!-- scripts -->
    @include('backend.layouts.partials.scripts')
</body>

</html>
