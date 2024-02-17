<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo/cow-removebg.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/all.css" type="text/css">
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@5.4.0/dist/css/ionicons.min.css" integrity="...">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <title>Dashboard Template</title>
</head>
<style>
    .bigCircle {
        position: relative;
        width: 55vw;
        height: 55vw;
        border: 1px solid black;
        border-radius: 50%;
        margin: auto;
        background: conic-gradient(transparent -31deg -10deg,
                #B4B4B8 2deg 30deg,
                transparent 18deg 30deg,
                red 28deg 60deg,
                transparent 18deg 60deg,
                #40A2E3 41deg 120deg,
                transparent 91deg 120deg,
                yellow 120deg 270deg,
                transparent 49deg 270deg,
                #879931 237deg 315deg,
                transparent 296deg 315deg,
                #525CEB 300deg 360deg);
        z-index: -1;
        margin-top: 100px;
    }

    .bigTowCircle {
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        width: 53vw;
        height: 53vw;
        border: 1px solid black;
        display: flex;
        background-color: white;
        margin: auto;
    }

    .smallSlice {
        position: absolute;
        top: 50%;
        left: 0;
        width: 50%;
        height: 1px;
        background-color: black;
        transform-origin: 100% 50%;
        z-index: -1;

    }

    .smallSlice::after {
        content: "";
        position: absolute;
        top: 50%;
        left: -7%;
        width: 0px;
        height: 0px;
        background-color: black;
        border-radius: 50%;
        transform-origin: 100% 50%;
        transform: translate(-50%, -50%);
    }

    /* Define slices */


    .smallSlice:nth-child(2) {
        transform: rotate(5deg);
    }

    .smallSlice:nth-child(3) {
        transform: rotate(10deg);
    }

    .smallSlice:nth-child(4) {
        transform: rotate(15deg);
    }

    .smallSlice:nth-child(5) {
        transform: rotate(20deg);
    }

    .smallSlice:nth-child(6) {
        transform: rotate(25deg);
    }

    .smallSlice:nth-child(7) {
        transform: rotate(30deg);
    }

    .smallSlice:nth-child(8) {
        transform: rotate(35deg);
    }

    .smallSlice:nth-child(9) {
        transform: rotate(40deg);
    }

    .smallSlice:nth-child(10) {
        transform: rotate(45deg);
    }

    .smallSlice:nth-child(11) {
        transform: rotate(50deg);
    }

    .smallSlice:nth-child(12) {
        transform: rotate(55deg);
    }

    .smallSlice:nth-child(13) {
        transform: rotate(60deg);
    }

    .smallSlice:nth-child(14) {
        transform: rotate(65deg);
    }

    .smallSlice:nth-child(15) {
        transform: rotate(70deg);
    }

    .smallSlice:nth-child(16) {
        transform: rotate(75deg);
    }

    .smallSlice:nth-child(17) {
        transform: rotate(80deg);
    }

    .smallSlice:nth-child(18) {
        transform: rotate(85deg);
    }

    .smallSlice:nth-child(19) {
        transform: rotate(90deg);
    }

    .smallSlice:nth-child(20) {
        transform: rotate(95deg);
    }

    .smallSlice:nth-child(21) {
        transform: rotate(100deg);
    }

    .smallSlice:nth-child(22) {
        transform: rotate(105deg);
    }

    .smallSlice:nth-child(23) {
        transform: rotate(110deg);
    }

    .smallSlice:nth-child(24) {
        transform: rotate(115deg);
    }

    .smallSlice:nth-child(25) {
        transform: rotate(120deg);
    }

    .smallSlice:nth-child(26) {
        transform: rotate(125deg);
    }

    .smallSlice:nth-child(27) {
        transform: rotate(130deg);
    }

    .smallSlice:nth-child(28) {
        transform: rotate(135deg);
    }

    .smallSlice:nth-child(29) {
        transform: rotate(140deg);
    }

    .smallSlice:nth-child(30) {
        transform: rotate(145deg);
    }

    .smallSlice:nth-child(31) {
        transform: rotate(150deg);
    }

    .smallSlice:nth-child(32) {
        transform: rotate(155deg);
    }

    .smallSlice:nth-child(33) {
        transform: rotate(160deg);
    }

    .smallSlice:nth-child(34) {
        transform: rotate(165deg);
    }

    .smallSlice:nth-child(35) {
        transform: rotate(170deg);
    }

    .smallSlice:nth-child(36) {
        transform: rotate(175deg);
    }

    .smallSlice:nth-child(40) {
        transform: rotate(180deg);
    }

    .smallSlice:nth-child(41) {
        transform: rotate(185deg);
    }

    .smallSlice:nth-child(42) {
        transform: rotate(190deg);
    }

    .smallSlice:nth-child(43) {
        transform: rotate(195deg);
    }

    .smallSlice:nth-child(44) {
        transform: rotate(200deg);
    }

    .smallSlice:nth-child(45) {
        transform: rotate(205deg);
    }

    .smallSlice:nth-child(46) {
        transform: rotate(210deg);
    }

    .smallSlice:nth-child(47) {
        transform: rotate(215deg);
    }

    .smallSlice:nth-child(48) {
        transform: rotate(220deg);
    }

    .smallSlice:nth-child(49) {
        transform: rotate(225deg);
    }

    .smallSlice:nth-child(50) {
        transform: rotate(230deg);
    }

    .smallSlice:nth-child(51) {
        transform: rotate(235deg);
    }

    .smallSlice:nth-child(52) {
        transform: rotate(240deg);
    }

    .smallSlice:nth-child(53) {
        transform: rotate(245deg);
    }

    .smallSlice:nth-child(54) {
        transform: rotate(250deg);
    }

    .smallSlice:nth-child(55) {
        transform: rotate(255deg);
    }

    .smallSlice:nth-child(56) {
        transform: rotate(260deg);
    }

    .smallSlice:nth-child(57) {
        transform: rotate(265deg);
    }

    .smallSlice:nth-child(58) {
        transform: rotate(270deg);
    }

    .smallSlice:nth-child(59) {
        transform: rotate(275deg);
    }

    .smallSlice:nth-child(60) {
        transform: rotate(280deg);
    }

    .smallSlice:nth-child(61) {
        transform: rotate(285deg);
    }

    .smallSlice:nth-child(62) {
        transform: rotate(290deg);
    }

    .smallSlice:nth-child(63) {
        transform: rotate(295deg);
    }

    .smallSlice:nth-child(64) {
        transform: rotate(300deg);
    }

    .smallSlice:nth-child(65) {
        transform: rotate(305deg);
    }

    .smallSlice:nth-child(66) {
        transform: rotate(310deg);
    }

    .smallSlice:nth-child(67) {
        transform: rotate(315deg);
    }

    .smallSlice:nth-child(68) {
        transform: rotate(320deg);
    }

    .smallSlice:nth-child(69) {
        transform: rotate(325deg);
    }

    .smallSlice:nth-child(70) {
        transform: rotate(330deg);
    }

    .smallSlice:nth-child(71) {
        transform: rotate(335deg);
    }

    .smallSlice:nth-child(72) {
        transform: rotate(340deg);
    }

    .smallSlice:nth-child(73) {
        transform: rotate(345deg);
    }

    .smallSlice:nth-child(74) {
        transform: rotate(350deg);
    }

    .smallSlice:nth-child(75) {
        transform: rotate(355deg);
    }

    .smallSlice:nth-child(76) {
        transform: rotate(360deg);
    }

    .smallSlice:nth-child(77) {
        transform: rotate(365deg);
    }

    .smallSlice:nth-child(78) {
        transform: rotate(370deg);
    }

    .smallSlice:nth-child(79) {
        transform: rotate(375deg);
    }

    .smallSlice:nth-child(80) {
        transform: rotate(380deg);
    }

    .smallSlice:nth-child(81) {
        transform: rotate(385deg);
    }

    .smallSlice:nth-child(82) {
        transform: rotate(390deg);
    }

    .smallSlice:nth-child(83) {
        transform: rotate(395deg);
    }

    .smallSlice:nth-child(84) {
        transform: rotate(400deg);
    }

    .smallSlice:nth-child(85) {
        transform: rotate(405deg);
    }

    .smallSlice:nth-child(86) {
        transform: rotate(410deg);
    }

    .smallSlice:nth-child(87) {
        transform: rotate(415deg);
    }

    .smallSlice:nth-child(88) {
        transform: rotate(420deg);
    }

    .smallSlice:nth-child(89) {
        transform: rotate(425deg);
    }

    .smallSlice:nth-child(90) {
        transform: rotate(430deg);
    }

    .smallSlice:nth-child(91) {
        transform: rotate(435deg);
    }

    .CirclePrincipale {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        width: 52vw;
        height: 52vw;
        border: 1px solid black;
        display: flex;
        background-color: white;
        z-index: 1;

    }


    .orderOne {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        width: 18vw;
        height: 18vw;
        border: 1px solid black;
        display: flex;

        z-index: 1;
    }

    .orderTow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        width: 24vw;
        height: 24vw;
        border: 1px solid black;
        display: flex;

        z-index: 1;
    }

    .orderTree {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        width: 30vw;
        height: 30vw;
        border: 1px solid black;
        display: flex;

        z-index: 1;
    }

    .orderFour {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        width: 37vw;
        height: 37vw;
        border: 1px solid black;
        display: flex;

        z-index: 1;
    }

    .orderFive {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        width: 42vw;
        height: 42vw;
        border: 1px solid black;
        display: flex;

        z-index: 1;
    }

    .orderSix {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        width: 46vw;
        height: 46vw;
        border: 1px solid black;
        display: flex;

        z-index: 1;
    }

    .CirclePrincipaleTow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(0deg);
        border-radius: 50%;
        width: 49vw;
        height: 49vw;
        border: 1px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1;
        transition: transform 0.5s ease;

    }


    .CirclePrincipaletree {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        width: 47vw;
        height: 47vw;
        border: 1px solid black;
        background-color: white;
        display: flex;
        z-index: 1;
    }

    .smallSliceTow {
        position: absolute;
        top: 50%;
        left: 0;
        width: 50%;
        height: 2px;
        background-color: black;
        transform-origin: 100% 50%;
        z-index: 2;
    }

    .smallSliceTow::after {
        content: "";
        position: absolute;

        transform-origin: 100% 50%;
        transform: translate(-50%, -50%);
    }

    .smallSliceTow:nth-child(1) {
        transform: rotate(0deg);
    }

    .smallSliceTow:nth-child(2) {
        transform: rotate(30deg);

    }

    .smallSliceTow:nth-child(3) {
        transform: rotate(60deg);
    }

    .smallSliceTow:nth-child(4) {
        transform: rotate(90deg);
    }

    .smallSliceTow:nth-child(5) {
        transform: rotate(120deg);
    }

    .smallSliceTow:nth-child(6) {
        transform: rotate(150deg);
    }

    .smallSliceTow:nth-child(7) {
        transform: rotate(180deg);
    }

    .smallSliceTow:nth-child(8) {
        transform: rotate(210deg);

    }

    .smallSliceTow:nth-child(9) {
        transform: rotate(240deg);
    }

    .smallSliceTow:nth-child(10) {
        transform: rotate(270deg);
    }

    .smallSliceTow:nth-child(11) {
        transform: rotate(300deg);
    }

    .smallSliceTow:nth-child(12) {
        transform: rotate(330deg);
    }


    .logoCircle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        width: 10vw;
        height: 10vw;
        border: 1px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 2;
        background-color: black;
    }


    .logoCircleTow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 11.5vw;
        height: 11.5vw;
        border: 1px solid black;
        border-radius: 50%;
        background-color: white;
        z-index: -1;
    }

    .smallSliceTre {
        position: absolute;
        top: 50%;
        left: 0;
        width: 50%;
        height: 2px;
        background-color: black;
        transform-origin: 100% 50%;
        z-index: 2;
    }

    .smallSliceTre::after {
        content: "";
        position: absolute;
        top: 50%;
        left: -7%;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        transform-origin: 100% 50%;
        transform: translate(-50%, -50%);
    }


    .smallSliceTre:nth-child(1) {
        transform: rotate(0deg);
    }

    .smallSliceTre:nth-child(2) {
        transform: rotate(30deg);

    }

    .smallSliceTre:nth-child(3) {
        transform: rotate(60deg);
    }

    .smallSliceTre:nth-child(4) {
        transform: rotate(90deg);
    }

    .smallSliceTre:nth-child(5) {
        transform: rotate(120deg);
    }

    .smallSliceTre:nth-child(6) {
        transform: rotate(150deg);
    }

    .smallSliceTre:nth-child(7) {
        transform: rotate(180deg);
    }

    .smallSliceTre:nth-child(8) {
        transform: rotate(210deg);
    }

    .smallSliceTre:nth-child(9) {
        transform: rotate(240deg);
    }

    .smallSliceTre:nth-child(10) {
        transform: rotate(270deg);
    }

    .smallSliceTre:nth-child(11) {
        transform: rotate(300deg);
    }

    .smallSliceTre:nth-child(12) {
        transform: rotate(330deg);
    }



    .refuranceLine {
        position: absolute;
        top: 50%;
        left: 0;
        width: 50%;
        height: 2px;
        background-color: black;
        transform-origin: 0 0;
        z-index: 2;
    }

    .refuranceLine::after {
        content: "";
        position: absolute;
        top: 50%;
        left: -7%;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        transform-origin: 100% 50%;
        transform: translate(-50%, -50%);
    }

    .refuranceLine:nth-child(1) {
        transform: rotate(45deg);
    }
</style>

<body style="background-color: #f8f7fa;">

    <div class="container">
        <!-- Navigation Section -->
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <!-- Replace the ion-icon with an img tag -->
                            <img class="logo-cow" src="../img/logo/cow-removebg.png" alt="Icon">
                        </span>
                        <span class="title"></span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-9 -2 43 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                            </svg>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.1em" height="2.1em" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M14 12.25a3.75 3.75 0 1 1 3.75-3.75A3.75 3.75 0 0 1 14 12.25m0-6a2.25 2.25 0 1 0 2.25 2.25A2.25 2.25 0 0 0 14 6.25m7 13a.76.76 0 0 1-.75-.75c0-1.95-1.06-3.25-6.25-3.25s-6.25 1.3-6.25 3.25a.75.75 0 0 1-1.5 0c0-4.75 5.43-4.75 7.75-4.75s7.75 0 7.75 4.75a.76.76 0 0 1-.75.75M8.32 13.06H8a3 3 0 1 1 .58-6a.75.75 0 1 1-.15 1.49a1.46 1.46 0 0 0-1.09.34a1.47 1.47 0 0 0-.54 1a1.49 1.49 0 0 0 1.35 1.64a1.53 1.53 0 0 0 .93-.22a.75.75 0 0 1 .79 1.28a3 3 0 0 1-1.55.47M3 18.5a.76.76 0 0 1-.75-.75c0-2.7.72-4.5 4.25-4.5a.75.75 0 0 1 0 1.5c-2.35 0-2.75.75-2.75 3a.76.76 0 0 1-.75.75" />
                            </svg>
                        </span>
                        <span class="title">workers</span>
                    </a>
                </li>
                <li>
                    <a href="weather/index.html">
                        <span class="icon">
                            <!-- Replace "ion-icon" with your preferred icon library -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.1em" height="2.1em" viewBox="0 0 48 48">
                                <path fill="currentColor" d="M21.502 40.027a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m9 0a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m-13.5-2a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m9 0a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m9 0a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3M26 12.01c6.337 0 9.932 4.194 10.455 9.26h.16c4.078 0 7.384 3.297 7.384 7.365S40.692 36 36.614 36h-21.23C11.306 36 8 32.703 8 28.635s3.306-7.365 7.384-7.365h.16c.526-5.099 4.118-9.26 10.455-9.26m0 2.495c-4.261 0-7.975 3.448-7.975 8.21c0 .755-.656 1.347-1.407 1.347h-1.421c-2.594 0-4.697 2.114-4.697 4.721c0 2.608 2.103 4.722 4.697 4.722h21.606c2.594 0 4.697-2.114 4.697-4.722c0-2.607-2.103-4.72-4.697-4.72h-1.42c-.752 0-1.408-.593-1.408-1.348c0-4.823-3.714-8.21-7.975-8.21M8.71 20.303a1.244 1.244 0 0 1-.558 1.57l-.115.055l-2.312.962a1.244 1.244 0 0 1-1.067-2.243l.115-.055l2.312-.962a1.244 1.244 0 0 1 1.625.673m13-9.64l-.061.019c-.925.302-1.785.702-2.571 1.19a5.5 5.5 0 0 0-6.826 7.95a9.275 9.275 0 0 0-2.126 1.086A7.883 7.883 0 0 1 21.71 10.662m-16.129.179l.127.046l2.32.989c.629.266.931.995.674 1.628c-.24.592-.882.89-1.48.711l-.126-.045l-2.319-.99a1.26 1.26 0 0 1-.675-1.628c.24-.591.883-.89 1.48-.711m7.369-6.174l.055.116l.96 2.306a1.25 1.25 0 0 1-2.255 1.072l-.055-.115l-.96-2.306a1.25 1.25 0 0 1 2.255-1.073m9.048-.56c.602.25.909.91.73 1.521l-.046.13l-.991 2.276a1.264 1.264 0 0 1-2.38-.837l.045-.13l.991-2.276a1.264 1.264 0 0 1 1.651-.684" />
                            </svg>
                        </span>
                        <span class="title">Weather</span>
                    </a>
                </li>

                <li>
                    <a href="medicine/index.html">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.1em" height="2.1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" d="M2 14c0-3.771 0-5.657 1.172-6.828C4.343 6 6.229 6 10 6h4c3.771 0 5.657 0 6.828 1.172c.654.653.943 1.528 1.07 2.828M22 14c0 3.771 0 5.657-1.172 6.828C19.657 22 17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.172c-.654-.653-.943-1.528-1.07-2.828" />
                                    <path d="M16 6c0-1.886 0-2.828-.586-3.414C14.828 2 13.886 2 12 2c-1.886 0-2.828 0-3.414.586C8 3.172 8 4.114 8 6" />
                                    <path stroke-linecap="round" d="M13.5 14h-3m1.5-1.5v3" />
                                    <circle cx="12" cy="14" r="4" />
                                </g>
                            </svg>
                        </span>
                        <span class="title">Medicine</span>
                    </a>
                </li>


                <li>
                    <a id="logoutButton" href="../login.html">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.1em" height="2.1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" d="M8.002 7c.012-2.175.108-3.353.877-4.121C9.757 2 11.172 2 14 2h1c2.828 0 4.243 0 5.121.879C21 3.757 21 5.172 21 8v8c0 2.828 0 4.243-.879 5.121C19.243 22 17.828 22 15 22h-1c-2.828 0-4.243 0-5.121-.879c-.769-.768-.865-1.946-.877-4.121" />
                                    <path d="M8 19.5c-2.357 0-3.536 0-4.268-.732C3 18.035 3 16.857 3 14.5v-5c0-2.357 0-3.536.732-4.268C4.464 4.5 5.643 4.5 8 4.5" opacity=".5" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H6m0 0l2 2m-2-2l2-2" />
                                </g>
                            </svg>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Main Section -->
        <div class="main">





            <?php include('../IncludeTheFile/notification_bar.php'); ?>
            <div class="accountMenu">
                <h3>Ahmed Billa<br /><span>Farmer</span></h3>
                <ul>
                    <li>
                        <img src="../img/user/user.png" alt="profile">
                        <a href="#">My Profile</a>
                    </li>
                    <li>
                        <img src="../img/user/edit.png" alt="profile">
                        <a href="EditProfil.php">Edit Profile</a>
                    </li>
                    <li>
                        <img src="../img/user/envelope.png" alt="profile">
                        <a href="#">Inbox</a>
                    </li>
                    <li>
                        <img src="../img/user/settings.png" alt="profile">
                        <a href="#">Settings</a>
                    </li>
                    <li>
                        <img src="../img/user/question.png" alt="profile">
                        <a href="#">Help</a>
                    </li>
                    <li>
                        <img src="../img/user/log-out.png" alt="profile">
                        <a href="#">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Cards -->
        <div class="cardBox">
            <?php
            // Database connection details
            $host = "localhost";
            $cow_information = "cow_farmer_ahmed_billa";
            $username = "root";
            $password = "";

            // Create connection
            $conn = mysqli_connect($host, $username, $password, $cow_information);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Query to get the total number of cows
            $count_query = "SELECT COUNT(*) AS total_cows FROM cow_information";
            $count_result = mysqli_query($conn, $count_query);

            $total_cows = 0;
            if ($count_result) {
                $row = mysqli_fetch_assoc($count_result);
                $total_cows = $row['total_cows'];
                mysqli_free_result($count_result);
            }

            mysqli_close($conn);
            ?>
            <a href="../cow-statique/index.php">
                <div class="card">
                    <div class="cardDetails">
                        <div class="numbers"><?php echo $total_cows; ?></div>
                        <div class="cardName">Cow Statistics</div>
                    </div>
                    <div class="iconBx">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 3 24 24">
                            <path fill="currentColor" d="M10.5 18a.5.5 0 0 1 .5.5a.5.5 0 0 1-.5.5a.5.5 0 0 1-.5-.5a.5.5 0 0 1 .5-.5m3 0a.5.5 0 0 1 .5.5a.5.5 0 0 1-.5.5a.5.5 0 0 1-.5-.5a.5.5 0 0 1 .5-.5M10 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m4 0a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m4 7c0 2.21-2.69 4-6 4s-6-1.79-6-4c0-.9.45-1.73 1.2-2.4c-.75-1-1.2-2.25-1.2-3.6l.12-1.22c-.54.15-1.19.15-1.72 0c-1.02-.28-2.56-1.43-2.33-2.23c.23-.8 2.14-.95 3.16-.65c.59.17 1.22.6 1.59 1.06l.57-.81C6.79 7.05 7 4 10 3l-.09.14c-.28.44-1 1.83-.24 3.33a6.02 6.02 0 0 1 4.66 0c.76-1.5.04-2.89-.24-3.33L14 3c3 1 3.21 4.05 2.61 5.15l.57.81c.37-.46 1-.89 1.59-1.06c1.02-.3 2.93-.15 3.16.65c.23.8-1.31 1.95-2.33 2.23c-.53.15-1.18.15-1.72 0L18 12c0 1.35-.45 2.6-1.2 3.6c.75.67 1.2 1.5 1.2 2.4m-6-2c-2.21 0-4 .9-4 2s1.79 2 4 2s4-.9 4-2s-1.79-2-4-2m0-2c1.12 0 2.17.21 3.07.56c.58-.69.93-1.56.93-2.56a4 4 0 0 0-4-4a4 4 0 0 0-4 4c0 1 .35 1.87.93 2.56c.9-.35 1.95-.56 3.07-.56m2.09-10.86" />
                        </svg>
                    </div>
                </div>
            </a>


            <div class="card">
                <div class="cardDetails">
                    <div class="numbers">0</div>
                    <div class="cardName">Stock</div>
                </div>
                <div class="iconBx">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
                        <path fill="currentColor" d="M12 6V0H4v6H0v7h16V6zm-5 6H1V7h2v1h2V7h2zM5 6V1h2v1h2V1h2v5zm10 6H9V7h2v1h2V7h2zM0 16h3v-1h10v1h3v-2H0z" />
                    </svg>
                </div>
            </div>
            <div class="card">
                <div class="cardDetails">
                    <div class="numbers">0</div>
                    <div class="cardName">Notifications</div>
                </div>
                <div class="iconBx">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M431 320.6c-1-3.6 1.2-8.6 3.3-12.2a33.68 33.68 0 0 1 2.1-3.1A162 162 0 0 0 464 215c.3-92.2-77.5-167-173.7-167c-83.9 0-153.9 57.1-170.3 132.9a160.7 160.7 0 0 0-3.7 34.2c0 92.3 74.8 169.1 171 169.1c15.3 0 35.9-4.6 47.2-7.7s22.5-7.2 25.4-8.3a26.44 26.44 0 0 1 9.3-1.7a26 26 0 0 1 10.1 2l56.7 20.1a13.52 13.52 0 0 0 3.9 1a8 8 0 0 0 8-8a12.85 12.85 0 0 0-.5-2.7Z" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M66.46 232a146.23 146.23 0 0 0 6.39 152.67c2.31 3.49 3.61 6.19 3.21 8s-11.93 61.87-11.93 61.87a8 8 0 0 0 2.71 7.68A8.17 8.17 0 0 0 72 464a7.26 7.26 0 0 0 2.91-.6l56.21-22a15.7 15.7 0 0 1 12 .2c18.94 7.38 39.88 12 60.83 12A159.21 159.21 0 0 0 284 432.11" />
                    </svg>
                </div>
            </div>
            <div class="card">
                <div class="cardDetails">
                    <div class="numbers">$0</div>
                    <div class="cardName">Earning</div>
                </div>
                <div class="iconBx">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                        <rect width="448" height="256" x="32" y="80" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" rx="16" ry="16" transform="rotate(180 256 208)" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M64 384h384M96 432h320" />
                        <circle cx="256" cy="208" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M480 160a80 80 0 0 1-80-80M32 160a80 80 0 0 0 80-80m368 176a80 80 0 0 0-80 80M32 256a80 80 0 0 1 80 80" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="bigCircle">


            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>
            <div class="smallSlice"></div>

            <div class="CirclePrincipale">
            </div>

            <div class="CirclePrincipaleTow">


                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSliceTow"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="smallSlice"></div>
                <div class="logoCircle">
                    <img style=" position: relative;  width: 8vw; height: 3vw; z-index: 1;" src="../img/logo/cow-removebgtow.png" alt="">
                </div>
                <div class="CirclePrincipaletree">

                    <div class="logoCircleTow">
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>
                        <div class="smallSliceTre"></div>


                    </div>
                    <div class="orderOne">

                    </div>
                    <div class="orderTow"></div>
                    <div class="orderTree"></div>
                    <div class="orderFour"></div>
                    <div class="orderFive"></div>
                    <div class="orderSix"></div>








                </div>
            </div>

            <?php
            $host = "localhost";
            $database = "cow_farmer_ahmed_billa";
            $username = "root";
            $password = "";

            $conn = mysqli_connect($host, $username, $password, $database);

            if (mysqli_connect_errno()) {
                die("Connection error: " . mysqli_connect_error());
            }

            $query = "SELECT id_cow, ord, iaDate FROM ia_details";
            $result = mysqli_query($conn, $query);

            if ($result) {
            ?>
                <div style="display: flex; flex-wrap: wrap;">
                    <?php
                    // Reference point to indicate debut
                    echo '<div class="debutPoint">Debut</div>';

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_cow = $row['id_cow'];
                        $ord = $row['ord'];

                        // Display id_cow based on ord
                        switch ($ord) {
                            case 1:
                                echo '<div class="orderOne"><span style="display: inline-block; width: 18px; height: 18px; border-radius: 50%; background-color: #FFD700; text-align: center; line-height: 19px; color: #fff; font-weight: bold; font-size: 10px;  ">' . $id_cow . '</span></div>';
                                break;
                            case 2:
                                echo '<div class="orderTow"><span style="display: inline-block; width: 18px; height: 18px; border-radius: 50%; background-color: #FFD700; text-align: center; line-height: 19px; color: #fff; font-weight: bold; font-size: 10px;  ">' . $id_cow . '</span></div>';
                                break;
                            case 3:
                                echo '<div class="orderTree"><span style="display: inline-block; width: 18px; height: 18px; border-radius: 50%; background-color: #FFD700; text-align: center; line-height: 19px; color: #fff; font-weight: bold; font-size: 10px;  ">' . $id_cow . '</span></div>';
                                break;
                            case 4:
                                echo '<div class="orderFour"><span style="display: inline-block; width: 18px; height: 18px; border-radius: 50%; background-color: #FFD700; text-align: center; line-height: 19px; color: #fff; font-weight: bold; font-size: 10px;  ">' . $id_cow . '</span></div>';
                                break;
                            case 5:
                                echo '<div class="orderFive">' . $id_cow . '</div>';
                                break;
                            case 6:
                                echo '<div class="orderSix">' . $id_cow . '</div>';
                                break;

                            default:
                        }
                    }
                    mysqli_free_result($result);
                    ?>
                </div>
            <?php
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            mysqli_close($conn);
            ?>
        </div>





    </div>
    <script>
        const referenceDate = new Date('2024-02-05');


        const currentDate = new Date();


        const daysPassed = Math.floor((currentDate - referenceDate) / (1000 * 60 * 60 * 24));


        const degrees = -daysPassed;


        const circle = document.querySelector('.CirclePrincipaleTow');
        circle.style.transform = `translate(-50%, -50%) rotate(${degrees}deg)`;
    </script>





    <!-- Charts 
            <div class="graphBox">
                <div class="box">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="box">
                    <canvas id="earning"></canvas>
                </div>
            </div>


            <!-- Details --
            <div class="details">
                <!-- Order Details List --
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Window Coolers</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Speakers</td>
                                <td>$620</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Wall Fan</td>
                                <td>$110</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Adidas Shoes</td>
                                <td>$620</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>Denim Shirts</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Casual Shoes</td>
                                <td>$575</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Wall Fan</td>
                                <td>$110</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Denim Shirts</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- New Customers --
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>
                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/customers/img1.jpg" alt="customer"></div>
                            </td>
                            <td>
                                <h4>David<br><span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/customers/img2.jpg" alt="customer"></div>
                            </td>
                            <td>
                                <h4>Ahmed<br><span>Egypt</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/customers/img3.jpg" alt="customer"></div>
                            </td>
                            <td>
                                <h4>Amelia<br><span>France</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/customers/img4.jpg" alt="customer"></div>
                            </td>
                            <td>
                                <h4>Sandy<br><span>Russia</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/customers/img5.jpg" alt="customer"></div>
                            </td>
                            <td>
                                <h4>Amit<br><span>Japan</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/customers/img6.jpg" alt="customer"></div>
                            </td>
                            <td>
                                <h4>Muhammad<br><span>India</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/customers/img7.jpg" alt="customer"></div>
                            </td>
                            <td>
                                <h4>Diana<br><span>Dubai</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/customers/img8.jpg" alt="customer"></div>
                            </td>
                            <td>
                                <h4>Abo Trieka<br><span>Egypt</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Code -->

    <!-- Scripts Files -->
    <script src="../js/all.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js" integrity="..."></script>
    <script src="../js/mycharts.js"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>