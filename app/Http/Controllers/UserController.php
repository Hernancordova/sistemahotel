<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
  public function index(Request $request)
  {
    $users = User::where(function ($query) use ($request) {
      if ($request->searchBy && $request->search) {
        $query->where($request->searchBy, 'like', "%$request->search%");
      }
    })->paginate(7);
    return view('backend.users.index', compact('users'));
  }

  public function profile (){
    return view('backend.users.profile');
  }

  public function create()
  {
    return view('backend.users.create');
  }

  public function store(StoreUserRequest $request)
  {
    $users = new User();
    $users->name = $request->name;
    $users->email = $request->email;
    $users->nick_name = $request->nick_name;
    $users->password = Hash::make("fulltecnologia");
    $users->save();

    return redirect()->route('usuario.index')->with('created', 'Registro guardado exitósamente su contraseña es fulltecnologia');
  }

  public function edit($id)
  {
    $user = User::whereId($id)->first();
    return view('backend.users.edit', compact('user'));
  }

  public function update(StoreUserRequest $request, $id)
  {
    $users = User::find($id);
    $users->name = $request->name;
    $users->email = $request->email;
    $users->nick_name = $request->nick_name;

    $users->save();

    return redirect()->route('usuario.index')->with('updated', 'Registro actualizado exitósamente.');
  }

  public function show($id)
  {
    //
  }


  public function destroy($id)
  {
    $user = User::find($id);
    $user->delete();

    return redirect()->route('usuario.index')->with('deleted', 'Registro eliminado exitósamente.');
  }

  public function updateIsActive(Request $request, $id)
  {
    $newState = $request->state ? 0 : 1;
    User::whereId($id)->update([
      'is_active' => $newState
    ]);
    return redirect()->route('usuario.index');
  }

  public function buscador(Request $request)
  {
    return view("backend.users.index", compact("users"));
  }
}
