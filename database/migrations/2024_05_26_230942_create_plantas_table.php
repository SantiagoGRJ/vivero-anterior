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
        Schema::create('plantas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cientifico');
            $table->string('nombre_comun');
            $table->text('descripcion');
            $table->string('foto');
            $table->string('tipo');
            $table->boolean('necesidad_riego')->default(false);
            $table->boolean('necesidad_solar')->default(false);
            $table->boolean('necesidad_fertilizacion')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantas');
    }
};
