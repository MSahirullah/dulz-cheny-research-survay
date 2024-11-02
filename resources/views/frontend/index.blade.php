@extends('frontend.layouts.app')

@section('content')
    <div style="margin: 20px">
        <img src="{{ asset('images/logo.png') }}" alt="Dulz & Cheny" width="100">
    </div>

    {{-- SCENE 01 --}}
    <video autoplay loop muted class="bg-video" id="bg-1" onloadstart="this.volume=1">
        <source src="{{ asset('videos/scene_1_1.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="scene-1">
        <div class="titles" id="scene-1-titles">
            <h1 class="title-1 sharnay text-center">Welcome to</h1>
            <h1 class="title-2 sharnay text-center animate__animated animate__jackInTheBox">
                <span>Dulz</span>
                <span>&</span>
                <span>Cheny</span>
            </h1>
        </div>

        <div class="d-flex justify-content-center button-outer">
            <div style="width:250px" id="scene-1-start-button-div">
                <button class="button button-info" id="scene-1-start-button" role="button">Let's Get Start</button>
            </div>
        </div>
    </div>

    {{-- SCEME 02 --}}
    <video class="bg-video" id="bg-2" onloadstart="this.volume=1" style="display: none">
        <source src="{{ asset('videos/scene_2.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="modal" tabindex="-1" id="stage-2-form-modal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <form action="#" method="POST" id="stage-2-form">
                @csrf
                <div class="modal-content p-4">
                    <div class="modal-body ">
                        <div class="form-group mb-3">
                            <label for="name" class="akaya mb-2">Enter your name here</label>
                            <input type="text" required name="name" id="name" class="akaya form-control">
                            <small class="text-danger error error_name mt-1"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="age" class="akaya mb-2">Select your age</label>
                            <select name="age" required id="age" class="form-control">
                                <option value="" selected disabled></option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                            <small class="text-danger error error_age mt-1"></small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="akaya mb-2">Enter your parent email</label>
                            <input type="email" required name="email" id="email" class="akaya form-control">
                            <small class="text-danger error error_email mt-1"></small>
                        </div>
                    </div>
                    <div class="modal-footer" style="min-height: 100px">
                        <button class="button button-primary" id="scene-1-start-button" role="button">Go...</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="email-verification-modal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <form action="#" method="POST" id="email-verification-form">
                @csrf
                <div class="modal-content p-4">
                    <div class="modal-body">
                        <p class="fs-22 akaya mb-3 title-text"></p>
                        <div class="form-group mb-3 d-flex justify-content-between gap-2">
                            <input type="text" maxlength="1" class="verification-input form-control text-center"
                                id="code-1" required>
                            <input type="text" maxlength="1" class="verification-input form-control text-center"
                                id="code-2" required>
                            <input type="text" maxlength="1" class="verification-input form-control text-center"
                                id="code-3" required>
                            <input type="text" maxlength="1" class="verification-input form-control text-center"
                                id="code-4" required>
                            <input type="text" maxlength="1" class="verification-input form-control text-center"
                                id="code-5" required>
                            <input type="text" maxlength="1" class="verification-input form-control text-center"
                                id="code-6" required>
                        </div>
                        <small class="text-danger error error_verification_code mt-1"></small>
                    </div>
                    <div class="modal-footer" style="min-height: 100px">
                        <button class="button button-primary" id="verify-code-button" role="button">Verify</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- SCENE 03 --}}
    <video class="bg-video" id="bg-3" onloadstart="this.volume=1" style="display: none">
        <source src="{{ asset('videos/scene_3.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="modal" tabindex="-1" id="study-material-modal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content p-4">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="d-grid gap-2">
                            <div style="min-height: 80px;">
                                <button id="scene-3-lesson-1" type="button" class="button button-info mb-2">
                                    Math Lesson 1
                                </button>
                            </div>
                            <div style="min-height: 80px;">
                                <button type="button" class="button button-info mb-2">Math Lesson 2</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SCENE 04 --}}
    <video class="bg-video" id="bg-4" onloadstart="this.volume=1" style="display: none">
        <source src="{{ asset('videos/scene_4.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>


    {{-- SCENE 05 --}}
    <video class="bg-video" id="bg-5" onloadstart="this.volume=1" style="display: none">
        <source src="{{ asset('videos/scene_5.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    {{-- SCENE 06 --}}
    <video class="bg-video" id="bg-6" onloadstart="this.volume=1" style="display: none">
        <source src="{{ asset('videos/scene_6.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="modal modal-green" tabindex="-1" id="question-from-kid" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-5">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col" style="min-height: 80px;">
                                <button type="button"
                                    class="text-black button button-warning mb-2 lesson-1-correct-answer">
                                    3 🍎
                                </button>
                            </div>
                            <div class="col" style="min-height: 80px;">
                                <button type="button"
                                    class="text-black button button-warning mb-2 lesson-1-wrong-answer">
                                    4 🍎
                                </button>
                            </div>
                            <div class="col" style="min-height: 80px;">
                                <button type="button"
                                    class="text-black button button-warning mb-2 lesson-1-wrong-answer">
                                    5 🍎
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SCENE 07 --}}
    <video class="bg-video" id="bg-7" onloadstart="this.volume=1" style="display: none">
        <source src="{{ asset('videos/scene_7.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    {{-- SCENE 08 --}}
    <video class="bg-video" id="bg-8" onloadstart="this.volume=1" style="display: none">
        <source src="{{ asset('videos/scene_8.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    {{-- SCENE 09 --}}
    <video class="bg-video" id="bg-9" onloadstart="this.volume=1" style="display: none">
        <source src="{{ asset('videos/scene_9.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    {{-- SCENE 10 --}}
    <video class="bg-video" id="bg-10" onloadstart="this.volume=1" style="display: none">
        <source src="{{ asset('videos/scene_10.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>


    <div style="display: none" id="timer-box-div">
        <div id="timer-box"
            style="position: fixed; top: 10px; right: 10px; background-color: yellow; border: 2px solid #ffffff; padding: 10px; border-radius: 8px; display: flex; align-items: center;">
            <img src="{{ asset('images/timer.png') }}" id="clock-image" alt="Clock"
                style="width: 20px; margin-right: 10px; transition: transform 1s linear;">
            <span id="timer-text" class="akaya fs-22">01:00</span>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            // remove code
            // $("#study-material-modal").modal('show');
            // $("#scene-1-start-button-div").hide();
            // $("#scene-1-titles").hide();
            // $("#question-from-kid").modal('show');
            //remove code end

            $("#scene-1-start-button").click(function() {
                $("#bg-1").hide();
                var video = $("#bg-2").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();
            });

            $("#bg-2").on('ended', function() {
                $("#stage-2-form-modal").modal('show');
            });

            $(document).on('submit', '#stage-2-form', function(e) {
                e.preventDefault();
                $('.error').text('');

                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('stage-2.form.submit') }}',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        showLoading();
                    },
                    success: function(response, status, xhr) {
                        if (xhr.status === 200) {
                            $("#stage-2-form-modal").modal('hide');
                            flasher.success(response.message);
                            $("#email-verification-modal .title-text").text(
                                "Please check your " + response.email +
                                " email for the verification code and enter it below.");
                            $("#email-verification-modal").modal('show');

                        } else {
                            flasher.error("Internal Server Error.");
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            displayValidationErrors(errors);
                        } else {
                            flasher.error("Internal Server Error.");
                        }
                    },
                    complete: function() {
                        hideLoading();
                    }
                });
            });

            $(document).on('submit', '#email-verification-form', function(e) {
                e.preventDefault();
                $('.error').text('');

                var verificationCode = '';
                $('.verification-input').each(function() {
                    verificationCode += $(this).val();
                });

                $.ajax({
                    url: '{{ route('stage-2.email-verification.submit') }}',
                    type: 'POST',
                    data: {
                        verification_code: verificationCode
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        showLoading();
                    },
                    success: function(response, status, xhr) {
                        if (xhr.status === 200) {
                            $("#email-verification-modal").modal('hide');
                            flasher.success(response.message);

                            $("#bg-2").hide();
                            var video = $("#bg-3").show()[0];
                            video.muted = false;
                            video.play();
                            video.playbackRate = 0.9;

                        } else {
                            flasher.error(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        flasher.error("Internal Server Error.");
                    },
                    complete: function() {
                        hideLoading();
                    }
                });
            });

            $('.verification-input').each(function(index, input) {
                $(input).on('input', function() {
                    if ($(this).val().length === 1 && index < $('.verification-input').length - 1) {
                        $('.verification-input').eq(index + 1).focus();
                    }
                });

                $(input).on('keydown', function(e) {
                    if (e.key === 'Backspace' && !$(this).val() && index > 0) {
                        $('.verification-input').eq(index - 1).focus();
                    }
                });
            });


            // SCENE 03
            $("#bg-3").on('ended', function() {
                $("#study-material-modal").modal('show');
                $("#timer-box-div").hide();
                timeLeft = 600;
            });

            $("#scene-3-lesson-1").click(function() {
                $("#study-material-modal").modal('hide');
                $("#bg-3").hide();
                var video = $("#bg-4").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;

                $("#timer-box-div").show();
                updateTimer();

            });

            $("#bg-4").on('ended', function() {
                $("#bg-4").hide();
                var video = $("#bg-5").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
            });

            $("#bg-5").on('ended', function() {
                $("#bg-5").hide();
                var video = $("#bg-6").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
            });

            $("#bg-6").on('ended', function() {
                $("#question-from-kid").modal('show');
            });

            $(".lesson-1-correct-answer").click(function() {
                $("#question-from-kid").modal('hide');
                $("#bg-6").hide();
                var video = $("#bg-7").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
            });

            $(".lesson-1-wrong-answer").click(function() {
                $("#question-from-kid").modal('hide');
                $("#bg-7").hide();
                var video = $("#bg-8").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
            });

            $("#bg-8").on('ended', function() {
                $("#question-from-kid").modal('show');
            });

            $("#bg-7").on('ended', function() {
                $("#bg-7").hide();
                var video = $("#bg-9").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
            });

            $("#bg-9").on('ended', function() {
                $("#bg-9").hide();
                var video = $("#bg-1").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#study-material-modal").modal('show');
                $("#timer-box-div").hide();
                timeLeft = 600;
            });

            let timeLeft = 600; 
            const $timerText = $('#timer-text');
            const $clockImage = $('#clock-image');

            function updateTimer() {
                let minutes = Math.floor(timeLeft / 60);
                let seconds = timeLeft % 60;
                $timerText.text(`${minutes}:${seconds.toString().padStart(2, '0')}`);

                $clockImage.css('transform', `rotate(${(600 - timeLeft) * 180}deg)`);

                if (timeLeft > 0) {
                    timeLeft--;
                    setTimeout(updateTimer, 1000);
                } else {
                    $(".bg-video").hide();
                    $("#stage-2-form-modal").modal('hide');
                    $("#email-verification-modal").modal('hide');
                    $("#question-from-kid").modal('hide');

                    var video = $("#bg-10").show()[0];
                    video.muted = false;
                    video.play();
                    video
                        .playbackRate = 0.9;
                }
            }

            $("#bg-10").on('ended', function() {
                $(".bg-video").hide();
                var video = $("#bg-1").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#study-material-modal").modal('show');
                $("#timer-box-div").hide();
                timeLeft = 600;
            });

            $("#stage-2-form-modal").on("shown.bs.modal", function() {
                $("#name").focus();
            });

            $("#email-verification-modal").on("shown.bs.modal", function() {
                $("#code-1").focus();
            });

        });
    </script>
@endsection
