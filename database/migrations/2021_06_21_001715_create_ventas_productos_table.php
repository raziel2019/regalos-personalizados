<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventasproductos', function (Blueprint $table) {
            $table->id();
            $table->string('frase_producto',20);
            $table->unsignedBigInteger('usuarios_id');
            $table->unsignedBigInteger('productos_id');
            $table->unsignedBigInteger('estatusventa_id');
            $table->unsignedBigInteger('direccion_ventas_id');
            $table->foreign('usuarios_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('productos_id')
                ->references('id')
                ->on('productos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('estatusventa_id')
                ->references('id')
                ->on('estatusventa')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('direccion_ventas_id')
            ->references('id')
            ->on('direccion_ventas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('ventasproductos');
    }
}
