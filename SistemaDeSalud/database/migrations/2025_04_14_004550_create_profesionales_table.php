<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_profesionales_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesionalesTable extends Migration
{
    public function up()
    {
        Schema::create('profesionales', function (Blueprint $table) {
            $table->id(); // id (PK)
            $table->string('nombre'); // nombre
            $table->string('apellido'); // apellido
            $table->string('especialidad'); // especialidad
            $table->string('horarios'); // horarios
            $table->string('telefono'); // teléfono
            $table->string('email')->unique(); // email
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profesionales');
    }
}
