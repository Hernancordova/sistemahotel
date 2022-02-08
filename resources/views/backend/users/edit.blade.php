@extends('backend.layouts.app')

@section('sub-title')
    Usuarios
@endsection

@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title text-primary">
            <i class="fas fa-user-edit"></i> Editar datos del usuario
          </div>
          <hr>

          @if (count($errors->all()))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <ul class="mb-0">
                @foreach ($errors->all() as $message)
                  <li>{{$message}}</li>
                @endforeach
              </ul>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif


          <form action="{{ route('usuario.update', ['usuario' => $user->id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate>
            @method('PUT')
                 @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nombres</label>
              <input id="name" name="name" id="name" type="text" class="form-control" value="{{$user->name}}" autofocus tabindex="1" required placeholder="Complete su nombre...">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Correo electrónico</label>
              <input id="email" name="email" type="email" class="form-control" value="{{$user->email}}" tabindex="2" required placeholder="Complete su correo electrónico...">
            </div>
            <div class="mb-3">
              <label for="nick_name" class="form-label">Apodo</label>
              <input id="nick_name" name="nick_name" type="text" class="form-control" value="{{$user->nick_name}}" tabindex="2" placeholder="Complete su apodo...">
            </div>
            <a href="{{ route('usuario.index') }}" class="btn btn-danger" tabindex="4">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="3">Actualizar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
