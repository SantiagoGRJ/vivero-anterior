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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('id_plantas')->references('id')->on('plantas');
            $table->foreignId('id_user')->references('id')->on('users');
            $table->foreignId('id_riego')->references('id')->on('riegos');
            $table->foreignId('id_exposicion')->references('id')->on('exposicions');
            $table->foreignId('id_fertilizacion')->references('id')->on('fertilizacions');
            //$table->enum('nombre',['riego','exposicion','fertilizacion']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
