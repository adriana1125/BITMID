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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();

            // Información general
            $table->string('nombre');
            $table->string('correo')->nullable();
            $table->string('giro')->nullable();
            $table->string('empleados')->nullable();
            $table->string('estado')->nullable();
            $table->string('municipio')->nullable();

            // Información complementaria
            $table->string('telefono')->nullable();
            $table->string('sitio_web')->nullable();
            $table->text('descripcion')->nullable();

            // Fecha de registro y actualización
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
