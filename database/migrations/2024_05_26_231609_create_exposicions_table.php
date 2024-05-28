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
        Schema::create('exposicions', function (Blueprint $table) {
            $table->id();
            //sa
            $table->foreignId('id_planta')
                  ->constrained('plantas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->unsignedSmallInteger('horas_directa')->default(0);
            $table->unsignedSmallInteger('horas_indirecta')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exposicions');
    }
};
