@extends('errors.app')

@section('content')
  <div class="description">
    <h1>Error 503</h1>
    <h2>El servidor no estaba disponible</h2>
    <a href="{{ url('/') }}" class="button">Ir Dashboard</a>
  </div>
@endsection
