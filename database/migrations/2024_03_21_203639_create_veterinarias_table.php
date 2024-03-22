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
        Schema::create('veterinarias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_mascota');
            $table->string('tipo');
            $table->string('raza');
            $table->string('edad');
            $table->string('color');
            $table->string('foto_mascota');
            $table->string('nombre_dueño');
            $table->string('foto_dueño');
            $table->timestamps();


//             Los datos para el registro de mascotas seran:
// 1. Nombre mascota
// 2. Tipo mascota (Perro, Gato, Ave, otro) 
// 3. Raza
// 4. Edad
// 5. Color
// 6. Foto o imagen de la mascota (subir imagen)
// 7. Nombre de dueño o propietario
// 8. Foto o imagen del propietario
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinarias');
    }
};
