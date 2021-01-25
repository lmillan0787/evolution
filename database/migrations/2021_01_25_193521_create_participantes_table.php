<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloques', function (Blueprint $table) {
            $table->id();
            $table->string('nro',4);
            $table->timestamps();
        });

        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->timestamps();
        });
 Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string('cedula', 10)->unique();
            $table->string('primer_nombre', 20);
            $table->string('primer_apellido', 20);
            $table->string('id_contrato',10);
            $table->string('upline_id', 10);
            $table->date('fecha_registro');
            $table->foreignId('bloque_id')->constrained('bloques');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participantes');
        Schema::dropIfExists('bloques');
        Schema::dropIfExists('contratos');
    }
}
