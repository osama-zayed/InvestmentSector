<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ trans('home_trans.Sector') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon" />
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos.css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/flickity.css/flickity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style_ar.css') }}" />
    @if (App::getLocale() == 'en')
    <link rel="stylesheet" href="{{ asset('assets/css/style_en.css') }}" />
    @endif
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

<body>
    <div id="loading-screen">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div>

    <div id="app">
        @include('layouts.nav')

        <main>
            @yield('content')
        </main>
 
        @include('layouts.footer')

    </div>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/vendor/jquery.js/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/type.js/type.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos.js/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/flickity.js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/smoth-scroll.js/smoth-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @if (App::getLocale() == 'ar')
        <script src="{{ asset('assets/js/main_ar.js') }}"></script>
    @else
        <script src="{{ asset('assets/js/main_en.js') }}"></script>
    @endif
</body>

</html>
