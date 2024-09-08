@extends('frontend.layouts.app')
@section('title')
    Stage 01 | Servay
@endsection
@section('css')
    <style>
        .circles {
            height: 110% !important;
        }

        .age-option {
            background-color: white;
            color: black;
            padding: 14px 22px;
            font-size: 1.25em;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.2);
        }

        .age-option:hover {
            background-color: rgb(255, 255, 127);
            color: black;
            box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.3);
        }

        .age-option.selected {
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
                <form action="{{ route('stage-1.submit') }}" method="POST">
                    @csrf

                    <div class="mb-5">
                        <h4 class="mb-3 text-lg text-center font-bold tracking-tight leading-6 text-white">
                            Avatar-based Learning Partners in Constructive Learning
                        </h4>
                        <hr class="mb-6">

                        
                        <div>
                            <h3 class="mt-8 mb-5 text-xl font-medium tracking-tight leading-6 text-yellow">
                                <div class="grid grid-flow-col">
                                    <div class="col-span-1">01. </div>
                                    <div class="col-span-12">What is the parent's name? *</div>
                                </div>
                            </h3>
                            <div>
                                <input type="text" id="name"
                                    value="{{ old('name') ?? ($servayDetails->name ?? '') }}" name="name"
                                    class="bg-gray-50 border text-lg border-gray-300 text-gray-900 rounded font-bold focus:ring-yellow-200 focus:border-yellow-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-200 dark:focus:border-yellow-200"
                                    required />
                            </div>
                        </div>

                        <div>
                            <h3 class="mt-8 mb-5 text-xl font-medium tracking-tight leading-6 text-yellow">
                                <div class="grid grid-flow-col">
                                    <div class="col-span-1">02. </div>
                                    <div class="col-span-12">What is the kid's name? *</div>
                                </div>
                            </h3>
                            <div>
                                <input type="text" id="parent_name"
                                    value="{{ old('parent_name') ?? ($servayDetails->parent_name ?? '') }}" name="parent_name"
                                    class="bg-gray-50 border text-lg border-gray-300 text-gray-900 rounded font-bold focus:ring-yellow-200 focus:border-yellow-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-200 dark:focus:border-yellow-200"
                                    required />
                            </div>
                        </div>
                        <div>
                            <h3 class="mt-8 mb-5 text-xl font-medium tracking-tight leading-6 text-yellow">
                                <div class="grid grid-flow-col gap-4">
                                    <div class="col-span-2">03. </div>
                                    <div class="col-span-12">What is the kid's school? (or where are you from?)</div>
                                </div>
                            </h3>
                            <div>
                                <input type="text" id="school"
                                    value="{{ old('school') ?? ($servayDetails->school ?? '') }}" name="school"
                                    class="bg-gray-50 border text-lg border-gray-300 text-gray-900 rounded font-bold focus:ring-yellow-200 focus:border-yellow-200 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-200 dark:focus:border-yellow-200" />
                            </div>
                        </div>
                        <div>
                            <h3 class="mt-8 mb-5 text-xl font-medium tracking-tight leading-6 text-yellow">
                                <div class="grid grid-flow-col">
                                    <div class="col-span-1">04. </div>
                                    <div class="col-span-12">What is the kid age? *</div>
                                </div>
                            </h3>
                            <div>
                                <input type="hidden" name="age"
                                    value="{{ old('age') ?? ($servayDetails->age ?? '') }}">
                                <div class="flex justify-center gap-8 mb-8">
                                    <div class="age-option {{ old('age') ?? ($servayDetails->age ?? '') == 3 ? 'selected' : '' }} shadow-xl"
                                        data-id="3">3
                                    </div>
                                    <div class="age-option {{ old('age') ?? ($servayDetails->age ?? '') == 4 ? 'selected' : '' }} shadow-xl"
                                        data-id="4">4
                                    </div>
                                    <div class="age-option {{ old('age') ?? ($servayDetails->age ?? '') == 5 ? 'selected' : '' }} shadow-xl"
                                        data-id="5">5
                                    </div>
                                </div>
                                <div class="flex justify-center gap-8">
                                    <div class="age-option {{ old('age') ?? ($servayDetails->age ?? '') == 6 ? 'selected' : '' }} shadow-xl"
                                        data-id="6">6
                                    </div>
                                    <div class="age-option {{ old('age') ?? ($servayDetails->age ?? '') == 7 ? 'selected' : '' }} shadow-xl"
                                        data-id="7">7
                                    </div>
                                    <div class="age-option {{ old('age') ?? ($servayDetails->age ?? '') == 8 ? 'selected' : '' }} shadow-xl"
                                        data-id="8">8
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-12 mb-5">
                        <a href="{{ route('index') }}" type="button" class="kid-button-back">Back</a>
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

            $('.age-option').click(function() {
                $('.age-option').removeClass('selected');
                $(this).addClass('selected');
                $('input[name="age"]').val($(this).data('id'));
            });
        });
    </script>
@endsection
