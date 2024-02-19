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
        Schema::create('asuntos', function (Blueprint $table) {
            $table->id();
            $table->string('nro_expediente');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_finalizacion');
            $table->foreignId('estado_id')->constrained('estados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asuntos');
    }
};
