<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('_id');
            $table->string('Cliente');
            $table->string('Usuario');
            $table->string('Tipo_comprobante');
            $table->string('Num_comprobante');
            $table->datetime('Fecha_hora')
            $table->double('Impuesto');
            $table->double('Total');
            $table->string('Estado');
            $table->string('Detalle_venta');
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
        Schema::dropIfExists('ventas');
    }
}
