<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }} | @yield('title') </title>
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('backend/css/sb-admin.css') }}" rel="stylesheet">
  @yield('styles')
  <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
</head>

<body class="sticky-footer bg-dark" id="page-top">
  <div id="App" class="wrapper">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" id="mainNav">
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        @include('admin.partials.nav-left')
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        @include('admin.partials.nav-top')
      </div>
    </nav>
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          @yield('breadcrumb')
          <li class="breadcrumb-item"><strong>@yield('title')</strong></li>
        </ol>
        @include('admin.partials.message')
        
        @yield('content')
      </div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->
      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © askmcq.com @php echo date('Y') @endphp</small>
          </div>
        </div>
      </footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="{{ route('admin.logout') }}">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('backend/js/sb-admin.min.js') }}"></script>
  @yield('scripts')
</body>
</html>
