<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="globalbroadbandsolution.com">
        <meta name="keywords" content="gbs,global,broadband,solution,globalbroadband">
        <meta name="gbs-url" content="{{ getWebURL() }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Découvrez si votre immeuble est éligible à la Fibre Optique GBS">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

        <!-- Font icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">

        <!-- Addons CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/login/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/jquery/jquery-ui/jquery-ui.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/sweetalert2/dist/sweetalert2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/jquery/datetimepicker/css/jquery.datetimepicker.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/cropper/css/cropper.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/login/animate/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/login/css-hamburgers/hamburgers.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/login/animsition/css/animsition.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/login/select2/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/login/daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

        <!-- Core theme CSS-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

        <title>
@if (!empty($page_title))
            {{ $page_title }}
@else
            Global Broadband Solution
@endif
        </title>
    </head>

    <body style="background-color: #666666;">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
@yield('guest-content')
                    <div class="login100-more" style="background-image: url({{ asset('assets/img/bg-01.png') }}); background-attachment: fixed;"></div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('assets/addons/login/jquery/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/addons/login/animsition/js/animsition.min.js') }}"></script>
        <script src="{{ asset('assets/addons/login/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/addons/login/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/addons/login/select2/select2.min.js') }}"></script>
        <script src="{{ asset('assets/addons/login/daterangepicker/moment.min.js') }}"></script>
        <script src="{{ asset('assets/addons/login/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('assets/addons/login/countdowntime/countdowntime.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.custom.js') }}"></script>
    </body>
</html>
