<!-- Start: Sidebar -->
<aside id="sidebar_left" class="nano nano-light affix">

  <!-- Start: Sidebar Left Content -->
  <div class="sidebar-left-content nano-content">

    <!-- Start: Sidebar Header -->

    <!-- End: Sidebar Header -->

    <!-- Start: Sidebar Menu -->
    <ul class="nav sidebar-menu">
      <li class="sidebar-label pt20">Ruler</li>
      <li class="{{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}">
        <a href="{{ route('welcome') }}">
          <span class="fa fa-dashboard"></span>
          <span class="sidebar-title">Accueil</span>
        </a>
      </li>
      <li class="{{ Route::currentRouteName() === 'register.create' ? 'active' : '' }}">
        <a href="{{ route('register.create') }}">
          <span class="fa fa-plus-circle"></span>
          <span class="sidebar-title">Ajouter un administrateur</span>
        </a>
      </li>
      <li>
        <a href="{{ route('ruler') }}">
          <span class="fa fa-sign-out"></span>
          <span class="sidebar-title">Se rendre sur le site</span>
        </a>
      </li>
      <li class="sidebar-label pt15">Gestion des données</li>
      <li>
        <a class="accordion-toggle {{ strpos(Route::currentRouteName(), 'celebrity') === 0 ? 'menu-open' : '' }}" href="#">
          <span class="fa fa-user"></span>
          <span class="sidebar-title">Personnalités</span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li class="{{ Route::currentRouteName() === 'celebrity.index' ? 'active' : '' }}">
            <a href="{{ route('celebrity.index') }}">
              <span class="fa fa fa-list"></span>
              Liste de personnalités
            </a>
          </li>
          <li class="{{ Route::currentRouteName() === 'celebrity.create' ? 'active' : '' }}">
            <a href="{{ route('celebrity.create') }}">
              <span class="fa fa fa-plus"></span>
              Ajouter une personnalité
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="accordion-toggle {{ strpos(Route::currentRouteName(), 'picture') === 0 ? 'menu-open' : '' }}" href="#">
          <span class="fa fa-camera-retro"></span>
          <span class="sidebar-title">Photos</span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li class="{{ Route::currentRouteName() === 'picture.index' ? 'active' : '' }}">
            <a href="{{ route('picture.index') }}">
              <span class="fa fa fa-picture-o"></span>
              Galerie des photos
            </a>
          </li>
          <li class="{{ Route::currentRouteName() === 'picture.create' ? 'active' : '' }}">
            <a href="{{ route('picture.create') }}">
              <span class="fa fa fa-plus"></span>
              Ajouter une photo
            </a>
          </li>
        </ul>
      </li>

    <!-- Start: Sidebar Collapse Button -->
    <div class="sidebar-toggle-mini">
      <a href="#">
        <span class="fa fa-sign-out"></span>
      </a>
    </div>
    <!-- End: Sidebar Collapse Button -->

  </div>
  <!-- End: Sidebar Left Content -->

</aside>
