<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitalSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vital_signs', function (Blueprint $table) {
            
            $table->integer('id_signos_vitales');
            $table->string('id_patient', 10);
            $table->tinyInteger('oximetria')->unsigned();
            $table->smallInteger('frecuencia_respiratoria')->unsigned();
            $table->tinyInteger('frecuencia_cardiaca')->unsigned();
            $table->float('temperatura');
            $table->float('presion_arterial');
            $table->smallInteger('glicernias')->unsigned();
            $table->dateTime('fecha_ingreso_datos');
            $table->enum('estado', ['Crítico', 'Estable', 'Grave']);
            
            $table->primary('id_signos_vitales');
            $table->foreign('id_patient')->references('id_patient')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vital_signs');
    }
}
