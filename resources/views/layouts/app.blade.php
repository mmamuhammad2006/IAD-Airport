<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | IAD Dulles International Airport {{--  {{ config('app.name', 'Laravel') }} --}}</title>
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    {{-- metatags --}}
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="canonical" href="@yield('canonical')" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- style.css --}}
    <link rel="stylesheet" href={{ asset('style.css') }}>
    <!-- Bootstrap CSS v5.3.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- image zoom js cdn  -->
    <script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js" type="application/javascript"></script>
    <!-- css animation library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- line icons -->
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- Google Map Api --}}
    {{-- <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGYVF6PWG9X6sx811uhbhkETtdIXWPNpE"> </script> --}}
    {{-- Airlabs Map Api --}}
    {{-- <script async src="https://airlabs.co/example/map?key=821c8b89-918b-4c4c-9011-9322aa38dfdd"> </script> --}}

</head>

<body>
    <div id="app">
        @hasSection('content')
            <div class="container-fluid bg-darkParrot">
                <div class="container m-auto" style="height: 102px">
                    @include('mainPages.navbar', ['bgDarkParrot' => true, 'height'=>  '102px'])
                </div>
            </div>
            @yield('content')
            <div class="container-fluid bg-darkBlack">
                <div class="container m-auto">
                    @include('mainPages.footer')
                </div>
            </div>
        @else
            @yield('homeContent')
        @endif
    </div>
    @stack('scripts')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- waypoints cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
        integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('animate.js') }}"></script>
</body>

</html>
