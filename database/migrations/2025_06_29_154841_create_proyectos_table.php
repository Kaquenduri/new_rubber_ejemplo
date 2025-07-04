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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); // Título del proyecto
            $table->text('descripcion'); // Descripción general del trabajo
            $table->string('imagen_1'); // Ruta de imagen 1
            $table->string('imagen_2')->nullable(); // Ruta de imagen 2
            $table->string('imagen_3')->nullable(); // Ruta de imagen 3
            $table->string('empresa_contratante'); // Nombre de la empresa cliente
            $table->text('servicios_empleados'); // Lista de servicios aplicados
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
