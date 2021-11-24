<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->string('id_patient',10);
            $table->string('id_familiar',10)->nullable();
            $table->string('code_doctor',10)->nullable();
            $table->string('id_nurse',10)->nullable();
            $table->string('latitud',20);
            $table->string('longitud',20);
            
            $table->primary('id_patient');
            $table->foreign('id_patient')->references('id_user')->on('users');
            $table->foreign('id_familiar')->references('id_familiar')->on('relatives');
            $table->foreign('code_doctor')->references('code_doctor')->on('doctors');
            $table->foreign('id_nurse')->references('id_nurse')->on('nurses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
