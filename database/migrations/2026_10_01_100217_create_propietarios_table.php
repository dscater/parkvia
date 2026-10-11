<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('apep');
            $table->string('apem')->nullable();
            $table->string('ci');
            $table->string('ci_exp');
            $table->string('dir', 255)->nullable();
            $table->string('fono')->nullable();
            $table->string('cel')->nullable();
            $table->string('correo', 255)->nullable();
            $table->string('foto', 255);
            $table->date('fecha_reg');
            $table->integer('status');
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
        Schema::dropIfExists('propietarios');
    }
}
