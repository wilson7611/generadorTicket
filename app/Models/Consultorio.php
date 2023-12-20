<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'hospital_id'];
     // Relación: Un consultorio pertenece a un hospital
     public function hospital()
     {
         return $this->belongsTo(Hospital::class, 'hospital_id');
     }
 
     // Relación: Un consultorio tiene muchas horas de atención
     public function horasAtencion()
     {
         return $this->hasMany(HoraAtencion::class, 'consultorio_id');
     }
}
