<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_pacientes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id(); // id (PK)
            $table->string('nombre'); // nombre
            $table->string('apellido'); // apellido
            $table->date('fecha_nacimiento'); // fecha de nacimiento
            $table->string('direccion'); // dirección
            $table->string('telefono'); // teléfono
            $table->string('email')->unique(); // email
            $table->text('historial_medico')->nullable(); // historial médico
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}