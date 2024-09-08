@extends('frontend.layouts.app')
@section('title')
    Stage 04 | Survey
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

        .circles {
            height: 110% !important;
        }

        .audio-option {
            background-color: white;
            color: black;
            padding: 14px;
            font-size: 1em;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .audio-option:hover {
            background-color: rgb(255, 255, 127);
            color: black;
            box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.3);
        }

        .audio-option.selected {
            background-color: yellow;
            color: black;
            box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.3);
        }

        .audio-option audio {
            width: 100%;
            max-width: 300px;
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
                <form action="{{ route('stage-4.submit') }}" method="POST">
                    @csrf

                    <div class="mb-5">
                        <h4 class="mb-3 text-lg text-center font-bold tracking-tight leading-6 text-white">
                            Audio-based Learning Partners in Constructive Learning
                        </h4>
                        <hr class="mb-6">

                        <h3 class="mb-5 text-xl font-medium tracking-tight leading-6 text-yellow">
                            <div class="grid grid-flow-col gap-4">
                                <div class="col-span-2">07. </div>
                                <div class="col-span-12">Please choose your favorite audio clips. (You can choose
                                    multiple audio clips)</div>
                            </div>
                        </h3>
                        <div>
                            <div>
                                @if (old('audio'))
                                    @foreach (old('audio') as $audio)
                                        <input type="hidden" name="audio[]" value="{{ $audio }}">
                                    @endforeach
                                @elseif(isset($surveyDetails->audio))
                                    @foreach ($surveyDetails->audio as $audio)
                                        <input type="hidden" name="audio[]" value="{{ $audio }}">
                                    @endforeach
                                @endif

                                @php
                                    $audios = [
                                        'bonnie' => URL::asset('audios/Bonnie.m4a'),
                                        'daphne' => URL::asset('audios/Daphne.m4a'),
                                        'mickey' => URL::asset('audios/Mickey.m4a'),
                                        'timmy' => URL::asset('audios/Timmy.m4a'),
                                    ];

                                    $selectedAudios = [];
                                    if (old('audio')) {
                                        $selectedAudios = old('audio');
                                    } elseif (isset($servayDetails->audio)) {
                                        $selectedAudios = $servayDetails->audio;
                                    }
                                @endphp

                                <div class="grid grid-cols-1 gap-4 px-4">
                                    @foreach ($audios as $key => $audioUrl)
                                        <div class="audio-option {{ in_array($key, $selectedAudios) ? 'selected' : '' }} shadow-xl"
                                            data-id="{{ $key }}">
                                            <audio controls>
                                                <source src="{{ $audioUrl }}" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <p class="mt-2">{{ $key }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-12 mb-5">
                        <a href="{{ route('stage-3') }}" type="button" class="kid-button-back">Back</a>
                        <button type="submit" class="kid-button-next">Finish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            @if (Session::has('error'))
                flasher.error("{{ Session::get('error') }}");
            @endif

            let audios = document.querySelectorAll('.audio-option audio');

            audios.forEach(function(audio) {
                audio.addEventListener('play', function() {
                    audios.forEach(function(otherAudio) {
                        if (otherAudio !== audio) {
                            otherAudio.pause();
                            otherAudio.currentTime = 0; // Optional: reset to the start
                        }
                    });
                });
            });

            $('.audio-option').click(function() {
                $(this).toggleClass('selected');

                let selectedValues = [];
                $('.audio-option.selected').each(function() {
                    selectedValues.push($(this).data('id'));
                });

                $('input[name="audio[]"]').remove();
                selectedValues.forEach(function(value) {
                    $('<input>').attr({
                        type: 'hidden',
                        name: 'audio[]',
                        value: value
                    }).appendTo('form');
                });
            });
        });
    </script>
@endsection
