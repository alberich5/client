@extends('layouts.grafica')
@section('grafica')

  <p>Aqui el contenido de la garfica</p>

  <div class="contenedor1">
    @include('grafica.partials.opciones')
  </div>
  <div class="contenedor2">
      @include('grafica.partials.grafica')
  </div>

@endsection
