<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_citas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id(); // id (PK)
            $table->foreignId('paciente_id')->constrained('pacientes')->onDelete('cascade'); // paciente_id (FK)
            $table->foreignId('profesional_id')->constrained('profesionales')->onDelete('cascade'); // profesional_id (FK)
            $table->date('fecha_cita'); // fecha_cita
            $table->time('hora_cita'); // hora_cita
            $table->string('motivo_consulta'); // motivo_consulta
            $table->text('notas_profesional')->nullable(); // notas del profesional
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('citas');
    }
}