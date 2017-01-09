@extends('layout-auth')

@section('content')
  <!-- Start: Content-Wrapper -->
  <section id="content_wrapper">

    <!-- Begin: Content -->
    <section id="content">

      <div class="admin-form theme-info mw500" id="login">

        <!-- Login Logo -->
        <div class="row table-layout">
          <h1 class="ruler mb10"><i class="icon-ruler"></i> <span>Ruler</span> Admin</h1>
        </div>

        <!-- Login Panel/Form -->
        <div class="panel mt30 mb25">

          <form role="form" method="POST" action="{{ url('/login') }}" id="contact">
            <div class="panel-body bg-light p25 pb15">
              {{ csrf_field() }}

              <!-- Username Input -->
              <div class="section">
                <label for="email" class="field-label text-muted fs18 mb10">E-mail</label>
                <label for="email" class="field prepend-icon">
                  <input type="text" name="email" id="email" class="gui-input" placeholder="Enter email">
                  <label for="email" class="field-icon">
                    <i class="fa fa-envelope-o"></i>
                  </label>
                </label>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>

              <!-- Password Input -->
              <div class="section">
                <label for="username" class="field-label text-muted fs18 mb10">Mot de passe</label>
                <label for="password" class="field prepend-icon">
                  <input type="password" name="password" id="password" class="gui-input" placeholder="Veuillez saisir votre mot de passe">
                  <label for="password" class="field-icon">
                    <i class="fa fa-lock"></i>
                  </label>
                </label>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="panel-footer clearfix">
              <button type="submit" class="button btn-primary mr10 pull-right">Se connecter</button>
              <label class="switch ib switch-primary mt10">
                <input type="checkbox" name="remember" id="remember" checked>
                <label for="remember" data-on="OUI" data-off="NON"></label>
                <span>Se souvenir de moi</span>
              </label>
            </div>

          </form>
        </div>

        <!-- Registration Links -->
        <div class="login-links">
          <p>
            <a href="{{ url('/password/reset') }}" class="active" title="Mot de passe oublié">Mot de passe oublié</a>
          </p>
          <p>
            <a href="{{ url('/') }}" class="active" title="Revenir sur le site">Revenir sur le site</a>
          </p>
        </div>

      </div>

    </section>
    <!-- End: Content -->

  </section>
  <!-- End: Content-Wrapper -->
@endsection
