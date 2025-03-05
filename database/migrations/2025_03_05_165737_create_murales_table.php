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
        Schema::create('murales', function (Blueprint $table) {
            $table->id();
            $table->string('wkt');
            $table->string('nombre');
            $table->string('caract_sit');
            $table->string('autores');
            $table->string('tecnica');
            $table->string('fecha');
            $table->string('tamano');
            $table->string('ubicacion');
            $table->string('direccion');
            $table->string('dom_orig');
            $table->string('calle');
            $table->string('altura');
            $table->string('barrio');
            $table->string('comuna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murales');
    }
};
