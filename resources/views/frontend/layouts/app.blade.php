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


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @include('frontend.layouts.head-css')
    @yield('css')

    <style>
        .time-container {
            display: flex;
            justify-content: center;
            /* height: 100vh; */
            gap: 20px;
            align-items: center;
        }

        .time-box {
            background-color: var(--highlight-color);
            padding: 50px;
            border-radius: 50%;
            /* Makes the box circular */
            color: #fff;
            font-size: 2.5rem;
            font-weight: bold;
            width: 160px;
            height: 160px;
            /* Ensure equal width and height for a perfect circle */
            text-align: center;
            box-sizing: border-box;
        }

        /* Adding separate borders for each box */
        #minutesBox {
            border: 5px solid rgb(0, 217, 255);
            padding: 25px;
            /* Yellow border for the minutes box */
        }

        #secondsBox {
            border: 5px solid greenyellow;
            padding: 25px;
            /* Blue border for the seconds box */
        }

        .label {
            font-size: 1rem;
            color: #fff;
            margin-top: 5px;
            text-transform: uppercase;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="time-container-outer-div" style="background: rgb(0 0 0 / 52%);; height:100vh; width:100wh; display:none;">
        <div class="d-flex flex-column gap-4 justify-content-center align-items-center" style="height:100vh;">
            <div class="akaya text-center " style="font-size:32px; font-weight:600; color:yellow;letter-spacing: 2px;">
                It's Play Time...
            </div>
            <div class="time-container">
                <div class="time-box" id="minutesBox">
                    <div id="minutes">00</div>
                    <div class="label akaya">Minutes</div>
                </div>
                <div class="time-box" id="secondsBox">
                    <div id="seconds">00</div>
                    <div class="label akaya">Seconds</div>
                </div>
            </div>
        </div>
    </div>

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
