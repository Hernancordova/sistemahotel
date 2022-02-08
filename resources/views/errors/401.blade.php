@extends('errors.app')

@section('content')
  <div class="description">
    <h1>Error 401</h1>
    <h2>Sesión expirada</h2>
    <a href="{{ url('/') }}" class="button">Iniciar sesión</a>
  </div>
@endsection
