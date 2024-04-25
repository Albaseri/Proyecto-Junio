<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'file_name', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
