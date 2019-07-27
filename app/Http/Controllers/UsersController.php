<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
     //Muestra los datos de un usuario
    public function show($id)
    {
        return view();
    }
    
    //Muestra todos los usuarios existentes
    public function index(Request $request)
    {
        $users = User::search($request->name)->orderBy('user_type', 'ASC')->paginate(10);
        return view('users.index')->with('users',$users);
    }
    
    //Muestra el formulario para crear usuarios
    public function create()
    {
        return view('users.create');
    }
    
    //Almacena un usuario
    public function store(StoreUserRequest $request)
    {
        $user = new User($request->all());
        $user->name = ucwords(strtolower($user->name));
        $user->email = strtolower($user->email);
        $user->password= bcrypt($request->password);
        $user->save();
        flash('Se ha almacenado el usuario para '.$user->name)->success();
        return redirect()->route('users.index');
    }
    
    //Muestra el formulario para editar un usuario
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
    }
    
    //Actualiza un usuario en la DB
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->name = ucwords(strtolower($user->name));
        $user->email = strtolower($user->email);
        $user->save();
        flash('Se ha actualizado el usuario de '.$user->name)->warning();
        return redirect()->route('users.index');
    }
    
    //Elimina un usuario del todo 
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        flash('Se ha eliminado el usuario de '.$user->name)->error();
        return redirect()->route('users.index');
    }
}