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
            'ruta' => ['nullable', 'file', 'mimes:pdf', 'max:5000']
        ]);

        // Almaceno el archivo PDF
        if ($request->hasFile('ruta')) {
            $path = $request->file('ruta')->store('pdfs', 'public'); // Almaceno en 'public'
        }

        Pdf::create([
            'nombre_archivo' => $request->nombre_archivo,
            'ruta' => $path,
            'user_id' => auth()->id(), // Asigno al usuario autenticado
        ]);

        //flash()->success('Pdf creado correctamente');
        return redirect()->route('pdfsLiv.index')->with('mensaje', 'Pdf creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pdf $pdf)
    {
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
            'ruta' => ['nullable', 'file', 'mimes:pdf', 'max:5000']
        ]);

        // Almaceno el nuevo archivo PDF si se ha subido
        if ($request->hasFile('ruta')) {
            if ($pdf->ruta) {
                Storage::disk('public')->delete($pdf->ruta); // Elimino el archivo anterior
            }
            $path = $request->file('ruta')->store('pdfs', 'public'); // Almaceno el nuevo archivo
        } else {
            $path = $pdf->ruta; // Si no se ha subido un archivo nuevo, mantengo el anterior
        }

        $pdf->update([
            'nombre_archivo' => $request->nombre_archivo,
            'ruta' => $path,
            'user_id' => auth()->id(),
        ]);

       // flash()->success('Pdf actualizado correctamente');

        return redirect()->route('pdfsLiv.index')->with('mensaje', 'Pdf actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pdf $pdf)
    {
        if ($pdf->ruta) {
            Storage::disk('public')->delete($pdf->ruta); // Elimino el archivo
        }
        $pdf->delete();
        //flash()->success('Pdf eliminado correctamente');
        return redirect()->route('pdfsLiv.index')->with('mensaje', 'Pdf eliminado con éxito');
    }
}
