<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidades extends Model
{
    use HasFactory;
    // Relación: Una especialidad tiene muchos médicos
    public function medicos()
    {
        return $this->hasMany(Medico::class, 'especialidad_id');
    }
     // Relación con Consultorio
     public function consultorio()
     {
         return $this->belongsTo(Consultorio::class);
     }
 
     // Relación con Hospital (a través de Consultorio)
     public function hospital()
     {
         return $this->belongsTo(Hospital::class, 'consultorio_id');
     }
}
