@php($routeName = str_replace('profile.', '', Route::currentRouteName()) )
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}?v={{ time() }}" /> --}}
    @yield('styles')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
</head>
<body class="{{ bodyClass() }}">
    @include('partials/message')
    <div id="app">
        @include('partials/header')
        <!-- Main Wrapper -->
        <div class="wrapper no-padding">
            <div class="container">
                <div class="row">
                    <nav class="col-sm-2 profileNav">
                        <div class="profileNavWrapper">
                            <ul>
                                <li class="{{ $routeName == 'edit' ? 'active' : '' }}"><a href="{{ route('profile.edit') }}">Profile</a></li>
                                <li class="{{ $routeName == 'password' ? 'active' : '' }}"><a href="{{ route('profile.password') }}">Password</a></li>
                                <li><a href="javascript:;">Socials</a></li>
                            </ul>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                    </nav>
                    <div class="col-sm-10"><br>
                        @yield('content')
                        <br><br>
                    </div>
                </div>
            </div>
        </div><!-- Main Wrapper -->
        @include('partials/modal-image')
        @include('partials/footer')
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
            $('#imageUpload').modal('show');
            @isset ($token) jQuery('#reset_password').modal('show'); @endisset
            @if (session('loginModal')) jQuery('#login').modal('show'); @endif
        });
    </script>
    <script>
        new Vue({
            el: '#app',
            data: {},
            methods : {
                bioInsert(){
                    $('.bioInsert .edit').addClass('d-none');
                    $('.bioInsert .done, .bioInsert form').removeClass('d-none');
                },
                bioInserted(){
                    var bio = $('.bioInsert form input').val().trim();
                    if (bio) {
                        var vue = this;
                        axios.post('api/user-bio', { bio: bio })
                        .then(function(response) {
                            $('.bioInsert span.txt').text(response.data);
                            $('.bioInsert .done, .bioInsert form').addClass('d-none');
                            $('.bioInsert .edit').removeClass('d-none');
                            // console.log(response.data);
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                    } else {
                        alert('Nothing Inserted.');
                    }
                },
            }
        });
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        var resize = $('#upload-demo').croppie({
            enableExif: true,
            enableOrientation: true,    
            viewport: { 
                width: 200,
                height: 200,
                type: 'circle'
            },
            boundary: {
                width: 300,
                height: 300
            }
        });
        $('#image').on('change', function () { 
          var reader = new FileReader();
            reader.onload = function (e) {
              resize.croppie('bind',{
                url: e.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL(this.files[0]);
        });
        $('.upload-image').on('click', function (ev) {
          resize.croppie('result', {
            type: 'canvas',
            size: 'viewport'
          }).then(function (img) {
            $.ajax({
              url: "{{route('image.upload')}}",
              type: "POST",
              data: {"image":img},
              success: function (data) {
                html = '<img src="' + img + '" />';
                $("#preview-crop-image").html(html);
              }
            });
          });
        });
    </script>
    @yield('scripts')
</body>
</html>