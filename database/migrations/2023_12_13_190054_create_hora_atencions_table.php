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
        Schema::create('hora_atencions', function (Blueprint $table) {
            $table->id();
            $table->time('hora');
            $table->unsignedBigInteger('consultorio_id');
            $table->foreign('consultorio_id')->references('id')->on('consultorios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hora_atencions');
    }
};