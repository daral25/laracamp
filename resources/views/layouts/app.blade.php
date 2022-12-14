<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title') | Landing Page</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut-icon" type="image/x-icon" href="">

    @stack('before-style')

    <!-- include style -->
    @include('includes.style')

    @stack('after-style')
</head>
<body>
    @include('includes.header')
        @yield('content')
    @include('includes.footer')

    @stack('before-script')

    <!--after script -->
    @include('includes.script')

    @stack('after-script')
</body>
</html>