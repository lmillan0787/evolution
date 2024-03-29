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

        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('cripto_opera',30);
            $table->timestamps();
        });

        Schema::create('bloques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contrato_id')->constrained('contratos');
            $table->string('nro',4);
            $table->timestamps();
        });

        Schema::create('lineas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contrato_id')->constrained('contratos');
            $table->string('nro',4);
            $table->timestamps();
        });

        
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre', 20);
            $table->string('primer_apellido', 20);
            $table->string('pais', 30);
            $table->timestamps();
        });
 Schema::create('participantes', function (Blueprint $table) {
            $table->id();
           
            $table->integer('persona_id')->constrained('persona');
            $table->foreignId('contrato_id')->constrained('contratos');
            $table->string('id_registro',10);
            $table->string('upline_id', 10);
            $table->date('fecha_registro');
            $table->foreignId('bloque_id')->constrained('bloques');
            $table->foreignId('linea_id')->constrained('lineas');
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
        Schema::dropIfExists('participantes_forsage');
        Schema::dropIfExists('participantes_incomatrix');
        Schema::dropIfExists('participantes_trust_investing');
        Schema::dropIfExists('personas');
        Schema::dropIfExists('bloques');
        Schema::dropIfExists('contratos');
    }
}
