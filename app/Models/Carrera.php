<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public function students() {
        return $this->hasMany(Alumno::class);
    }

    /** @use HasFactory<\Database\Factories\CarreraFactory> */
    use HasFactory;
}
