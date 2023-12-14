<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('atencions', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->enum('estado', ['activo', 'inactivo', 'pendiente']);
            $table->unsignedBigInteger('medico_id');
            $table->unsignedBigInteger('horaAtencion_id');
            $table->unsignedBigInteger('afiliado_id');
            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->foreign('horaAtencion_id')->references('id')->on('hora_atencions');
            $table->foreign('afiliado_id')->references('id')->on('afiliados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atencions');
    }
};
