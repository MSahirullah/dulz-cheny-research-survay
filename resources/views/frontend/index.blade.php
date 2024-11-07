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
                                <button type="button" id="scene-3-activity-1"
                                    class="button button-success mb-2">Activity 01</button>
                            </div>

                            <div style="min-height: 80px;">
                                <button type="button" id="scene-3-activity-2"
                                    class="button button-success mb-2">Activity 02</button>
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

    <div class="modal modal-green" tabindex="-1" id="activity-for-kid" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-xl">
            <div class="modal-content px-5 py-3">
                <div class="modal-body">
                    <div class="form-group mb-4 scene-07-activity" id="activity-1">
                        <div class="row mb-3">
                            <h5 class="text-start text-white">Activity 01</h5>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="activity-question">
                                        🍎
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="activity-question text-center"
                                        style="background-color:#ffffff !important">
                                        +
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="activity-question">
                                        🍎🍎
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="activity-question text-center"
                                        style="background-color:#ffffff !important">
                                        =
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="activity-question activity-answer-box"
                                        style="background-color:yellow !important; min-height:60.8px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">

                                        <button type="button" data-status="wrong"
                                            class="button button-info mb-2 activity-answer text-white">
                                            🍎🍎
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">

                                        <button type="button" data-status="correct"
                                            class="button button-info mb-2 activity-answer text-white">
                                            🍎🍎🍎
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">

                                        <button type="button" data-status="wrong"
                                            class="button button-info mb-2 activity-answer text-white">
                                            🍎🍎🍎🍎
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4 scene-07-activity" id="activity-2">
                        <div class="row mb-3">
                            <h5 class="text-start text-white">Activity 02</h5>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="activity-question">
                                        ⚽⚽⚽
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="activity-question text-center"
                                        style="background-color:#ffffff !important">
                                        +
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="activity-question">
                                        ⚽⚽
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="activity-question text-center"
                                        style="background-color:#ffffff !important">
                                        =
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="activity-question activity-answer-box"
                                        style="background-color:yellow !important; min-height:60.8px;ln">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">

                                        <button type="button" data-status="wrong" data-icon="⚽"
                                            class="button button-info mb-2 activity-answer text-white">
                                            ⚽⚽⚽⚽
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">
                                        <button type="button" data-status="wrong" data-icon="⚽"
                                            class="button button-info mb-2 activity-answer text-white">
                                            ⚽⚽⚽⚽⚽⚽
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">

                                        <button type="button" data-status="correct" data-icon="⚽"
                                            class="button button-info mb-2 activity-answer text-white">
                                            ⚽⚽⚽⚽⚽
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4 scene-07-activity" id="activity-3" style="display: none;">
                        <div class="row mb-3">
                            <h5 class="text-start text-white">Activity 03</h5>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="activity-question">
                                        🐇🐇🐇🐇
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="activity-question text-center"
                                        style="background-color:#ffffff !important">
                                        +
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="activity-question">
                                        🐇🐇
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="activity-question text-center"
                                        style="background-color:#ffffff !important">
                                        =
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="activity-question activity-answer-box"
                                        style="background-color:yellow !important; min-height:60.8px;ln">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">

                                        <button type="button" data-status="correct" data-icon="⚽"
                                            class="button button-info mb-2 activity-answer text-white">
                                            🐇🐇🐇🐇🐇🐇
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">

                                        <button type="button" data-status="wrong" data-icon="⚽"
                                            class="button button-info mb-2 activity-answer text-white">
                                            🐇🐇🐇🐇
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">
                                        <button type="button" data-status="wrong" data-icon="⚽"
                                            class="button button-info mb-2 activity-answer text-white">
                                            🐇🐇🐇🐇🐇🐇🐇
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group scene-07-activity" id="activity-4" style="display: none;">
                        <div class="row mb-3">
                            <h5 class="text-start text-white">Activity 04</h5>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="activity-question">
                                        🎈🎈
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="activity-question text-center"
                                        style="background-color:#ffffff !important">
                                        +
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="activity-question">
                                        🎈🎈
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="activity-question text-center"
                                        style="background-color:#ffffff !important">
                                        =
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="activity-question activity-answer-box"
                                        style="background-color:yellow !important; min-height:60.8px;ln">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">

                                        <button type="button" data-status="wrong"
                                            class="button button-info mb-2 activity-answer text-white">
                                            🎈🎈🎈🎈🎈
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">
                                        <button type="button" data-status="correct"
                                            class="button button-info mb-2 activity-answer text-white">
                                            🎈🎈🎈🎈
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="min-height: 72px;">

                                        <button type="button" data-status="wrong"
                                            class="button button-info mb-2 px-2 activity-answer text-white">
                                            🎈🎈🎈🎈🎈
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between gap-5 mt-5">
                        <div style="min-height: 80px;">
                            <button type="button" id="activity-close-btn"
                                class="button button-danger mb-2">Close</button>
                        </div>
                        <div style="min-height: 80px;">
                            <button type="button" id="activity-next-btn"
                                class="button button-primary mb-2 px-5">Next...</button>
                        </div>
                        <div style="min-height: 80px; display:none;">
                            <button type="button" id="activity-previous-btn"
                                class="button button-primary mb-2 px-5">...Previous</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-green " tabindex="-1" id="activity-for-kid-2" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-xl">
            <div class="modal-content px-5 pt-3 pb-1">
                <div class="modal-body">
                    <div class="position-realtive">
                        <div id="story-1">
                            <div style="position: absolute; bottom:0px;right:0px;">
                                <img src="{{ asset('images/story-1.png') }}" alt="Story-1" height="375px;">
                            </div>
                            <h5 class="akaya  text-bold mb-3" style="font-size:22px; color:yellow;">Story 01 - The Sunrise
                                Surprise 🦉</h5>
                            <div class="akaya animate__animated animate__slideInUp text-white mb-2"
                                style="font-size:24px;  line-height:32px;">
                                In a green forest, there was a special tree with a magic branch. Animals said it was the
                                best
                                spot to watch the sunrise. One morning, <span class="fw-bolder" style="color:yellow;">3
                                    wise owls</span> flew to the branch to enjoy the view.
                            </div>
                            <div class="akaya animate__animated animate__slideInUp text-white mb-2"
                                style="font-size:24px; line-height:32px;">
                                The owls hooted happily. Suddenly, they heard flapping sounds <span class="fw-bolder"
                                    style="color:yellow;">2 little birds</span> were flying over, looking curious. “Can we
                                join you?” asked one of the birds.
                            </div>
                            <div class="akaya animate__animated animate__slideInUp text-white mb-2"
                                style="font-size:24px; line-height:32px;">
                                “Of course!” the owls replied. “The magic branch has room for everyone!”
                            </div>
                            <div class="akaya animate__animated animate__slideInUp text-white mb-3"
                                style="font-size:24px; line-height:32px;">
                                The little birds landed beside the owls, and together, <br> they watched the sunrise.
                            </div>

                            <div class="akaya animate__animated animate__slideInUp  py-2 px-4"
                                style="font-size:30px; border:2px dashed white; border-radius:12px; color:yellow; width:650px;">
                                How many birds are on the magic branch now?

                                <div class="d-flex justify-content-between gap-4 mt-4">
                                    <div>
                                        <div style="min-height: 66px; width:125px;">
                                            <button type="button" data-status="wrong" style="line-height:13px;"
                                                class="button button-info mb-2 activity-2-answer text-white">
                                                4
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div style="min-height: 66px;  width:125px;">
                                            <button type="button" data-status="correct" style="line-height:13px;"
                                                class="button button-info mb-2 activity-2-answer text-white">
                                                5
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div style="min-height: 66px;  width:125px;">

                                            <button type="button" data-status="wrong" style="line-height:13px;"
                                                class="button button-info mb-2 activity-2-answer text-white">
                                                6
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div style="min-height: 66px;  width:125px;">
                                            <button type="button" data-status="wrong" style="line-height:13px;"
                                                class="button button-info mb-2 activity-2-answer text-white">
                                                7
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="story-2" style="display: none;">
                            <div style="position: absolute; bottom:50px;right:0px;">
                                <img src="{{ asset('images/story-2.png') }}" alt="Story-2" height="325px;">
                            </div>
                            <h5 class="akaya  text-bold mb-3" style="font-size:22px; color:yellow;">Story 02 - The
                                Birthday Surprise 📚</h5>
                            <div class="akaya animate__animated animate__slideInUp text-white mb-2"
                                style="font-size:24px; line-height:32px;">
                                For my last birthday, I was so excited because my family planned a special day for me. After
                                cake and candles, my mom handed me a big, colorful gift bag. Inside, I found <span
                                    class="fw-bolder" style="color:yellow;">3 storybooks!</span>
                                Each one was filled with amazing pictures and adventures.
                            </div>
                            <div class="akaya animate__animated animate__slideInUp text-white mb-2"
                                style="font-size:24px; line-height:32px;">
                                Just then, my dad walked over with another present. I opened it and found <span
                                    class="fw-bolder" style="color:yellow;">4 more storybooks!</span>
                                <br> I couldn’t believe it—I now had so many new books to read!
                            </div>
                            <div class="akaya animate__animated animate__slideInUp text-white mb-2"
                                style="font-size:24px; line-height:32px;">
                                I sat on the couch, hugged my books, and couldn’t wait to start reading each one.
                            </div>

                            <div class="akaya animate__animated animate__slideInUp  py-3 px-4"
                                style="font-size:30px; border:2px dashed white; border-radius:12px; color:yellow; width:650px;">
                                Can you help me count how many storybooks <br>I have now?

                                <div class="d-flex justify-content-between gap-4 mt-4">
                                    <div>
                                        <div style="min-height: 66px; width:125px;">
                                            <button type="button" data-status="wrong" style="line-height:13px;"
                                                class="button button-info mb-2 activity-2-answer-2 text-white">
                                                5
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div style="min-height: 66px;  width:125px;">
                                            <button type="button" data-status="wrong" style="line-height:13px;"
                                                class="button button-info mb-2 activity-2-answer-2 text-white">
                                                6
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div style="min-height: 66px;  width:125px;">

                                            <button type="button" data-status="correct" style="line-height:13px;"
                                                class="button button-info mb-2 activity-2-answer-2 text-white">
                                                7
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div style="min-height: 66px;  width:125px;">
                                            <button type="button" data-status="wrong" style="line-height:13px;"
                                                class="button button-info mb-2 activity-2-answer-2 text-white">
                                                8
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="d-flex justify-content-between gap-5 mt-3">
                            <div style="min-height: 80px;">
                                <button type="button" id="activity-for-kid-2-activity-close-btn"
                                    class="button button-danger mb-2">Close</button>
                            </div>
                            <div style="min-height: 80px; display:none;">
                                <button type="button" id="activity-for-kid-2-activity-next-btn"
                                    class="button button-primary mb-2 px-5">Next...</button>
                            </div>
                            <div class="d-flex gap-5">
                                <div style="min-height: 80px; display:none;">
                                    <button type="button" id="activity-for-kid-2-activity-previous-btn"
                                        class="button button-primary mb-2 px-5">...Previous</button>
                                </div>
                                <div style="min-height: 80px; display:none;">
                                    <button type="button" id="activity-for-kid-2-activity-finish-btn"
                                        class="button button-primary px-5">Finish</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

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
            style="position: fixed;z-index:9999; top: 10px; right: 10px; background-color: yellow; border: 2px solid #ffffff; padding: 10px; border-radius: 8px; display: flex; align-items: center;">
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
            // $("#scene-3-lesson-1").click(function() {
            //remove code end

            $(".activity-2-answer-2").click(function() {
                $('.activity-2-answer-2').removeClass('button-danger').addClass('button-info');
                $('.activity-2-answer-2').removeClass('button-success').addClass('button-info');

                if ($(this).data('status') === 'correct') {
                    $(this).removeClass('button-info').addClass('button-success');
                } else {
                    $(this).removeClass('button-info').addClass('button-danger');
                    setTimeout(() => {
                        $(this).removeClass('button-danger').addClass('button-info');
                    }, 1000);
                }
            });

            $("#activity-for-kid-2-activity-finish-btn").click(function() {
                var isCompleted1 = false;
                var isCompleted2 = false;

                $(".activity-2-answer").each(function() {
                    if ($(this).data('status') === 'correct') {
                        if ($(this).hasClass('button-success')) {
                            isCompleted1 = true;
                        }
                    }
                });

                $(".activity-2-answer-2").each(function() {
                    if ($(this).data('status') === 'correct') {
                        if ($(this).hasClass('button-success')) {
                            isCompleted2 = true;
                        }
                    }
                });

                if (isCompleted1 && isCompleted2) {
                    $(".modal").modal('hide');

                    $(".bg-video").hide();
                    var video = $("#bg-9").show()[0];
                    video.muted = false;
                    video.play();
                    video.playbackRate = 0.9;
                    $("#scene-1-start-button-div").hide();
                    $("#scene-1-titles").hide();
                } else {
                    flasher.warning('Please complete the activities.');
                }
            });

            $("#activity-for-kid-2-activity-previous-btn").click(function() {
                $("#story-2").hide();
                $("#story-1").show();
                $("#activity-for-kid-2-activity-next-btn").parent().show();
                $("#activity-for-kid-2-activity-finish-btn").parent().hide();
                $("#activity-for-kid-2-activity-previous-btn").parent().hide();
            });

            $("#activity-for-kid-2-activity-next-btn").click(function() {
                $("#story-1").hide();
                $("#story-2").show();
                $("#activity-for-kid-2-activity-next-btn").parent().hide();
                $("#activity-for-kid-2-activity-finish-btn").parent().show();
                $("#activity-for-kid-2-activity-previous-btn").parent().show();

            });

            $("#scene-3-activity-2").click(function() {
                $(".modal").modal('hide');

                $(".bg-video").hide();
                var video = $("#bg-1").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#study-material-modal").modal('show');
                $("#timer-box-div").hide();
                $("#timer-box-div").show();
                updateTimer();
                $("#activity-for-kid-2").modal('show');
            });

            $('#activity-for-kid-2-activity-close-btn').click(function() {
                $(".modal").modal('hide');

                $("#activity-for-kid-2").modal('hide');

                $(".bg-video").hide();
                var video = $("#bg-1").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#study-material-modal").modal('show');
                $("#timer-boxrdiv").hide();
            });

            $(".activity-2-answer").click(function() {
                $('.activity-2-answer').removeClass('button-danger').addClass('button-info');
                $('.activity-2-answer').removeClass('button-success').addClass('button-info');

                if ($(this).data('status') === 'correct') {
                    $(this).removeClass('button-info').addClass('button-success');
                    $("#activity-for-kid-2-activity-next-btn").parent().show();
                } else {
                    $(this).removeClass('button-info').addClass('button-danger');
                    setTimeout(() => {
                        $(this).removeClass('button-danger').addClass('button-info');
                    }, 1000);
                }
            });

            $('.activity-answer').click(function() {
                $(this).parent().parent().parent().find('.activity-answer').each(function() {
                    $(this).removeClass('button-danger').addClass('button-info');
                    $(this).removeClass('button-success').addClass('button-info');
                });
                $(this).parent().parent().parent().parent().find('.activity-answer-box').text('');
                $(this).removeClass('button-danger').addClass('button-info');
                $(this).removeClass('button-success').addClass('button-info');

                if ($(this).data('status') === 'correct') {

                    $(this).removeClass('button-info').addClass('button-success');
                    $(this).parent().parent().parent().parent().find('.activity-answer-box').text($(
                            this)
                        .text());

                    var isAllAnswered = true;

                    $('.scene-07-activity').each(function() {
                        if ($(this).find('.activity-answer-box').text().trim() === '') {
                            isAllAnswered = false;
                        }

                    });
                    if (isAllAnswered) {
                        $(".modal").modal('hide');
                        $(".bg-video").hide();
                        var video = $("#bg-9").show()[0];
                        video.muted = false;
                        video.play();
                        video.playbackRate = 0.9;
                        $("#scene-1-start-button-div").hide();
                        $("#scene-1-titles").hide();
                    }
                    //
                } else {
                    $(this).removeClass('button-info').addClass('button-danger');
                    setTimeout(() => {
                        $(this).removeClass('button-danger').addClass('button-info');
                    }, 1500);
                }
            });

            $("#activity-next-btn").click(function() {
                $("#activity-1").hide();
                $("#activity-2").hide();
                $("#activity-3").show();
                $("#activity-4").show();

                $(this).parent().hide();
                $('#activity-previous-btn').parent().show();
            });

            $("#activity-previous-btn").click(function() {
                $("#activity-1").show();
                $("#activity-2").show();
                $("#activity-3").hide();
                $("#activity-4").hide();

                $(this).parent().hide();
                $('#activity-next-btn').parent().show();
            });

            $('#activity-close-btn').click(function() {
                $(".modal").modal('hide');

                $("#activity-for-kid").modal('hide');

                $(".bg-video").hide();
                var video = $("#bg-1").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#study-material-modal").modal('show');
                $("#timer-box-div").hide();
                timeLeft = 600;
            });

            $("#scene-3-activity-1").click(function() {
                $(".modal").modal('hide');

                $("#study-material-modal").modal('hide');
                $("#activity-for-kid").modal('show');
                $("#timer-box-div").show();
                updateTimer();
            });

            $("#scene-1-start-button").click(function() {
                $(".bg-video").hide();
                var video = $("#bg-2").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();
            });

            $("#bg-2").on('ended', function() {
                $(".modal").modal('hide');

                $("#stage-2-form-modal").modal('show');
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();
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

                            if (response.is_email_verified == true) {
                                $(".bg-video").hide();
                                var video = $("#bg-3").show()[0];
                                video.muted = false;
                                video.play();
                                video.playbackRate = 0.9;
                                $("#scene-1-start-button-div").hide();
                                $("#scene-1-titles").hide();
                                //
                            } else {
                                $("#email-verification-modal .title-text").text(
                                    "Please check your " + response.email +
                                    " email for the verification code and enter it below."
                                );
                                $(".modal").modal('hide');

                                $("#email-verification-modal").modal('show');
                            }

                            flasher.success(response.message);

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

                            $(".bg-video").hide();
                            var video = $("#bg-3").show()[0];
                            video.muted = false;
                            video.play();
                            video.playbackRate = 0.9;
                            $("#scene-1-start-button-div").hide();
                            $("#scene-1-titles").hide();

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
                    if ($(this).val().length === 1 && index < $('.verification-input').length -
                        1) {
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
                $(".modal").modal('hide');

                $("#study-material-modal").modal('show');
                $("#timer-box-div").hide();
                timeLeft = 600;
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();
            });

            $("#scene-3-lesson-1").click(function() {
                $("#study-material-modal").modal('hide');
                $(".bg-video").hide();
                var video = $("#bg-4").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;

                $("#timer-box-div").show();
                updateTimer();
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();

            });

            $("#bg-4").on('ended', function() {
                $(".bg-video").hide();
                var video = $("#bg-5").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();
            });

            $("#bg-5").on('ended', function() {
                $(".bg-video").hide();
                var video = $("#bg-6").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();
            });

            $("#bg-6").on('ended', function() {
                $(".modal").modal('hide');

                $("#question-from-kid").modal('show');
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();
            });

            $(".lesson-1-correct-answer").click(function() {
                $("#question-from-kid").modal('hide');
                $(".bg-video").hide();
                var video = $("#bg-7").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();
            });

            $(".lesson-1-wrong-answer").click(function() {
                $("#question-from-kid").modal('hide');
                $(".bg-video").hide();
                var video = $("#bg-8").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();
            });

            $("#bg-8").on('ended', function() {
                $(".modal").modal('hide');

                $("#question-from-kid").modal('show');
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();
            });

            $("#bg-7").on('ended', function() {
                $(".modal").modal('hide');

                $("#activity-for-kid").modal('show');
            });

            $("#bg-9").on('ended', function() {
                $(".modal").modal('hide');

                $(".bg-video").hide();
                var video = $("#bg-1").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#study-material-modal").modal('show');
                $("#timer-box-div").hide();
                timeLeft = 600;
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();
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
                    $(".modal").modal('hide');
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
                $(".modal").modal('hide');

                $(".bg-video").hide();
                var video = $("#bg-1").show()[0];
                video.muted = false;
                video.play();
                video.playbackRate = 0.9;
                $("#study-material-modal").modal('show');
                $("#timer-box-div").hide();
                timeLeft = 600;
                $("#scene-1-start-button-div").hide();
                $("#scene-1-titles").hide();

                startTimer();

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
