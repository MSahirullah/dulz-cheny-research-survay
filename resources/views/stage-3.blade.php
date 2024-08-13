@extends('frontend.layouts.app')
@section('title')
    Stage 03 | Servay
@endsection
@section('css')
    <style>
        .circles {
            height: 110% !important;
        }

        .bg-option img {
            height: 100%;
            object-fit: contain;
        }

        .bg-option {
            background-color: white;
            color: black;
            padding: 14px 11px;
            font-size: 1.25em;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.2);
        }

        .bg-option:hover {
            background-color: rgb(255, 255, 127);
            color: black;
            box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.3);
        }

        .bg-option.selected {
            background-color: yellow;
            color: black;
            box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.3);
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
                <form action="{{ route('stage-3.submit') }}" method="POST">
                    @csrf

                    <div class="mb-5">
                        <h4 class="mb-3 text-lg text-center font-bold tracking-tight leading-6 text-white">
                            Avatar-based Learning Partners in Constructive Learning
                        </h4>
                        <hr class="mb-6">

                        <h3 class="mb-5 text-xl font-medium tracking-tight leading-6 text-yellow">
                            <div class="grid grid-flow-col gap-4">
                                <div class="col-span-2">05. </div>
                                <div class="col-span-12">Please choose your favorite characters. (You can choose
                                    multiple images)</div>
                            </div>
                        </h3>
                        <div>
                            <div>
                                @if (old('character'))
                                    @foreach (old('character') as $character)
                                        <input type="hidden" name="character[]" value="{{ $character }}">
                                    @endforeach
                                @elseif(isset($surveyDetails->character))
                                    @foreach ($surveyDetails->character as $character)
                                        <input type="hidden" name="character[]" value="{{ $character }}">
                                    @endforeach
                                @endif

                                @php

                                    $bgs = [
                                        'm1' => URL::asset('images/characters/M1.png'),
                                        'm2' => URL::asset('images/characters/M2.png'),
                                        'm3' => URL::asset('images/characters/M3.png'),
                                        'm4' => URL::asset('images/characters/M4.png'),

                                        'f1' => URL::asset('images/characters/F1.png'),
                                        'f2' => URL::asset('images/characters/F2.png'),
                                        'f3' => URL::asset('images/characters/F3.png'),
                                        'f4' => URL::asset('images/characters/F4.png'),

                                        'a1' => URL::asset('images/characters/A1.png'),
                                        'a2' => URL::asset('images/characters/A2.png'),
                                        'a3' => URL::asset('images/characters/A3.png'),
                                        'a4' => URL::asset('images/characters/A4.png'),
                                        'a5' => URL::asset('images/characters/A5.png'),
                                        'a6' => URL::asset('images/characters/A6.png'),
                                        'a7' => URL::asset('images/characters/A7.png'),
                                        'a8' => URL::asset('images/characters/A8.png'),
                                    ];

                                    $characters = [];
                                    if (old('character')) {
                                        $characters = old('character');
                                    } elseif (isset($servayDetails->character)) {
                                        $characters = $servayDetails->character;
                                    }
                                @endphp

                                <div class="grid grid-cols-2 gap-4 px-4">
                                    @foreach ($bgs as $key => $bg)
                                        <div class="... bg-option {{ in_array($key, $characters) ? 'selected' : '' }} shadow-xl"
                                            data-id="{{ $key }}"">
                                            <img src="{{ $bg }}" class="rounded-md" alt="">

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-12 mb-5">
                        <a href="{{ route('stage-2') }}" type="button" class="kid-button-back">Back</a>
                        <button type="submit" class="kid-button-next">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.12/lottie.min.js"></script>

    <script>
        $(document).ready(function() {

            @if (Session::has('error'))
                flasher.error("{{ Session::get('error') }}");
            @endif

            $('.bg-option').click(function() {
                $(this).toggleClass('selected');

                let selectedValues = [];
                $('.bg-option.selected').each(function() {
                    selectedValues.push($(this).data('id'));
                });

                $('input[name="character[]"]').remove();
                selectedValues.forEach(function(value) {
                    $('<input>').attr({
                        type: 'hidden',
                        name: 'character[]',
                        value: value
                    }).appendTo('form');
                });
            });
        });
    </script>
@endsection
