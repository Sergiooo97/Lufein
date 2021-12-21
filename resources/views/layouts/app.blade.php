<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .swal-icon--error {
            border-color: #f27474;
            -webkit-animation: animateErrorIcon .5s;
            animation: animateErrorIcon .5s
        }

        .swal-icon--error__x-mark {
            position: relative;
            display: block;
            -webkit-animation: animateXMark .5s;
            animation: animateXMark .5s
        }

        .swal-icon--error__line {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px
        }

        .swal-icon--error__line--left {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px
        }

        .swal-icon--error__line--right {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px
        }

        @-webkit-keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @-webkit-keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        @keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        .swal-icon--warning {
            border-color: #f8bb86;
            -webkit-animation: pulseWarning .75s infinite alternate;
            animation: pulseWarning .75s infinite alternate
        }

        .swal-icon--warning__body {
            width: 5px;
            height: 47px;
            top: 10px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--warning__body,
        .swal-icon--warning__dot {
            position: absolute;
            left: 50%;
            background-color: #f8bb86
        }

        .swal-icon--warning__dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -4px;
            bottom: -11px
        }

        @-webkit-keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }

            to {
                border-color: #f8bb86
            }
        }

        @keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }

            to {
                border-color: #f8bb86
            }
        }

        .swal-icon--success {
            border-color: #a5dc86
        }

        .swal-icon--success:after,
        .swal-icon--success:before {
            content: "";
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            background: #fff;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal-icon--success:before {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px
        }

        .swal-icon--success:after {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in
        }

        .swal-icon--success__ring {
            width: 80px;
            height: 80px;
            border: 4px solid hsla(98, 55%, 69%, .2);
            border-radius: 50%;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2
        }

        .swal-icon--success__hide-corners {
            width: 5px;
            height: 90px;
            background-color: #fff;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal-icon--success__line {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2
        }

        .swal-icon--success__line--tip {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-animation: animateSuccessTip .75s;
            animation: animateSuccessTip .75s
        }

        .swal-icon--success__line--long {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: animateSuccessLong .75s;
            animation: animateSuccessLong .75s
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @-webkit-keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        @keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        .swal-icon--info {
            border-color: #c9dae1
        }

        .swal-icon--info:before {
            width: 5px;
            height: 29px;
            bottom: 17px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--info:after,
        .swal-icon--info:before {
            content: "";
            position: absolute;
            left: 50%;
            background-color: #c9dae1
        }

        .swal-icon--info:after {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -3px;
            top: 19px
        }

        .swal-icon {
            width: 80px;
            height: 80px;
            border-width: 4px;
            border-style: solid;
            border-radius: 50%;
            padding: 0;
            position: relative;
            box-sizing: content-box;
            margin: 20px auto
        }

        .swal-icon:first-child {
            margin-top: 32px
        }

        .swal-icon--custom {
            width: auto;
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0
        }

        .swal-icon img {
            max-width: 100%;
            max-height: 100%
        }

        .swal-title {
            color: rgba(0, 0, 0, .65);
            font-weight: 600;
            text-transform: none;
            position: relative;
            display: block;
            padding: 13px 16px;
            font-size: 27px;
            line-height: normal;
            text-align: center;
            margin-bottom: 0
        }

        .swal-title:first-child {
            margin-top: 26px
        }

        .swal-title:not(:first-child) {
            padding-bottom: 0
        }

        .swal-title:not(:last-child) {
            margin-bottom: 13px
        }

        .swal-text {
            font-size: 16px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: rgba(0, 0, 0, .64);
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box
        }

        .swal-text:first-child {
            margin-top: 45px
        }

        .swal-text:last-child {
            margin-bottom: 45px
        }

        .swal-footer {
            text-align: right;
            padding-top: 13px;
            margin-top: 13px;
            padding: 13px 16px;
            border-radius: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .swal-button-container {
            margin: 5px;
            display: inline-block;
            position: relative
        }

        .swal-button {
            background-color: #7cd1f9;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer
        }

        .swal-button[not:disabled]:hover {
            background-color: #78cbf2
        }

        .swal-button:active {
            background-color: #70bce0
        }

        .swal-button:focus {
            outline: none;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
        }

        .swal-button[disabled] {
            opacity: .5;
            cursor: default
        }

        .swal-button::-moz-focus-inner {
            border: 0
        }

        .swal-button--cancel {
            color: #555;
            background-color: #efefef
        }

        .swal-button--cancel[not:disabled]:hover {
            background-color: #e8e8e8
        }

        .swal-button--cancel:active {
            background-color: #d7d7d7
        }

        .swal-button--cancel:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
        }

        .swal-button--danger {
            background-color: #e64942
        }

        .swal-button--danger[not:disabled]:hover {
            background-color: #df4740
        }

        .swal-button--danger:active {
            background-color: #cf423b
        }

        .swal-button--danger:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
        }

        .swal-content {
            padding: 0 20px;
            margin-top: 20px;
            font-size: medium
        }

        .swal-content:last-child {
            margin-bottom: 20px
        }

        .swal-content__input,
        .swal-content__textarea {
            -webkit-appearance: none;
            background-color: #fff;
            border: none;
            font-size: 14px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, .14);
            padding: 10px 13px;
            border-radius: 2px;
            transition: border-color .2s
        }

        .swal-content__input:focus,
        .swal-content__textarea:focus {
            outline: none;
            border-color: #6db8ff
        }

        .swal-content__textarea {
            resize: vertical
        }

        .swal-button--loading {
            color: transparent
        }

        .swal-button--loading~.swal-button__loader {
            opacity: 1
        }

        .swal-button__loader {
            position: absolute;
            height: auto;
            width: 43px;
            z-index: 2;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            text-align: center;
            pointer-events: none;
            opacity: 0
        }

        .swal-button__loader div {
            display: inline-block;
            float: none;
            vertical-align: baseline;
            width: 9px;
            height: 9px;
            padding: 0;
            border: none;
            margin: 2px;
            opacity: .4;
            border-radius: 7px;
            background-color: hsla(0, 0%, 100%, .9);
            transition: background .2s;
            -webkit-animation: swal-loading-anim 1s infinite;
            animation: swal-loading-anim 1s infinite
        }

        .swal-button__loader div:nth-child(3n+2) {
            -webkit-animation-delay: .15s;
            animation-delay: .15s
        }

        .swal-button__loader div:nth-child(3n+3) {
            -webkit-animation-delay: .3s;
            animation-delay: .3s
        }

        @-webkit-keyframes swal-loading-anim {
            0% {
                opacity: .4
            }

            20% {
                opacity: .4
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .4
            }
        }

        @keyframes swal-loading-anim {
            0% {
                opacity: .4
            }

            20% {
                opacity: .4
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .4
            }
        }

        .swal-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 0;
            overflow-y: scroll;
            background-color: rgba(0, 0, 0, .4);
            z-index: 10000;
            pointer-events: none;
            opacity: 0;
            transition: opacity .3s
        }

        .swal-overlay:before {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            height: 100%
        }

        .swal-overlay--show-modal {
            opacity: 1;
            pointer-events: auto
        }

        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
            will-change: transform
        }

        .swal-modal {
            width: 478px;
            opacity: 0;
            pointer-events: none;
            background-color: #fff;
            text-align: center;
            border-radius: 5px;
            position: static;
            margin: 20px auto;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            z-index: 10001;
            transition: opacity .2s, -webkit-transform .3s;
            transition: transform .3s, opacity .2s;
            transition: transform .3s, opacity .2s, -webkit-transform .3s
        }

        @media (max-width:500px) {
            .swal-modal {
                width: calc(100% - 20px)
            }
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

    </style>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/favicon.png">

    {{-- Style --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

</head>

<body class="animsition" style="animation-duration: 1500ms; opacity: 1;">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop fix-menu-desktop">
            <!-- Topbar -->
            <!-- Topbar -->
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>

                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            Help &amp; FAQs
                        </a>

                        <a href="{{ route('user.perfil') }}" class="flex-c-m trans-04 p-lr-25">
                            Mi cuenta
                        </a>


                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop" style="top: 0px;">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="/" class="logo">
                        <img src="{{ asset('img/Logo-Negro.png') }}" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="{{ request()->is('/') ? 'active-menu' : '' }}">
                                <a href="/">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Homepage 1</a></li>
                                    <li><a href="home-02.html">Homepage 2</a></li>
                                    <li><a href="home-03.html">Homepage 3</a></li>
                                </ul>
                            </li>




                            @if (Auth::check())
                                @if (@Auth::user()->hasRole('cliente'))
                                    <li
                                        class="{{ request()->is('productos/catalogo/Papeleria') ? 'active-menu' : '' }}">
                                        <a
                                            href="{{ route('productos.catalogo', ['cat' => 'Papeleria']) }}">Papeleria</a>
                                    </li>

                                    <li
                                        class="{{ request()->is('productos/catalogo/Merceria') ? 'active-menu' : '' }}">
                                        <a
                                            href="{{ route('productos.catalogo', ['cat' => 'Merceria']) }}">Merceria</a>
                                    </li>

                                    <li
                                        class="{{ request()->is('productos/catalogo/Regalos') ? 'active-menu' : '' }}">
                                        <a href="{{ route('productos.catalogo', ['cat' => 'Regalos']) }}">Regalos</a>
                                    </li>

                                    <li
                                        class="{{ request()->is('productos/catalogo/Novedades') ? 'active-menu' : '' }}">
                                        <a
                                            href="{{ route('productos.catalogo', ['cat' => 'Novedades']) }}">Novedades</a>
                                    </li>
                                    <li
                                    class="{{ request()->is('productos/catalogo/Cosmeticos') ? 'active-menu' : '' }}">
                                    <a
                                        href="{{ route('productos.catalogo', ['cat' => 'cosmeticos']) }}">Cosmeticos</a>
                                </li>
                                    <li
                                        class="{{ request()->is('productos/catalogo/Marcas') ? 'active-menu' : '' }}">
                                        <a href="{{ route('productos.catalogo', ['cat' => 'Regalos']) }}">Marcas</a>
                                    </li>

                                @endif
                            @else

                                <li class="{{ request()->is('productos/catalogo/Papeleria') ? 'active-menu' : '' }}">
                                    <a href="{{ route('productos.catalogo', ['cat' => 'Papeleria']) }}">Papeleria</a>
                                </li>

                                <li class="{{ request()->is('productos/catalogo/Merceria') ? 'active-menu' : '' }}">
                                    <a href="{{ route('productos.catalogo', ['cat' => 'Merceria']) }}">Merceria</a>
                                </li>

                                <li class="{{ request()->is('productos/catalogo/Regalos') ? 'active-menu' : '' }}">
                                    <a href="{{ route('productos.catalogo', ['cat' => 'Regalos']) }}">Regalos</a>
                                </li>

                                <li class="{{ request()->is('productos/catalogo/Novedades') ? 'active-menu' : '' }}">
                                    <a href="{{ route('productos.catalogo', ['cat' => 'Novedades']) }}">Novedades</a>
                                </li>
                                <li
                                                class="{{ request()->is('productos/catalogo/Cosmeticos') ? 'active-menu' : '' }}">
                                                <a
                                                    href="{{ route('productos.catalogo', ['cat' => 'cosmeticos']) }}">Cosmeticos</a>
                                            </li>

                                <li class="{{ request()->is('productos/catalogo/Marcas') ? 'active-menu' : '' }}">
                                    <a href="{{ route('productos.catalogo', ['cat' => 'Regalos']) }}">Marcas</a>
                                </li>
                            @endif



                            @if (Auth::check())
                                @if (@Auth::user()->hasRole('admin'))
                                    <li>
                                        <a href="#">productos</a>
                                        <ul class="sub-menu">

                                            <li
                                                class="{{ request()->is('productos/catalogo/Papeleria') ? 'active-menu' : '' }}">
                                                <a
                                                    href="{{ route('productos.catalogo', ['cat' => 'Papeleria']) }}">Papeleria</a>
                                            </li>

                                            <li
                                                class="{{ request()->is('productos/catalogo/Merceria') ? 'active-menu' : '' }}">
                                                <a
                                                    href="{{ route('productos.catalogo', ['cat' => 'Merceria']) }}">Merceria</a>
                                            </li>

                                            <li
                                                class="{{ request()->is('productos/catalogo/Regalos') ? 'active-menu' : '' }}">
                                                <a
                                                    href="{{ route('productos.catalogo', ['cat' => 'Regalos']) }}">Regalos</a>
                                            </li>

                                            <li
                                                class="{{ request()->is('productos/catalogo/Novedades') ? 'active-menu' : '' }}">
                                                <a
                                                    href="{{ route('productos.catalogo', ['cat' => 'Novedades']) }}">Novedades</a>
                                            </li>
                                            <li
                                                class="{{ request()->is('productos/catalogo/Cosmeticos') ? 'active-menu' : '' }}">
                                                <a
                                                    href="{{ route('productos.catalogo', ['cat' => 'cosmeticos']) }}">Cosmeticos</a>
                                            </li>

                                            <li
                                                class="{{ request()->is('productos/catalogo/Marcas') ? 'active-menu' : '' }}">
                                                <a
                                                    href="{{ route('productos.catalogo', ['cat' => 'Regalos']) }}">Marcas</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin') }}">Administrar productos</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('clientes') }}">Clientes</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}"> logout </a>
                                    </li>

                                @endif
                            @endif

                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>
                        @if (Auth::check())
                            @if (@Auth::user()->hasRole('cliente'))
                                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>

                                <a href="#"
                                    class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                                    data-notify="0">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                </a>
                            @endif
                        @endif



                        <a class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 ">
                            <i class="zmdi zmdi-account"></i>


                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <div class="dropdown show">
                                            <a class="link-item" href="{{ url('/home') }} role=" button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <p style="font-size: 19px; color:#3f3f3f;">{{ Auth::user()->name }}
                                                </p>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ route('user.perfil') }}">Perfil</a>
                                                <a class="dropdown-item" href="{{ url('/logout') }}">Cerrar
                                                    Sesion</a>
                                            </div>
                                        </div>

                                    @else
                                        <a href="{{ route('user.cuenta') }}"
                                            class="text-sm text-gray-700 dark:text-gray-500 underline">
                                            <p style="color: #a0a0a0;">Iniciar sesion</p>
                                        </a>


                                    @endauth
                                </div>
                            @endif

                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="/">
                    <img src="{{ asset('img/Logo-Negro.png') }}" alt="IMG-LOGO">
                </a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                    data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>



                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 ">
                    <i class="zmdi zmdi-account"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">


                <ul class="main-menu-m">
                    <li class="{{ request()->is('/') ? 'active-menu' : '' }}">
                        <a href="">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Homepage 1</a></li>
                            <li><a href="home-02.html">Homepage 2</a></li>
                            <li><a href="home-03.html">Homepage 3</a></li>
                        </ul>
                    </li>

                    <li class="{{ request()->is('productos/catalogo/Papeleria') ? 'active-menu' : '' }}">
                        <a href="{{ route('productos.catalogo', ['cat' => 'Papeleria']) }}">Papeleria</a>
                    </li>

                    <li class="{{ request()->is('productos/catalogo/Merceria') ? 'active-menu' : '' }}">
                        <a href="{{ route('productos.catalogo', ['cat' => 'Merceria']) }}">Merceria</a>
                    </li>

                    <li class="{{ request()->is('productos/catalogo/Regalos') ? 'active-menu' : '' }}">
                        <a href="{{ route('productos.catalogo', ['cat' => 'Regalos']) }}">Regalos</a>
                    </li>

                    <li class="{{ request()->is('productos/catalogo/Novedades') ? 'active-menu' : '' }}">
                        <a href="{{ route('productos.catalogo', ['cat' => 'Novedades']) }}">Novedades</a>
                    </li>
                    <li
                    class="{{ request()->is('productos/catalogo/Cosmeticos') ? 'active-menu' : '' }}">
                    <a
                        href="{{ route('productos.catalogo', ['cat' => 'cosmeticos']) }}">Cosmeticos</a>
                </li>
                    <li class="{{ request()->is('productos/catalogo/Marcas') ? 'active-menu' : '' }}">
                        <a href="{{ route('productos.catalogo', ['cat' => 'Regalos']) }}">Marcas</a>
                    </li>



                    @if (Auth::check())
                        @if (@Auth::user()->hasRole('admin'))
                            <li>
                                <a href="{{ route('admin') }}">Administrar productos</a>
                            </li>
                            <li>
                                <a href="{{ route('clientes') }}">Clientes</a>
                            </li>
                            <li><a href="{{ url('/logout') }}"> logout </a></li>
                        @endif
                    @endif
                </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="images/icon-close2.png" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>
    <main class="py-4">
        @yield('content')
    </main>


    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Contacto
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        Ubicacion: CALLE 19 X 28 Y 30, NO.2019E, MIRAFLORES, MERIDA YUCATAN <br>
                        Codigo postal: 97179 <br>

                        TELEFONO:<br>
                        Miraflores: +52 9995271459<br>
                        Opichen: +52 9994922111<br>
                        CORREO: lufeinmx@gmail.com
                    </p>

                    <div class="p-t-27">
                        <a href="https://web.facebook.com/Lufeinmx/?_rdc=1&_rdr"
                            class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="https://www.instagram.com/lufeinmx/?hl=es" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-whatsapp-p"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categorias
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="{{ route('productos.show', ['id' => 'Papeleria']) }}"
                                class="stext-107 cl7 hov-cl1 trans-04">
                                Papeleria
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="{{ route('productos.show', ['id' => 'Regalos']) }}"
                                class="stext-107 cl7 hov-cl1 trans-04">
                                Regalos
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="{{ route('productos.show', ['id' => 'Novedades']) }}"
                                class="stext-107 cl7 hov-cl1 trans-04">
                                Novedades
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="{{ route('productos.show', ['id' => 'Merceria']) }}"
                                class="stext-107 cl7 hov-cl1 trans-04">
                                Merceria
                            </a>
                        </li>
                    </ul>

                    <h4 class="stext-301 cl0 p-b-30">
                        Sucursales
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Opichen
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Miraflores
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Cuenta
                    </h4>

                    <ul>
                        @if (Auth::check())
                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Mi cuenta
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                    Mi carrito
                                </a>
                            </li>




                        @endif
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <li class="p-b-10">
                                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                            Cerrar sesion

                                        </a>
                                    </li>
                                @else
                                    <a href="{{ route('user.cuenta') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">
                                        <p style="color: #a0a0a0;">Iniciar sesion</p>
                                    </a>


                                @endauth
                            </div>
                        @endif


                    </ul>
                </div>



                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Enlaces
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="{{ route('welcome') }}" class="stext-107 cl7 hov-cl1 trans-04">
                                Inicio
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Mi carrito
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="images/icon-pay-01.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/icon-pay-02.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/Logo-Mercado-Pago.png" width="35" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/icon-pay-04.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/icon-pay-05.png" alt="ICON-PAY">
                    </a>
                </div>

                <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>2021 All rights reserved | Made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp;
                    distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>
            </div>
        </div>
    </footer>





    {{-- <!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categorias
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="{{ route('productos.show', ['id' => 'Papeleria']) }}"
                                class="stext-107 cl7 hov-cl1 trans-04">
                                Papeleria
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="{{ route('productos.show', ['id' => 'Regalos']) }}"
                                class="stext-107 cl7 hov-cl1 trans-04">
                                Regalos
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="{{ route('productos.show', ['id' => 'Novedades']) }}"
                                class="stext-107 cl7 hov-cl1 trans-04">
                                Novedades
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="{{ route('productos.show', ['id' => 'Merceria']) }}"
                                class="stext-107 cl7 hov-cl1 trans-04">
                                Merceria
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="col-sm-6 col-lg-3 p-b-50 pull-right">
                    <h4 class="stext-301 cl0 p-b-30">
                        CONTACTO
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        (+1) 96 716 6879
                    </p>

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="images/icon-pay-01.png" alt="ICON-PAY">
                    </a>


                </div>

                <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>2021 All rights reserved | Made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="/" target="_blank">Lufein</a></a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>
            </div>
        </div>
    </footer> --}}


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn" style="display: flex;">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>


    <!--===============================================================================================-->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick-custom.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/parallax100.js') }}"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e) {
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function() {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="js/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
