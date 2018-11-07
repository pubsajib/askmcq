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
    <li> <a href="{{ route('user.create') }}">Add New</a> </li>
  </ul>
</li>
{{-- USER ROLES --}}
<li class="nav-item hidden" data-toggle="tooltip" data-placement="right" title="Dashboard">
  <a class="nav-link" href="{{ route('role.index') }}">
    <i class="fa fa-fw fa-user"></i>
    <span class="nav-link-text">User Role</span>
  </a>
</li>
{{-- CATEGORIES --}}
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCategories">
      <i class="fa fa-fw fa-users"></i>
      <span class="nav-link-text">Categories</span>
    </a>
  <ul class="sidenav-second-level collapse" id="collapseCategories">
    <li> <a href="{{ route('group.index') }}">Groups</a> </li>
    <li> <a href="{{ route('category.index') }}">Categories</a> </li>
    <li> <a href="{{ route('subcategory.index') }}">Sub Categories</a> </li>
  </ul>
</li>

{{-- PROFILE --}}
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
  <a class="nav-link" href="{{ route('profile', auth()->User()->id) }}">
    <i class="fa fa-fw fa-user"></i>
    <span class="nav-link-text">Profile</span>
  </a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
  <a class="nav-link" href="#">
    <i class="fa fa-fw fa-link"></i>
    <span class="nav-link-text">Link</span>
  </a>
</li>
</ul>