<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->string('_id');
            $table->string('Proveedor');
            $table->string('Usuario');
            $table->string('Tipo_comprobante');
            $table->string('Num_comprobante');
            $table->datetime('Fecha_hora');
            $table->double('Impuesto');
            $table->double('Total');
            $table->string('Estado');
            $table->string('Detalle_ingreso');
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
        Schema::dropIfExists('ingresos');
    }
}
