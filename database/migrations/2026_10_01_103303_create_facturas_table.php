<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cobro_id')->unsigned();
            $table->string("a_nombre");
            $table->string("nit");
            $table->bigInteger('nro_factura');
            $table->string('codigo_control', 255);
            $table->string('qr', 255);
            $table->decimal('total', 24, 2);
            $table->date('fecha');
            $table->time('hora');
            $table->date('fecha_emision');
            $table->integer('estado');
            $table->string('observacion', 255)->nullable();
            $table->timestamps();

            $table->foreign('cobro_id')->references('id')->on('cobros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
