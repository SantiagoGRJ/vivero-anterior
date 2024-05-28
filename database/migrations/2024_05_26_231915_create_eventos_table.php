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
            $table->foreignId('id_user')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_riego')->constrained('riegos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_exposicion')->constrained('exposicions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_fertilizacion')->constrained('fertilizacions')->onUpdate('cascade')->onDelete('cascade');
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
