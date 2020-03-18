<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_insumos', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_insumo');
            $table->string('nom_detalle_insumo', 30);
            $table->integer('tipo_insumo_id')->unsigned();
            $table->foreign('tipo_insumo_id')->references('id_tipo_insumo')->on('tipo_insumos');
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
        Schema::dropIfExists('detalle_insumos');
    }
}
