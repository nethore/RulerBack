@extends('layout')

@section('title')
  @parent - Accueil
@endsection

@section('content')
  <!-- Begin: Content -->
  <section id="content" class="animated fadeIn">

    <div class="text-center">
      <h1 class="ruler"><i class="icon-ruler"></i> <span>Ruler</span> Admin</h1>
    </div>
    <!-- Demo Text Content -->
    <div class="pl15 pr50">
      <h4>Bienvenue dans l'administration de Ruler</h4>
      <hr class="alt short">
    </div>
    <div class="row p15">
      <div class="col-md-3">
        <div class="bs-component">
          <div class="panel panel-tile text-primary br-b bw5  br-primary-light">
            <div class="panel-body pn pl20 p5">
              <span class="fa fa-smile-o iconx-bg"></span>
              <h2 class="mt15 lh15">
                <b>{{ $nbrCelebrities }}</b>
              </h2>
              <h5 class="text-muted">Personnalités</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bs-component">
          <div class="panel panel-tile text-primary br-b bw5  br-primary-light">
            <div class="panel-body pn pl20 p5">
              <span class="fa fa-picture-o iconx-bg"></span>
              <h2 class="mt15 lh15">
                <b>{{ $nbrPictures }}</b>
              </h2>
              <h5 class="text-muted">Images</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bs-component">
          <div class="panel panel-tile  text-primary br-b bw5 br-primary-light">
            <div class="panel-body pn pl20 p5">
              <span class="fa fa-long-arrow-up iconx-bg"></span>
              <h2 class="mt15 lh15">
                <b>{{ round($avgSize) }}</b> cm
              </h2>
              <h5 class="text-muted">Taille moyenne</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bs-component">
          <div class="panel panel-tile text-primary br-b bw5  br-primary-light">
            <div class="panel-body pn pl20 p5">
              <span class="fa fa-mars iconx-bg"></span>
              <h2 class="mt15 lh15">
                <b>{{ round($pourcentageMen) }}</b> %
              </h2>
              <h5 class="text-muted">% d'hommes</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- End: Content -->
@endsection
