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
        Schema::create('riegos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_plantas')->references('id')->on('plantas');
            $table->enum('metodo',['goteo','aspersion']);
            $table->enum('frecuencia',['diaria','semanal']);
            $table->string('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riegos');
    }
};
