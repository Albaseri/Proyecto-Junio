<?php

namespace App\Http\Controllers;

use App\Models\TrainingCard;
use Illuminate\Http\Request;

class TrainingCardController extends Controller
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
        return view('trainingCards.createTrainingCards');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //?1. Validamos el formulario utilizando validaciones de laravel

        $request->validate([
            'titulo' => ['required', 'string', 'min:3', 'unique:categories,nombre'],
            'descripcion' => ['required', 'string', 'min:5'],
            'imagen' => ['nullable', 'image', 'max:2048'],
            'n_repeticiones' => ['required', 'integer', 'min:5', 'max:15'],
            'n_series' => ['required', 'integer', 'min:1', 'max:10'],
            'url_youtube' => ['required', 'string'],
            'estado'=> ['required', 'in:VISIBLE,NO VISIBLE']
        ]);

        //? 2. Si no hay errores, pasamos de esta línea, le guardamos los datos

        $ruta = ($request->imagen) ? $request->imagen->store('cards') : "defecto.jpg";
        TrainingCard::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $ruta,
            'n_repeticiones' => $request->n_repeticiones,
            'n_series' => $request->n_series,
            'url_youtube' => $request->url_youtube,
            'estado' => $request->estado,
            'user_id' => auth()->user()->id,

        ]);

        //? 3. Volvemos a la página posts y nos creamos una sesión de tipo flas para mostrar mensaje
        return redirect()->route('trainingCardsLiv.index')->with('mensaje', 'Card de entrenamiento creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(TrainingCard $trainingCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrainingCard $trainingCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TrainingCard $trainingCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrainingCard $trainingCard)
    {
        //
    }
}
