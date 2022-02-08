@extends('backend.layouts.app')

@section('title')
  Usuarios
@endsection

@section('styles')
  <style>
    ::-webkit-scrollbar {
      height: 5px;
      width: 5px;
      display: block;
    }

    ::-webkit-scrollbar-track {
      background-color: #73b9ff;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #1B82EC;
      border-radius: 5px;
    }
  </style>
@endsection

@section('sub-title')
  Usuarios
@endsection

@section('content')
  <div class="page-content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="page-title ">
              <div class="card-title text-primary float-start">
                <i class="fas fa-users"></i> Usuarios
              </div>
              <div>
                <a href="{{ route('usuario.create') }}" class="btn btn-primary float-end">Nuevo <i class="fas fa-plus"></i></a>
              </div>

              @if (session('created'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('created') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              @if (session('updated'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('updated') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              @if (session('deleted'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('deleted') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              <br><br>
              <nav class="navbar">
                <div class="container-fluid">
                  <a class="navbar-brand"></a>
                  <form class="row g-3" action="{{ route('usuario.index') }}" method="GET" autocomplete="off">
                    <div class="col-auto">
                      <label class="form-control-plaintext">Buscar por</label>
                    </div>

                    <div class="col-auto">
                      <div class="form-group">
                        <select name="searchBy" id=""  class="form-select form-select" aria-label=".form-select-sm example">
                          <option value="name">Nombre</option>
                          <option value="email">Correo</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-auto">
                    <div class="input-group mb-3">
                      <input  class="form-control" type="search" {{ request('search') ? 'autofocus' : '' }} placeholder="Buscar" name="search" aria-label="Search" value="{{ request('search') }}" >
                      <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                    </div></div>

                    {{-- <div class="col-auto">
                      <input class="form-control" type="search" {{ request('search') ? 'autofocus' : '' }}  placeholder="Buscar" name="search" aria-label="Search" value="{{ request('search') }}">
                    </div>
                    <div class="col-auto">
                      <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                    </div> --}}
                  </form>
                </div>
              </nav>
              <div  class="table-responsive">
                <table class="table table-sm table-striped mt-4">
                  <thead>
                      <tr>
                        <th style="width: 80px;" scope="col">Opciones</th>
                        <th style="width: 80px;" scope="col">Estado</th>
                        {{-- <th scope="col">ID</th> --}}
                        <th scope="col">Apodo</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Correo electrónico</th>
                        <th class="column-date">Creado</th>
                        <th class="column-date">Actualizado</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td style=" text-align: left;vertical-align: middle;">
                          <a href="{{ route('usuario.edit', ['usuario' => $user->id] ) }}" class="btn btn-sm btn-info" title="Editar"><i class="far fa-edit"></i></a>

                          <form method="POST" action="{{route('usuario.updateIsActive', ['usuario' => $user->id] )}}" class="d-inline">
                              @csrf
                              <input type="hidden" name="state" value="{{$user->is_active}}">
                              @if ($user->is_active)
                                <button type="submit"
                                  class="btn btn-sm btn-success"
                                  title="Cambiar estado">
                                  <i class="far fa-check-circle"></i>
                                </button>
                              @else
                                <button type="submit"
                                  class="btn btn-sm btn-danger"
                                  title="Cambiar estado">
                                  <i class="far fa-times-circle"></i>
                                </button>
                              @endif
                          </form>
                        </td>
                          <td style="vertical-align: middle;">
                            @if ($user->is_active)
                            <span style="width: 60px;" class="badge rounded-pill bg-success">{{$user->is_active ? 'Activo' : 'Inactivo'}}
                          @else
                          <span style="width: 60px;" class="badge rounded-pill bg-danger">{{$user->is_active ? 'Activo' : 'Inactivo'}}
                          @endif</span></td>

                          <td style="vertical-align: middle;">{{$user->nick_name}}</td>
                          <td style="vertical-align: middle;">{{$user->name}}</td>
                          <td style="vertical-align: middle;">{{$user->email}}</td>
                          <td class="column-date">{{ \Carbon\Carbon::parse($user->created_at)->format('d-m-Y H:i:s a')}}</td>
                          <td class="column-date">{{ \Carbon\Carbon::parse($user->updated_at)->format('d-m-Y H:i:s a')}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            {{ $users->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
