<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="horizontal" data-layout-style=""
    data-layout-position="fixed" data-topbar="light">

<head>
    <meta charset="utf-8" />
    <title> @yield('title')| Dulz & Cheny Avatar-based Learning Partners in Constructive Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->


    @include('frontend.layouts.head-css')
    @yield('css')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="mx-wd" style="background-color:#3f6455; ">
    <div class="area mx-wd">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <div id="layout-wrapper" class="context">
        <div class=" flex justify-center">

            <div class=" mx-wd">
                @yield('content')
            </div>

        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const colors = [
                "rgba(135, 206, 235, 0.5)", // Sky Blue
                "rgba(255, 255, 102, 0.5)", // Yellow
                "rgba(255, 105, 180, 0.5)", // Hot Pink
                "rgba(50, 205, 50, 0.5)", // Lime Green
                "rgba(255, 165, 0, 0.5)", // Orange
                "rgba(230, 230, 250, 0.5)", // Lavender
                "rgba(255, 182, 193, 0.5)", // Light Pink
                "rgba(0, 191, 255, 0.5)", // Deep Sky Blue
                "rgba(255, 0, 0, 0.5)", // Red
                "rgba(255, 223, 0, 0.5)", // Yellow Orange
                "rgba(0, 128, 128, 0.5)", // Teal
                "rgba(255, 69, 0, 0.5)", // Red Orange
                "rgba(128, 0, 128, 0.5)", // Purple
                "rgba(128, 128, 0, 0.5)", // Olive
                "rgba(0, 255, 255, 0.5)", // Cyan
                "rgba(255, 20, 147, 0.5)", // Deep Pink
                "rgba(0, 0, 128, 0.5)" // Navy
            ];

            const circles = document.querySelectorAll(".circles li");

            function randomizeCircles() {
                circles.forEach((circle, index) => {

                    var px = `${Math.random() * (100 - 20) + 20}px`;

                    circle.style.left = `${Math.random() * 100}%`;
                    circle.style.width = px;
                    circle.style.height = px;
                    circle.style.animationDelay = `${Math.random() * 8}s`;
                    circle.style.animationDuration = `${Math.random() * 10 + 10}s`;
                    circle.style.background = colors[index % colors.length];
                });
            }
            randomizeCircles();

            setInterval(randomizeCircles, 150000);
        });
    </script>
    @include('frontend.layouts.vendor-scripts')
    @yield('scripts')
</body>

</html>
