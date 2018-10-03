@php ($inactiveUsers = inactiveUsers())
<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
{{-- DASHBOARD --}}
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
  <a class="nav-link" href="index.html">
    <i class="fa fa-fw fa-dashboard"></i>
    <span class="nav-link-text">Dashboard</span>
  </a>
</li>

{{-- USERS --}}
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUsers" data-parent="#exampleAccordion">
    <i class="fa fa-fw fa-users"></i>
    <span class="nav-link-text">Users {!! getBadgeFor($inactiveUsers) !!}</span>
  </a>
  <ul class="sidenav-second-level collapse" id="collapseUsers">
    <li> <a href="{{ route('user.index') }}">All Users</a> </li>
    <li> <a href="{{ route('user.active') }}">Acitve Users</a> </li>
    <li> <a href="{{ route('user.inactive') }}">Inactive Users {!! getBadgeFor($inactiveUsers) !!}</a> </li>
    <li> <a href="{{ route('user.freeze') }}">Freeze Users</a> </li>
    <li> <a href="{{ route('user.create') }}">Create New</a> </li>
  </ul>
</li>
{{-- USER ROLES --}}
<li class="nav-item hidden" data-toggle="tooltip" data-placement="right" title="Dashboard">
  <a class="nav-link" href="{{ route('role.index') }}">
    <i class="fa fa-fw fa-user"></i>
    <span class="nav-link-text">User Role</span>
  </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
  <a class="nav-link" href="{{ route('profile', auth()->User()->id) }}">
    <i class="fa fa-fw fa-user"></i>
    <span class="nav-link-text">Profile</span>
  </a>
</li>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
  <a class="nav-link" href="charts.html">
    <i class="fa fa-fw fa-area-chart"></i>
    <span class="nav-link-text">Charts</span>
  </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
  <a class="nav-link" href="tables.html">
    <i class="fa fa-fw fa-table"></i>
    <span class="nav-link-text">Tables</span>
  </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
    <i class="fa fa-fw fa-wrench"></i>
    <span class="nav-link-text">Components</span>
  </a>
  <ul class="sidenav-second-level collapse" id="collapseComponents">
    <li>
      <a href="navbar.html">Navbar</a>
    </li>
    <li>
      <a href="cards.html">Cards</a>
    </li>
  </ul>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
    <i class="fa fa-fw fa-file"></i>
    <span class="nav-link-text">Example Pages</span>
  </a>
  <ul class="sidenav-second-level collapse" id="collapseExamplePages">
    <li>
      <a href="login.html">Login Page</a>
    </li>
    <li>
      <a href="register.html">Registration Page</a>
    </li>
    <li>
      <a href="forgot-password.html">Forgot Password Page</a>
    </li>
    <li>
      <a href="blank.html">Blank Page</a>
    </li>
  </ul>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
    <i class="fa fa-fw fa-sitemap"></i>
    <span class="nav-link-text">Menu Levels</span>
  </a>
  <ul class="sidenav-second-level collapse" id="collapseMulti">
    <li>
      <a href="#">Second Level Item</a>
    </li>
    <li>
      <a href="#">Second Level Item</a>
    </li>
    <li>
      <a href="#">Second Level Item</a>
    </li>
    <li>
      <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
      <ul class="sidenav-third-level collapse" id="collapseMulti2">
        <li>
          <a href="#">Third Level Item</a>
        </li>
        <li>
          <a href="#">Third Level Item</a>
        </li>
        <li>
          <a href="#">Third Level Item</a>
        </li>
      </ul>
    </li>
  </ul>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
  <a class="nav-link" href="#">
    <i class="fa fa-fw fa-link"></i>
    <span class="nav-link-text">Link</span>
  </a>
</li>
</ul>