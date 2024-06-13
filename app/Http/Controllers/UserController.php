<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.createUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'roles' => ['required', 'in:ADMIN,USER,PREMIUM'],
        ]);

        User::create($request->all());
        flash()->success('Usuario creado correctamente');
        return redirect()->route('usersLiv.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = ['ADMIN', 'USER', 'PREMIUM'];

        return view('usuarios.updateUser', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email,' . $user->id],
            'roles' => ['required', 'string', 'in:ADMIN,USER,PREMIUM'],

        ]);

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'roles'=>$request->roles,
            'contraseña'=>$user->contraseña //No se actualizará la contraseña, se mantiene la que hay
        ]);
        flash()->success('Usuario actualizado correctamente');
        return redirect()->route('usersLiv.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        flash()->success('Usuario eliminado correctamente');
        return redirect()->route('usersLiv.index');
    }
}
