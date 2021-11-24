<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->integer('cod_visit');
            $table->string('code_doctor',10);
            $table->string('id_patient',30);
            $table->dateTime('fecha_visit');
            
            $table->primary('cod_visit');
            $table->foreign('code_doctor')->references('code_doctor')->on('doctors');
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
        Schema::dropIfExists('visits');
    }
}
