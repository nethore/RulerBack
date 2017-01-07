@extends('layout')

@section('title')
  @parent - Liste des photos
@endsection

@section('content')
  <!-- Begin: Content -->
  <section id="content" class="animated fadeIn">


    <!-- Demo Text Content -->
    <div class="pl15 pr50">
      <div class="panel" id="spy5">
        <div class="panel-heading">
          <span class="panel-title">
            <span class="fa fa-picture-o"></span>Liste des photos</span>
        </div>
        <div class="panel-body pn">
          <div class="bs-component">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th class="text-center">Photo</th>
                  <th>Alias</th>
                  <th>Url</th>
                  <th width="200"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($pictures as $picture)
                <tr>
                  <td>{{ $picture->id }}</td>
                  <td class="text-center">
                    <img class="mw50" src="{{ $picture->url }}" alt="{{ $picture->alias }}">
                  </td>
                  <td>{{ $picture->alias }}</td>
                  <td><a href="{{ $picture->url }}" target="_blank">{{ $picture->url }}</a></td>
                  <td class="text-right">
                    <a href="{{ route('picture.update', ['id' => $picture->id]) }}" class="btn btn-info btn-md">
                      Éditer
                    </a>
                    <a href="{{ route('picture.remove', ['id' => $picture->id]) }}" class="btn btn-danger btn-md">
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
