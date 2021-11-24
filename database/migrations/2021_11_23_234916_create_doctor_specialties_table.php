<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorSpecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_specialties', function (Blueprint $table) {
            $table->integer('id_especialidad');
            $table->string('code_doctor',10);
            
            $table->primary(['id_especialidad', 'code_doctor']);
            $table->foreign('code_doctor')->references('code_doctor')->on('doctors');
            $table->foreign('id_especialidad')->references('id_especialidad')->on('specialties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_specialties');
    }
}
