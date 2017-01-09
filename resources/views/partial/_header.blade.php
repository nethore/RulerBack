<!-- Start: Header -->
<header class="navbar navbar-fixed-top navbar-shadow">
  <div class="navbar-branding">
    <a class="navbar-brand" href="{{ route('welcome') }}">
      <i class="icon-ruler"></i> <b>Ruler</b>Admin
    </a>
    <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
  </div>
  <ul class="nav navbar-nav navbar-right">
    {{-- <li class="dropdown menu-merge">
      <div class="navbar-btn btn-group">
        <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
          <span class="flag-xs flag-us"></span>
          <!-- <span class="caret"></span> -->
        </button>
        <ul class="dropdown-menu pv5 animated animated-short flipInX" role="menu">
          <li>
            <a href="javascript:void(0);">
              <span class="flag-xs flag-in mr10"></span> Hindu </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="flag-xs flag-tr mr10"></span> Turkish </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="flag-xs flag-es mr10"></span> Spanish </a>
          </li>
        </ul>
      </div>
    </li> --}}
    {{-- <li class="menu-divider hidden-xs">
      <i class="fa fa-circle"></i>
    </li> --}}

    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Se connecter</a></li>
    @else
    <li class="dropdown menu-merge">
      <a href="#" class="dropdown-toggle fw600 p15 pt20" data-toggle="dropdown">
        <span class="hidden-xs">{{ Auth::user()->name }}</span>
        <span class="caret caret-tp hidden-xs"></span>
      </a>
      <ul class="dropdown-menu list-group dropdown-persist w100" role="menu">
        <li class="dropdown-footer">
          <a href="{{ url('/logout') }}">
          <span class="fa fa-power-off pr5"></span> Déconnexion </a>
        </li>
      </ul>
    </li>
    @endif

  </ul>
</header>
<!-- End: Header -->
