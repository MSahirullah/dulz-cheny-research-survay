<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dulz & Cheny | Avatar-based Learning Partners in Constructive Learning</title>

    <link rel="icon" href="{{ asset('frontend/favicon.ico') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @include('frontend.layouts.head-css')
    @yield('css')

</head>

<body>
    <div id="loading-backdrop">
        <div class="spinner-grow text-light" role="status">
        </div>
        <div class="backdrop-text text-white fw-500 mt-2 text-uppercase">LOADING.</div>
        <div class="text-white fw-400 mt-2 backdrop-desc"></div>
        <div class="text-white fw-400 mt-2 backdrop-btn" style="display: none">
            <button id="" data-id="" class="button-11"></button>
        </div>
    </div>
    @yield('content')

    @include('frontend.layouts.vendor-scripts')
    @yield('scripts')
</body>

</html>
