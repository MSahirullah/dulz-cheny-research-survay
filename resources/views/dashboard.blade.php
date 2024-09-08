<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard -  Dulz & Cheny Avatar-based Learning Partners in Constructive Learning') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4">
                <div class="... col-span-2">
                    <div
                        class="block p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                        <div class="flex justify-between">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Total Kids
                            </h5>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $totalKids }}
                            </h5>
                        </div>
                    </div>

                </div>
                <div class=" ...">
                    <div
                        class="block  p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Stats for Backgrounds
                        </h5>
                        <div>
                            <div class="relative overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                ID
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                Image
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                Responses
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($columnsBackground as $key => $background)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $key }}
                                                </th>
                                                <td class="px-6 py-2 text-center flex justify-center">
                                                    <div>
                                                        <img src="{{ URL::asset('images/bg/' . $key . '.png') }}"
                                                            class="rounded-md text-center" alt="{{ $key }}"
                                                            width="100px">
                                                    </div>
                                                </td>
                                                <td class="px-6 py-2 text-center font-bold">
                                                    {{ $background }}
                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="...">
                    <div
                        class="block  p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Stats for Characters
                        </h5>
                        <div>
                            <div class="relative overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                ID
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                Image
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                Responses
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($columnsCharacter as $key => $character)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ Str::upper($key) }}
                                                </th>
                                                <td class="px-6 py-2 text-center flex justify-center">
                                                    <div>
                                                        <img src="{{ URL::asset('images/characters/' . Str::upper($key) . '.png') }}"
                                                            class="rounded-md text-center" alt="{{ $key }}"
                                                            width="60px">
                                                    </div>
                                                </td>
                                                <td class="px-6 py-2 text-center font-bold">
                                                    {{ $character }}
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="...">
                    <div
                        class="block  p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Stats for Audio
                        </h5>
                        <div>
                            <div class="relative overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                ID
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                Audio
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                Responses
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($columnsAudio as $key => $audio)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ Str::upper($key) }}
                                                </th>
                                                <td class="px-6 py-2 text-center flex justify-center">
                                                    <div class="audio-option">
                                                        <audio controls>
                                                            <source src="{{ URL::asset('audios/Bonnie.m4a') }}"
                                                                type="audio/mpeg">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-2 text-center font-bold">
                                                    {{ $audio }}
                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="...">
                    <div
                        class="block  p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Age Categories
                        </h5>
                        <div>
                            <div class="relative overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                Age
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                No. Results
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ([3, 4, 5, 6, 7, 8] as $id)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $id }}
                                                </th>
                                                <th scope="row"
                                                    class="px-6 py-2 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                                    @php
                                                        $res = $kids->where('age', $id)->count();
                                                    @endphp
                                                    {{ $res }}
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="... mt-6 col-span-2">
                    <div
                        class="block  p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Survey Results
                        </h5>
                        <div>
                            <div class="relative overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                ID
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                parent name
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                kid name
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                age
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                school
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                backgrounds
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                characters
                                            </th>
                                            <th scope="col" class="px-6 py-2 text-center ">
                                                audios
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kids as $key => $kid)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $kid['id'] }}
                                                </th>
                                                <td class="px-6 py-2 text-start font-bold">
                                                    {{ $kid['parent_name'] }}
                                                </td>
                                                <td class="px-6 py-2 text-start font-bold">
                                                    {{ $kid['name'] }}
                                                </td>
                                                <td class="px-6 py-2 text-start font-bold">
                                                    {{ $kid['age'] }}
                                                </td>
                                                <td class="px-6 py-2 text-start font-bold">
                                                    {{ $kid['school'] }}
                                                </td>
                                                <td class="px-6 py-2 text-start font-bold">
                                                    @php
                                                        $bg = $kid->backgrounds()->first();
                                                        $str = '';

                                                        if ($bg) {
                                                            if ($bg['0'] == 1) {
                                                                $str .= '0, ';
                                                            }
                                                            if ($bg['1'] == 1) {
                                                                $str .= '1, ';
                                                            }
                                                            if ($bg['2'] == 1) {
                                                                $str .= '2, ';
                                                            }
                                                            if ($bg['3'] == 1) {
                                                                $str .= '3, ';
                                                            }
                                                            if ($bg['4'] == 1) {
                                                                $str .= '4, ';
                                                            }
                                                            if ($bg['5'] == 1) {
                                                                $str .= '5, ';
                                                            }
                                                            if ($bg['6'] == 1) {
                                                                $str .= '6, ';
                                                            }
                                                            if ($bg['7'] == 1) {
                                                                $str .= '7, ';
                                                            }
                                                            if ($bg['8'] == 1) {
                                                                $str .= '8, ';
                                                            }
                                                            if ($bg['9'] == 1) {
                                                                $str .= '9, ';
                                                            }
                                                        }
                                                    @endphp

                                                    {{ $str }}
                                                </td>
                                                <td class="px-6 py-2 text-start font-bold">
                                                    @php
                                                        $bg = $kid->characters()->first();
                                                        $str = '';

                                                        if ($bg) {
                                                            if ($bg['m1'] == 1) {
                                                                $str .= 'M1, ';
                                                            }
                                                            if ($bg['m2'] == 1) {
                                                                $str .= 'M2, ';
                                                            }
                                                            if ($bg['m3'] == 1) {
                                                                $str .= 'M3, ';
                                                            }
                                                            if ($bg['m4'] == 1) {
                                                                $str .= 'M4, ';
                                                            }
                                                            if ($bg['f1'] == 1) {
                                                                $str .= 'F1, ';
                                                            }
                                                            if ($bg['f2'] == 1) {
                                                                $str .= 'F2, ';
                                                            }
                                                            if ($bg['f3'] == 1) {
                                                                $str .= 'F3, ';
                                                            }
                                                            if ($bg['f4'] == 1) {
                                                                $str .= 'F4, ';
                                                            }
                                                            if ($bg['a1'] == 1) {
                                                                $str .= 'A1, ';
                                                            }
                                                            if ($bg['a2'] == 1) {
                                                                $str .= 'A2, ';
                                                            }
                                                            if ($bg['a3'] == 1) {
                                                                $str .= 'A3, ';
                                                            }
                                                            if ($bg['a4'] == 1) {
                                                                $str .= 'A4, ';
                                                            }
                                                            if ($bg['a5'] == 1) {
                                                                $str .= 'A5, ';
                                                            }
                                                            if ($bg['a6'] == 1) {
                                                                $str .= 'A6, ';
                                                            }
                                                            if ($bg['a7'] == 1) {
                                                                $str .= 'A7, ';
                                                            }
                                                            if ($bg['a8'] == 1) {
                                                                $str .= 'A8, ';
                                                            }
                                                        }
                                                    @endphp

                                                    {{ $str }}
                                                </td>
                                                <td class="px-6 py-2 text-start font-bold">
                                                    @php
                                                        $bg = $kid->audios()->first();
                                                        $str = '';
                                                        if ($bg) {
                                                            if ($bg['bonnie'] == 1) {
                                                                $str .= 'Bonnie, ';
                                                            }
                                                            if ($bg['daphne'] == 1) {
                                                                $str .= 'Daphne, ';
                                                            }
                                                            if ($bg['mickey'] == 1) {
                                                                $str .= 'Mickey, ';
                                                            }
                                                            if ($bg['timmy'] == 1) {
                                                                $str .= 'Timmy, ';
                                                            }
                                                        }
                                                    @endphp

                                                    {{ $str }}
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $(document).ready(function() {
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
    });
</script>
