<!-- header -->
<header class="site-header">
    <div class="container">
        <div class="desktop">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/logo/site-logo.png') }}" alt="Logo" /></a>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="header-left me">
                        <ul id="menu-left">
                            <li class="parent">
                                <a href="#">Explore <span class="fa fa-angle-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="#">links</a></li>
                                    <li><a href="#"><i class="icon-credit-card"></i>  links</a></li>
                                    <li><a href="#"><i class="icon-gift"></i> links</a></li>
                                    <li><a class="parent" href="#"><i class="icon-file-alt"></i> links</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">links</a></li>
                                            <li><a href="#">links</a></li>
                                            <li><a href="#">links</a></li>
                                            <li><a href="#">links</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="header-search me">
                        <form action="" method="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="header-search"><img src="{{ asset('images/icon/icon-search.png') }}" alt=""></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search Courses, Topices & Educators" name="" aria-describedby="header-search">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-sm-3">              
                    <div class="header-user text-right me">
                        @if (Auth::check())
                            {{-- <a href="{{ route('admin.logout') }}" class="btn btn-theme-border pill">Log out</a> --}}
                            <a href="{{ route('profile') }}" class="btn btn-theme-border pill">Profile</a>
                            <a href="javascript:;" class="btn btn-theme-border pill dropdown-toggle" data-toggle="dropdown"><span class="fa fa-gear"></span> Setting</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profile</a>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}">Log out</a>
                            </div>
                        @else
                            <a href="#" class="btn btn-theme-border pill" data-toggle="modal" data-target="#login">Login</a>
                            <a href="#" class="btn btn-theme-border pill" data-toggle="modal" data-target="#signup">Sign up</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile">
            <div class="row">
                <div class="col">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('images/logo/site-logo.png') }}" alt="Logo" /></a>
                    </div>
                </div>
                <div class="col-7">             
                    <div class="header-user text-right me">
                        <a href="#" class="btn btn-theme-border pill" data-toggle="modal" data-target="#login">Login</a>
                        <a href="#" class="btn btn-theme-border pill" data-toggle="modal" data-target="#signup">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="header-search me">
                        <form action="" method="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="header-search"><img src="{{ asset('images/icon/icon-search.png') }}" alt=""></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search Courses, Topices & Educators" name="" aria-describedby="header-search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!-- / header -->