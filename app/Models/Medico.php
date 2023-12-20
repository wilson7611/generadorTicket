<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_completo', 'ci', 'especialidad_id', 'hospital_id'];

    // Relación: Un médico pertenece a una especialidad
    public function especialidad()
    {
        return $this->belongsTo(Especialidades::class, 'especialidad_id');
    }
    public function consultorio()
    {
        return $this->belongsTo(Consultorio::class, 'consultorio_id');
    }

    // Relación: Un médico pertenece a un hospital
    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }

    // Relación: Un médico tiene muchas atenciones
    public function atenciones()
    {
        return $this->hasMany(Atencion::class, 'medico_id');
    }
    public function horasAtencion()
    {
        return $this->hasMany(HoraAtencion::class);
    }
}
