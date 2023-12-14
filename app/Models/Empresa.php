<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    // Relación: Una empresa tiene muchos hospitales
    public function hospitales()
    {
        return $this->hasMany(Hospital::class, 'empresa_id');
    }
}
