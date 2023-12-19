<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoraAtencion extends Model
{
    use HasFactory;
    protected $fillable = ['hora', 'consultorio_id', 'especialdiad_id'];

    public function consultorio()
    {
        return $this->belongsTo(Consultorio::class, 'consultorio_id');
    }
    // En el modelo HoraAtencion.php
    public function atenciones()
    {
        return $this->hasMany(Atencion::class);
    }
    public function especialidades()
    {
        return $this->belongsTo(Especialidades::class);
    }
}
