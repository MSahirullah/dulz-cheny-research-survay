@extends('frontend.layouts.app')
@section('title')
    Thank You
@endsection
@section('css')
    <style>
        .circles {
            height: 100% !important;
        }

        .kid-button-back {
            background-color: #eb5120;
            color: white;
            font-size: 1.25em;
            font-weight: bold;
            padding: 8px 25px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
            box-shadow: 0 5px #c03309;
        }

        .kid-button-back:active {
            transform: translateY(4px);
            box-shadow: 0 2px #c03309;
        }

        .kid-button-back:hover {
            background-color: #ef1b04;
            transform: translateY(4px);
        }

        .kid-button-next {
            background-color: #7fb800;
            color: white;
            font-size: 1.25em;
            font-weight: bold;
            padding: 8px 25px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
            box-shadow: 0 5px #679600;
        }

        .kid-button-next:active {
            transform: translateY(4px);
            box-shadow: 0 2px #679600;
        }

        .kid-button-next:hover {
            background-color: #37b800;
            transform: translateY(4px);
        }
    </style>
@endsection
@section('content')
    <div>
        <div class="mt-3 px-3 pt-3">
            <div class="max-w-sm bg-whiterounded-lg  dark:bg-gray-800 dar relative">

                <div class="px-10 pb-1 flex justify-center">
                    <div class="w-fit">
                        <img class="text-center" src="{{ URL::asset('images/logo.png') }}" alt="Logo" width="90">
                    </div>
                </div>
                <div class="mb-5">
                    <h4 class="mb-3 text-lg text-center font-bold tracking-tight leading-6 text-white">
                        Avatar-based Learning Partners in Constructive Learning
                    </h4>

                    <h3 class="mb-5 text-lg text-center font-medium tracking-tight leading-6 text-yellow-300">
                        Research Survey
                    </h3>
                </div>

                <div class="w-full h-72 rounded"
                    style="background-image:url('{{ URL::asset('images/background.png') }}'); background-size: cover; background-position:center;">
                    <div class="flex gap-2 justify-center items-end h-72 p-2">
                        <div class="animate__animated animate__slideInLeft">
                            <img src="{{ URL::asset('images/chr2.png') }}" alt="Character 02" width="84">
                        </div>
                        <div class="animate__animated animate__slideInRight">
                            <img src="{{ URL::asset('images/chr1.png') }}" alt="Character 01" width="90">
                        </div>
                    </div>
                </div>

                <p class="text-base my-4 p-2 text-center text-yellow-50 ">
                    <strong class="text-lg"> Thank you for taking the time to complete our survey. Your feedback is
                        essential to our
                        research. ❤️</strong>
                </p>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('index') }}"type="button" class="kid-button-next">Go Back to Home</a>

    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.12/lottie.min.js"></script>
    <script></script>
@endsection
