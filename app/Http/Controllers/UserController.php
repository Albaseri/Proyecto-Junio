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
            'roles' => ['required', 'in:ADMIN,USER'],
        ]);
    
        User::create($request->all());
        return redirect()->route('usersLiv.index')->with('mensaje', 'Usuario creado correctamente');
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
        return view('usuarios.updateUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            $request->validate([
                'name' => ['required', 'string', 'min:3'],
                'email' => ['required', 'email', 'unique:users,email,' . $user->id],
                'roles' => ['required', 'string'],
            ])
        ]);

        $user->update($request->all());
        return redirect()->route('usersLiv.index')->with('mensaje', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('usersLiv.index')->with("mensaje", "Usuario eliminado correctamente");
    }
}
