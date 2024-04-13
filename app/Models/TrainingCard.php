<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingCard extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion', 'imagen', 'n_repeticiones', 'n_series', 'url_youtube','estado','user_id'];

    //? Relación 1:N con Users
    //Una card pertenece a un único usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    //? Accessors y muttators para poner en mayus

    public function titulo()
    {
        return Attribute::make(
            set: fn ($v) => ucfirst($v)
        );
    }
    public function descripcion()
    {
        return Attribute::make(
            set: fn ($v) => ucfirst($v)
        );
    }
}
