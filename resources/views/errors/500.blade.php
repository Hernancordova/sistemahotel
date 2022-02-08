@extends('errors.app')

@section('content')
  <div class="description">
    <h1>Error 500</h1>
    <h2>Error interno en el servidor</h2>
    <a href="{{ url('/') }}" class="button">Ir Dashboard</a>
  </div>
@endsection
