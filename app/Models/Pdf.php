<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_archivo', 'ruta', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function download($id)
{
    $pdf = Pdf::findOrFail($id);
    $path = storage_path('app/public/' . $pdf->ruta);
    return response()->download($path);
}
}
