<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atencion extends Model
{
    use HasFactory;
    protected $fillable = ['fecha', 'estado', 'medico_id', 'horaAtencion_id', 'afiliado_id'];

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }
    public function horaAtencion()
    {
        return $this->belongsTo(HoraAtencion::class, 'horaAtencion_id');
    }
    public function afiliado()
    {
        return $this->belongsTo(Afiliado::class, 'afiliado_id');
    }
}
