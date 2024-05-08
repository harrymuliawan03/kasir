<!DOCTYPE html>
<html lang="en">

<head>

    <title>Kasir - Home</title>

    @yield('style')
    @yield('css')
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('assets/css/layout.css')}}">

</head>

<body>
    <!-- <div class="min-h-[100vh] max-h-[100vh] w-full flex justify-center items-center border"> -->
    <div class="header-banner flex justify-center items-center min-h-[100vh] h-auto w-full bg-yellow-50">
        @yield('contents')
    </div>
    <!-- </div> -->

    @yield('scripts')
</body>

</html>