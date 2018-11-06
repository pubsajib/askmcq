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
{{-- GROUPS --}}
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Groups">
  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseGroups">
    <i class="fa fa-fw fa-users"></i>
    <span class="nav-link-text">Groups</span>
  </a>
  <ul class="sidenav-second-level collapse" id="collapseGroups">
    <li> <a href="{{ route('group.index') }}">All Groups</a> </li>
    <li> <a href="{{ route('group.create') }}">Create New</a> </li>
  </ul>
</li>
{{-- CATEGORIES --}}
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Categories">
  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCategories">
    <i class="fa fa-fw fa-users"></i>
    <span class="nav-link-text">Categories</span>
  </a>
  <ul class="sidenav-second-level collapse" id="collapseCategories">
    <li> <a href="{{ route('category.index') }}">All Categories</a> </li>
    <li> <a href="{{ route('category.create') }}">Create New</a> </li>
  </ul>
</li>
{{-- SUB CATEGORIES --}}
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sub Categories">
  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSubCategories">
    <i class="fa fa-fw fa-users"></i>
    <span class="nav-link-text">Sub Categories</span>
  </a>
  <ul class="sidenav-second-level collapse" id="collapseSubCategories">
    <li> <a href="{{ route('subcategory.index') }}">All Sub Categories</a> </li>
    <li> <a href="{{ route('subcategory.create') }}">Create New</a> </li>
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