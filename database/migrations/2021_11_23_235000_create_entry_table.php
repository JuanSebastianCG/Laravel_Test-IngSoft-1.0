<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry', function (Blueprint $table) {
            $table->string('cod_ingreso',30);
            $table->integer('id_historial');
            $table->string('diagnostico');
            $table->string('tratamiento');
            $table->string('recomend_personal')->nullable();
            $table->dateTime('fecha_ingreso');
            $table->dateTime('fecha_salida')->nullable();
            
            $table->primary('cod_ingreso');
            $table->foreign('id_historial')->references('id_historial')->on('medical_history');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entry');
    }
}
