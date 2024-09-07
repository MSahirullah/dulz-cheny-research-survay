<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
    * {
        font-family: 'Poppins', cursive, sans-serif !important;
    }

    .mx-wd {
        max-width: 400px !important;
    }

    @media (min-width: 401px) {
        .mx-wd {
            width: auto;
        }
    }

    .context {
        width: 100%;
        position: absolute;
        top: 0;
    }

    .area {
        width: 100%;
        height: 100vh;
    }

    .circles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .circles li {
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(17, 5, 5, 0.5);
        animation: animate 25s linear infinite;
        bottom: -150px;
    }

    .text-yellow {
        color: yellow !important;
    }

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
</style>
