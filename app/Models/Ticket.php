<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'fecha_hora', 'estado', 'observacion', 'atencion_id'];

    public function atencion()
    {
        return $this->belongsTo(Atencion::class, 'atencion_id');
    }
}
