<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'min:3', 'unique:categories,nombre'],
            'descripcion' => ['required', 'string', 'min:5']
        ]);

        Category::create($request->all());

        flash()->success('Categoría creada con éxito');


        return redirect()->route('categoriesLiv.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categorias.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'min:3', 'unique:categories,nombre,' . $category->id],
            'descripcion' => ['required', 'string', 'min:10']
        ]);


        $category->update($request->all());

        //flash()->success('Categoría actualizada con éxito');

        return redirect()->route('categoriesLiv.index')->with('mensaje', 'Categoría actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        flash()->success('Categoría eliminada con éxito');


        return redirect()->route('categoriesLiv.index');
    }
}
