<header class="navbar header">
  <a href="\" class="navbar-brand">
      {!! file_get_contents(asset('svg/tasks-logo.svg')) !!}
  </a>

  @if(Auth::check())
    <a href="\" class="nav-link ml-auto header__link">{{ Auth::user()['name'] }}</a>
    <a href="\logout" class="nav-link header__link">Logout</a>
  @else
    <a href="\login" class="nav-link ml-auto header__link">Login</a>
    \
    <a href="\register" class="nav-link header__link">Register</a>
  @endif
</header>