<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoraAtencion extends Model
{
    use HasFactory;
    protected $fillable = ['hora', 'consultorio_id', 'especialidad_id'];

    public function consultorio()
    {
        return $this->belongsTo(Consultorio::class, 'consultorio_id');
    }
   
    public function especialidad()
    {
        return $this->belongsTo(Especialidades::class, 'especialidad_id');
    }
}
