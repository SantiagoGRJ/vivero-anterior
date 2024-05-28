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
        Schema::create('fertilizacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_planta')->constrained('plantas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nombre');
            $table->enum('tipo', ['organico','quimico']);
            $table->enum('frecuencia', ['mensual','bimestral']);
            $table->enum('metodo', ['diluido en agua','directamente en el suelo']);
            $table->string('cantidad');
            $table->date('fecha_ultima_aplicacion')->nullable();
            $table->date('proxima_aplicacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fertilizacions');
    }
};
