<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function students() {
        return $this->belongsToMany(Alumno::class);
    }
    /** @use HasFactory<\Database\Factories\CursoFactory> */
    use HasFactory;
}
