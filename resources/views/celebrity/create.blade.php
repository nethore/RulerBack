@extends('layout')

@section('title')
  @parent - Ajouter une personnalité
@endsection

@section('css')
  @parent
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin-tools/admin-forms/css/admin-forms.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">
@endsection

@section('js')
  @parent
  <script src="{{ asset('assets/js/bootstrap-select.js') }}"></script>
@endsection

@section('content')
  <!-- Begin: Content -->
  <section id="content" class="table-layout">

    <div class="tray tray-center">
      <div class="pl15 pr50">
        <h4> Ajouter une personnalité </h4>
        <hr class="alt short">
        @if(count($errors->all()))
           <div class="alert alert-danger">
               <ul>
                   @foreach($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
      </div>
        <div class="center-block mw800">
          <!-- Begin: Admin Form -->
          <div class="admin-form">

          <form method="post" action="{{ route('celebrity.create') }}" id="form-ui">

          {{ csrf_field() }}

                <!-- Basic Inputs -->
                <div class="row">
                  <div class="col-md-5">
                    <div class="section">
                      <label class="field">
                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Prénom">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="section">
                      <label class="field">
                        <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Nom de famille">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="section">
                      <label class="field select">
                        <select id="gender" name="gender">
                          <option value="" selected disabled>Sexe</option>
                          <option value="male">Homme</option>
                          <option value="female">Femme</option>
                        </select>
                        <i class="arrow"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <select class="selectpicker" data-live-search="true" id="picture" name="picture">
                      <option value="0" selected disabled>Photo</option>
                      @foreach($pictures as $picture)
                        <option value="{{ $picture->id }}" data-thumbnail="{{ $picture->url }}">{{ $picture->alias }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-4">
                    <div class="section">
                      <label class="field">
                        <input type="text" name="size" id="size" class="gui-input" placeholder="Taille (en cm)">
                      </label>
                    </div>
                  </div>
                </div>

                <!-- end .form-footer section -->
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">Sauvegarder la fiche</button>
            </div>
        </form>
      </div>
      </div>
      <aside class="tray tray-right tray220 p20" style="height: 766px;">

        <div class="tray-scroller scroller scroller-active" style="height: 726px;"><div class="scroller-bar" style="height: 726px;"><div class="scroller-track" style="height: 726px; margin-bottom: 0px; margin-top: 0px;"><div class="scroller-handle" style="height: 470.184px; top: 0px;"></div></div></div><div class="scroller-content">

          <h4> Aide </h4>
          <hr class="alt short">
          <p class="text-muted">Veuillez vérifier que la personnalité n'existe pas déja dans la base de donnée.</p>
          <p class="text-muted">Le prénom et le nom doivent avoir une majuscule à la première lettre.</p>
          <p class="text-muted">La photo doit-etre ajoutée avant d'ajouter la personnalité.</p>
          <p class="text-muted">La taille doit être exprimée en CM (ex: 185).</p>

        </div></div>

      </aside>

  </section>
  <!-- End: Content -->
@endsection
