<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard -  Dulz & Cheny Avatar-based Learning Partners in Constructive Learning') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4">
                <div class="...">
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
