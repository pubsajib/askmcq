<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ config('app.name', 'Laravel') }} | @yield('title') </title>
    <!-- css -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" />
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    @yield('styles')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
</head>
<body>
    @include('partials/message')
    <div id="app">
        @include('partials/header')
        <!-- Main Wrapper -->
        <div class="wrapper no-padding">
            @yield('content')
        </div><!-- Main Wrapper -->
        @include('partials/footer')
        @include('partials/modal-login')
        @include('partials/modal-register')
        @include('partials/modal-request_password')
        @isset ($token)
        @include('partials/modal-reset_password')
        @endisset
    </div>
    
    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.hashchange.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easytabs.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script>
        jQuery(function($) {
            @isset ($token) $('#reset_password').modal('show'); @endisset
            @if (session('loginModal')) $('#login').modal('show'); @endif
        });
    </script>
    <script>
        new Vue({
            el: '#app',
            data: {},
            methods : {
                loadRegistrationModal(){
                    $('#login').modal('hide');
                    $('#signup').modal('show');
                },
                loadLoginModal(){
                    $('#signup').modal('hide');
                    $('#login').modal('show');
                },
                showResetPassword(){
                    $('#login').modal('hide');
                    $('#reset_password').modal('show');
                },
                showRequestPassword(){
                    $('#login').modal('hide');
                    $('#request_password').modal('show');
                },
            }
        });
    </script>
    @yield('scripts')
</body>
</html>