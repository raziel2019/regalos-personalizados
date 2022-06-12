<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smzas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')
            ->references('id')
            ->on('municipios')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->unsignedBigInteger('costo_zona_id');
            $table->foreign('costo_zona_id')
            ->references('id')
            ->on('costo_zonas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('smza');
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
        Schema::dropIfExists('smzas');
    }
}
