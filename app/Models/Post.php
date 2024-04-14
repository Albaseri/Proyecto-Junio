<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // fecha de publicacion no lo pongo porque se crea automáticamente con created_at
    protected $fillable = ['titulo', 'contenido', 'imagen','category_id'];


    //? Relación 1:N con Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    //? Relación 1:N con Users
    //Un post pertenece a un único usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //? Accessors y muttators para poner en mayus

    public function nombre()
    {
        return Attribute::make(
            set: fn ($v) => ucfirst($v)
        );
    }
    public function contenido()
    {
        return Attribute::make(
            set: fn ($v) => ucfirst($v)
        );
    }
}
