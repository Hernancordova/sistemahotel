@extends('errors.app')

@section('content')
  <div class="description">
    <h1>Error 404</h1>
    <h2>Página no encontrada</h2>
    <a href="{{ url('/') }}" class="button">Ir Dashboard</a>
  </div>
@endsection
