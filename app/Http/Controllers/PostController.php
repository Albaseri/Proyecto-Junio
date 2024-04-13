<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
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
        $categorias = Category::select('id' , 'nombre') -> get();        // Traigo todas las categorías
        return view('posts.createPost',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //?1. Validamos el formulario utilizando validaciones de laravel
        $request->validate([
            'titulo' => ['required', 'string', 'min:3', 'unique:categories,nombre'],
            'contenido' => ['required', 'string', 'min:5'],
            'imagen' => ['nullable', 'image', 'max:2048'],
            'category_id' => ['required', 'exists:categories,id']
        ]);

        //? 2. Si no hay errores, pasamos de esta línea, le guardamos los datos

        $ruta = ($request->imagen) ? $request->imagen->store('posts') : "posts/defecto.jpg";
        Post::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'imagen' => $ruta,
            'category_id' => $request -> category_id

        ]);

        //? 3. Volvemos a la página posts y nos creamos una sesión de tipo flas para mostrar mensaje

        return redirect()->route('postsLiv.index')->with('mensaje', 'Post creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
