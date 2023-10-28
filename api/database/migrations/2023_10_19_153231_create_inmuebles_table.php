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


        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Tipo');
            $table->string('Zonificacion');
            $table->string('Condicion');
            $table->Date('Tiempo_Alquiler');
            $table->integer('Meses');
            $table->integer('Precio');
            $table->integer('Mts2');
            $table->integer('Habitaciones');
            $table->integer('Baños');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmuebles');
    }
};
