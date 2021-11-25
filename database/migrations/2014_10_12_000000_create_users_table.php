<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           
            $table->string('id_user',10);
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->enum('tipo_documento', ['C.C','T.I','Pasaporte','C.E']);
            $table->string('email',80)->unique()->nullable();
            $table->string('documento',10);
            $table->string('telefono',15)->nullable();
            $table->integer('id_rol');
            $table->string('password',20);
            $table->string('direccion',100);
            $table->string('ciudad',80);
            $table->string('barrio',60);

            $table->primary('id_user');
            $table->foreign('id_rol')->references('id')->on('rols');
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
