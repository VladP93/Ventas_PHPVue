<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('_id');
            $table->string('Rol');
            $table->string('Nombre');
            $table->string('Tipo_documento');
            $table->string('Num_documento');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Email');
            $table->string('Password_hash');
            $table->string('Password_salt');
            $table->string('Condicion');
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
        Schema::dropIfExists('usuarios');
    }
}
