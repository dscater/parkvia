<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapeos', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->bigInteger('ubicacion_id')->unsigned();
            $table->integer('ocupado')->nullable();
            $table->integer('vehiculo_id')->nullable();
            $table->timestamps();

            $table->foreign('ubicacion_id')->references('id')->on('ubicacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapeos');
    }
}
