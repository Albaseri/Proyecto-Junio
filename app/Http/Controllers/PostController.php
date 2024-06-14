<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $categorias = Category::select('id', 'nombre')->get();        // Traigo todas las categorías
        return view('posts.createPost', compact('categorias'));
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

        $ruta = ($request->imagen) ? $request->imagen->store('posts') : "defecto.jpg";
        Post::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'imagen' => $ruta,
            'category_id' => $request->category_id

        ]);

        //? 3. Mostramos mensaje y volvemos a la página posts 
        //flash()->success('Post creado correctamente');
        return redirect()->route('postsLiv.index')->with('mensaje', 'Post creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $postRelacionados = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->take(4)
            ->get();


        return view('posts.detallePost', compact('post', 'postRelacionados'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categorias = Category::select('id', 'nombre')->get();        // Traigo todas las categorías

        return view('posts.editPost', compact('post', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'titulo' => ['required', 'string', 'min:3', 'unique:posts,titulo,' . $post->id],
            'contenido' => ['required', 'string', 'min:10'],
            'imagen' => ['nullable', 'image', 'max:2048'],
            'category_id' => ['required', 'exists:categories,id']
        ]);

        $ruta = $post->imagen;
        //Si existe 
        if ($request->imagen) {
            if (basename($ruta) != "defecto.jpg") {
                Storage::delete($ruta); // Borro imagen antigua
            }
            $ruta = $request->imagen->store('posts'); // Reescribo con la nueva ruta 
        }

        $post->update([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'imagen' => $ruta,
            'category_id' => $request->category_id
        ]);

        //flash()->success('Post editado correctamente');
        return redirect()->route('postsLiv.index')->with('mensaje', 'Post actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // $post->delete();
        // flash()->success('Post eliminado correctamente');
        // return redirect()->route('postsLiv.index');
    }
}
