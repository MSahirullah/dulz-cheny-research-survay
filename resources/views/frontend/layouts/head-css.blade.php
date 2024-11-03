<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
    /*
    .circles li:nth-child(1) {
        left: 25%;
        top: 10% width: 80px;
        height: 80px;
        animation-delay: 0s;
        background: rgba(135, 206, 235, 0.5);
    }

    .circles li:nth-child(2) {
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
        animation-duration: 12s;
        background: rgba(255, 255, 102, 0.5);
    }

    .circles li:nth-child(3) {
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
        background: rgba(255, 105, 180, 0.5);
    }

    .circles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-delay: 0s;
        animation-duration: 18s;
        background: rgba(50, 205, 50, 0.5);
    }

    .circles li:nth-child(5) {
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
        background: rgba(255, 165, 0, 0.5);
    }

    .circles li:nth-child(6) {
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 3s;
        background: rgba(230, 230, 250, 0.5);
    }

    .circles li:nth-child(7) {
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 7s;
        background: rgba(255, 182, 193, 0.5);
    }

    .circles li:nth-child(8) {
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
        background: rgba(0, 191, 255, 0.5);
    }

    .circles li:nth-child(9) {
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
        background: rgba(255, 0, 0, 0.5);
    }

    .circles li:nth-child(10) {
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
        background: rgba(255, 223, 0, 0.5);
    } */

    @font-face {
        font-family: 'Sharnay';
        src: url('{{ asset('public/font/sharnayregular.ttf') }}') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    .sharnay {
        font-family: 'Sharnay', sans-serif;
    }

    .raleway {
        font-family: "Raleway", sans-serif;
    }


    body,
    html {
        height: 100%;
        margin: 0;
        overflow: hidden;
    }

    .bg-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: fill;
        z-index: -1;
    }

    .content {
        position: relative;
        z-index: 1;
        color: white;
        text-align: center;
        top: 50%;
        transform: translateY(-50%);
    }

    .activity-question {
        font-family: "Akaya Kanadaka", system-ui;
        border-radius: 16px;
        border-width: 0 0 4px;
        font-size: 28px;
        font-weight: 700;
        letter-spacing: .8px;
        line-height: 20px;
        padding: 18px 18px;
        border: 3px solid #383838;
    }

    .activity-question:nth-child(1) {
        background-color: #ffc400;
    }

    .button {
        font-family: "Akaya Kanadaka", system-ui;
        font-weight: 400;
        font-style: normal;
        appearance: button;
        border: solid transparent;
        border-radius: 16px;
        border-width: 0 0 4px;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-size: 28px;
        font-weight: 700;
        letter-spacing: .8px;
        line-height: 20px;
        margin: 0;
        outline: none;
        overflow: visible;
        padding: 18px 24px;
        text-align: center;
        text-transform: capitalize;
        touch-action: manipulation;
        transform: translateZ(0);
        transition: filter .2s;
        user-select: none;
        -webkit-user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        width: 100%;
    }

    .akaya {
        font-family: "Akaya Kanadaka", system-ui !important;
    }

    .button-success {
        background-color: #00ff00;
    }

    .button-success:after {
        background-color: #00cc00;
    }

    .button-info {
        background-color: #00bfff;
    }

    .button-info:after {
        background-color: #00a4db;
    }

    .button-danger {
        background-color: #ff3333;
    }

    .button-danger:after {
        background-color: #cc0000;
    }

    .button-warning {
        background-color: #fff53f;
    }

    .button-warning:after {
        background-color: #ffc400;
    }

    .button-primary {
        background-color: #9933ff;
    }

    .button-primary:after {
        background-color: #8000cc;
    }


    .button:after {
        background-clip: padding-box;
        border: solid transparent;
        border-radius: 16px;
        border-width: 0 0 8px;
        bottom: -8px;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: -1;
    }

    .button,
    .button:focus {
        user-select: auto;
    }

    .button:hover:not(:disabled) {
        filter: brightness(1.1);
        -webkit-filter: brightness(1.1);
    }

    .button:disabled {
        cursor: auto;
    }

    .button:active {
        border-width: 8px 0 0;
        background: none;
    }

    .modal-content {
        border: 10px solid #008900;
        border-radius: 25px;
        background-color: #fcb401;
    }

    .modal-green .modal-content {
        border: 10px solid #fcb401;
        border-radius: 25px;
        background-color: #355349;
    }

    label {
        font-size: 24px;
    }

    .modal-header,
    .modal-body,
    .modal-footer {
        border: none !important;
    }

    .modal input,
    .modal select {
        font-size: 26px;
        font-family: "Akaya Kanadaka", system-ui;
    }

    @keyframes animate {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 1;
            border-radius: 0;
        }

        100% {
            transform: translateY(-1000px) rotate(720deg);
            opacity: 0;
            border-radius: 50%;
        }

    }

    /* SCENE 1 CSS */
    .scene-1 .title-1 {
        font-size: 48px;
        font-weight: 800;
    }

    .scene-1 .title-2 {
        font-size: 60px;
        font-weight: 800;
    }

    .scene-1 span {
        text-shadow: 1px 1px 10px #fff;
    }

    .scene-1 span:nth-child(1) {
        color: #f6511d;
    }

    .scene-1 span:nth-child(2) {
        color: #52a730;
    }

    .scene-1 span:nth-child(3) {
        color: #fcb401;
    }

    .scene-1 .button-outer {
        margin-top: 240px;
    }

    .fs-22 {
        font-size: 22px;
    }

    #loading-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 99999;
        opacity: 0;
        transition: opacity 0.3s ease;
        /* Add any other styles you want for the backdrop */
    }

    #loading-backdrop .backdrop-text {
        letter-spacing: 8px;
    }

    #loading-backdrop.show {
        opacity: 1;
        /* Set opacity to 1 when showing */
    }

    #loading-backdrop .spinner-grow {
        z-index: 99999;
    }

    .verification-input:focus {
        border: none !important;
        box-shadow: none !important;
    }

    .verification-input {
        outline: none !important;
        border: none !important;
        box-shadow: none !important;

    }

    .text-black {
        color: black !important;
    }
</style>
