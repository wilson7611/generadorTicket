<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $fillable= ['nombre', 'direccion', 'empresa_id'];

    // Relación: Un hospital pertenece a una empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    // Relación: Un hospital tiene muchos médicos
    public function medicos()
    {
        return $this->hasMany(Medico::class, 'hospital_id');
    }
    public function consultorio()
    {
        return $this->hasMany(Consultorio::class, 'consultorio_id');
    }
}
