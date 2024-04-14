<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];

    //? Relación 1:N con Post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //? Accesors and muttators

    public function nombre()
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
