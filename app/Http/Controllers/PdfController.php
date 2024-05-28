<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function download($id)
    {
        $pdf = Pdf::findOrFail($id);
        return $pdf->download();
    }

    public function showWelcomePage()
    {
        // Obtener el PDF disponible para descargar
        $pdf = Pdf::find(1); // Esto es solo un ejemplo, deberías implementar la lógica adecuada aquí
        return view('welcome', ['pdf' => $pdf]); // Pasar la variable $pdf a la vista
    }
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
            'ruta' => ['required', 'file', 'mimes:pdf', 'max:2048']
        ]);

        // Almacenar el archivo PDF
        if ($request->hasFile('ruta')) {
            $path = $request->file('ruta')->store('pdfs', 'public'); // Almacena en el disco 'public'
        }

        Pdf::create([
            'nombre_archivo' => $request->nombre_archivo,
            'ruta' => $path,
            'user_id' => auth()->id(), // Asignar al usuario autenticado
        ]);

        return redirect()->route('pdfsLiv.index')->with('mensaje', 'Pdf creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pdf $pdf)
    {
        // Implementación de visualización de PDF
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
            'nombre_archivo' => ['required', 'string', 'min:5', 'unique:pdfs,nombre_archivo,' . $pdf->id],
            'ruta' => ['nullable', 'file', 'mimes:pdf', 'max:2048']
        ]);

        // Almacenar el nuevo archivo PDF si se ha subido
        if ($request->hasFile('ruta')) {
            if ($pdf->ruta) {
                Storage::disk('public')->delete($pdf->ruta); // Eliminar el archivo anterior
            }
            $path = $request->file('ruta')->store('pdfs', 'public'); // Almacenar el nuevo archivo
        } else {
            $path = $pdf->ruta; // Mantener el archivo anterior si no se ha subido uno nuevo
        }

        $pdf->update([
            'nombre_archivo' => $request->nombre_archivo,
            'ruta' => $path,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('pdfsLiv.index')->with('mensaje', 'Pdf actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pdf $pdf)
    {
        // Implementación de eliminación de PDF
    }
}
