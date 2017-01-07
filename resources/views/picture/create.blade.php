@extends('layout')

@section('title')
  @parent - Ajouter une photo
@endsection

@section('css')
  @parent
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin-tools/admin-forms/css/admin-forms.css') }}">
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
        <h4> Ajouter une photo </h4>
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

          <form method="post" action="{{ route('picture.create') }}" id="form-ui" enctype="multipart/form-data">

          {{ csrf_field() }}

                <!-- Basic Inputs -->

                <div class="row">
                  <div class="col-md-8">
                    <div class="section">
                      <label class="field">
                        <input type="text" name="url" id="url" class="gui-input" placeholder="Url">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="pictureUpload">Fichier image</label>
                    <input type="file" name="pictureUpload" id="pictureUpload">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="section">
                      <label class="field">
                        <input type="text" name="alias" id="alias" class="gui-input" placeholder="Alias">
                      </label>
                    </div>
                  </div>
                </div>
                <!-- end .form-footer section -->
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">Sauvegarder la photo</button>
            </div>
        </form>
      </div>
      </div>
      <aside class="tray tray-right tray220 p20" style="height: 766px;">

        <div class="tray-scroller scroller scroller-active" style="height: 726px;"><div class="scroller-bar" style="height: 726px;"><div class="scroller-track" style="height: 726px; margin-bottom: 0px; margin-top: 0px;"><div class="scroller-handle" style="height: 470.184px; top: 0px;"></div></div></div><div class="scroller-content">

          <h4> Aide </h4>
          <hr class="alt short">
          <p class="text-muted">Veuillez vérifier que la photo n'est pas trop lourde et est bien détourée et au format png.</p>
          <p class="text-muted">L'alias ne doit pas contenir d'espace ni de majuscule (ex. barack-obama)</p>
          <p class="text-muted">La photo doit-etre ajoutée avant d'ajouter la personnalité.</p>

        </div></div>

      </aside>

  </section>
  <!-- End: Content -->
@endsection
