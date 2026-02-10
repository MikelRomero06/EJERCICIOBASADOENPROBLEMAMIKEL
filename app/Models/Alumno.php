<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function career() {
        return $this->belongsTo(Carrera::class);
    }

    public function details() {
        return $this->hasOne(detalles_alumno::class);
    }

    public function courses() {
        return $this->belongsToMany(Curso::class);
    }

    public function place() {
        return $this->belongsTo(Lugar::class);
    }
    /** @use HasFactory<\Database\Factories\AlumnoFactory> */
    use HasFactory;
}
