@extends('layout')

@section('title')
  @parent - Liste des celebrités
@endsection

@section('content')
  <!-- Begin: Content -->
  <section id="content" class="animated fadeIn">


    <!-- Demo Text Content -->
    <div class="pl15 pr50">
      <div class="panel" id="spy5">
        <div class="panel-heading">
          <span class="panel-title">
            <span class="fa fa-table"></span>Liste des personnalités</span>
        </div>
        <div class="panel-body pn">
          <div class="bs-component">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="text-center">Photo</th>
                  <th>#</th>
                  <th class="text-center">Sexe</th>
                  <th>Prénom</th>
                  <th>Nom de famille</th>
                  <th>Taille</th>
                  <th>Date d'ajout</th>
                  <th>

                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($celebrities as $celebrity)
                <tr>
                  <td class="text-center">
                    <img class="mw50" src="{{ $celebrity->picture->url }}" alt="{{ $celebrity->firstname }} {{ $celebrity->lastname }}">
                  </td>
                  <td>{{ $celebrity->id }}</td>
                  <td class="text-center">
                    @if($celebrity->gender == 1)
                      <i class="fa sexe-m fa-mars" aria-hidden="true"></i>
                    @else
                      <i class="fa sexe-f fa-venus" aria-hidden="true"></i>
                    @endif
                  </td>
                  <td>{{ $celebrity->firstname }}</td>
                  <td>{{ $celebrity->lastname }}</td>
                  <td>{{ $celebrity->size }} cm</td>
                  <td>{{ \Carbon\Carbon::parse($celebrity->dateAdded)->format('d/m/Y h:i') }}</td>
                  <td class="text-right">
                    <a href="{{ route('celebrity.update', ['id' => $celebrity->id]) }}" class="btn btn-info btn-md">
                      Éditer
                    </a>
                    <a href="{{ route('celebrity.remove', ['id' => $celebrity->id]) }}" class="btn btn-danger btn-md">
                      <i style="font-size:1.5rem;" class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>



  </section>
  <!-- End: Content -->
@endsection
