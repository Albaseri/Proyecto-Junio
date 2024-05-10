<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pdfs.createPdf');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_archivo' => ['required', 'string', 'min:5', 'unique:pdfs,nombre_archivo'],
            'ruta' => ['required', 'string']
        ]);


        //S se ha subido un archivo pdf, se guarda en la carpeta
        // Al ser requerido, si no sube nada da error de validacion
        $pdf = ($request->ruta) ? $request->ruta->store('pdfs') : ' ';

        Pdf::create([
            'nombre_archivo' => $request->nombre_archivo,
            'ruta' => $pdf,
            'user_id' => auth()->user()->id,

        ]);
        return redirect()->route('pdfsLiv.index')->with('mensaje', 'Pdf creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pdf $pdf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pdf $pdf)
    {
        return view('pdfs.editPdf', compact('pdf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pdf $pdf)
    {
        $request->validate([
            'nombre_archivo' => ['required', 'string', 'min:5', 'unique:pdfs,nombre_archivo'],
            'ruta' => ['required', 'string']
        ]);


        //S se ha subido un archivo pdf, se guarda en la carpeta
        // Al ser requerido, si no sube nada da error de validacion
        $pdf = ($request->ruta);

        if ($request->ruta) {
            if (basename($pdf) != "") {
                Storage::delete($pdf);
            }
            $pdf = $request->ruta->store('pdfs');
        }
        $pdf->update([
            'nombre_archivo' => $request->nombre_archivo,
            'ruta' => $pdf,
            'user_id' => auth()->user()->id,

        ]);
        return redirect()->route('pdfsLiv.index')->with('mensaje', 'Pdf creado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pdf $pdf)
    {
        //
    }
}
