<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catedratico extends Model
{
    public function curso() {
        return $this->belongsToMany(Curso::class);
    }
    /** @use HasFactory<\Database\Factories\CatedraticoFactory> */
    use HasFactory;
}
