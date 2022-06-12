<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion_ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('smza_id');
            $table->foreign('smza_id')->references('id')->on('smzas');
            $table->string('mza');
            $table->string('lote');
            $table->string('calle');
            $table->string('colonia');
            $table->string('noExterior');
            $table->string('noInterior');
            $table->string('cpp');
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
        Schema::dropIfExists('direccion_ventas');
    }
}
