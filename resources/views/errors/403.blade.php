@extends('errors.app')

@section('content')
  <div class="description">
    <h1>Error 403</h1>
    <h2>No tienes permisos</h2>
    <a href="{{ url('/') }}" class="button">Ir Dashboard</a>
  </div>
@endsection
