<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ config('app.name', 'Laravel') }} | @yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- css -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" />
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}?v={{ time() }}" /> --}}
    @yield('styles')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
</head>
<body class="{{ bodyClass() }}">
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
            @isset ($token) jQuery('#reset_password').modal('show'); @endisset
            @if (session('loginModal')) jQuery('#login').modal('show'); @endif
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
                groupModal(groupID){
                    // MAKE AJAX CALL AND FETCH SUB CATEGORIES FOR groupID
                    var vue = this;
                    axios.get('api/group/'+ groupID)
                    .then(function(response) {
                        // console.log(response.data);
                        vue.showSubCategoryModal(response.data);
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                },
                showSubCategoryModal(data){
                    var modal = '';
                    if (!jQuery.isEmptyObject(data.categories)){
                       data.categories.forEach(function(category) {
                            if (!jQuery.isEmptyObject(category.subcategories)) {
                                modal += '<div class="card">';
                                modal += '<div class="card-header" id="category_'+ category.id +'">'+
                                        '<h5 class="mb-0">'+
                                            '<button class="btn cat-block" type="button" data-toggle="collapse" data-target="#catCollapse_'+ category.id +'" aria-expanded="true" aria-controls="catCollapse_'+ category.id +'">'+ category.name +
                                            '</button>'+
                                        '</h5>'+
                                    '</div>';
                                modal += '<div id="catCollapse_'+ category.id +'" class="collapse" aria-labelledby="headingOne" data-parent="#subcategoryList">'+
                                    '<div class="card-body">'+
                                        '<div class="row">';
                                            category.subcategories.forEach(function(subcategory) {
                                                var subCatID = 'sub_'+ subcategory.category_id +'_'+ subcategory.id;
                                                modal += '<div class="col-sm-4">';
                                                    modal += '<p>'+ 
                                                            '<label for="'+ subCatID +'"> <input id="'+ subCatID +'" type="radio" name="subcategory" class="subCategoryRadio" txt="'+ category.name +' > '+ subcategory.name +'" value="'+ subcategory.id +'" />'+ subcategory.name +'</label>'+
                                                        '</p> ';
                                                modal += '</div>';
                                            });
                                modal += '</div>'+
                                    '</div>'+
                                '</div>';
                                modal += '</div>';
                            }
                       });
                    }
                    jQuery('#subcategoryList').html(modal);
                    if (modal) jQuery('#subCategoryModal').modal('show');
                },
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
    @yield('scripts')
</body>
</html>