<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_insumos', function (Blueprint $table) {
            $table->bigIncrements('id_asignacion');
            $table->bigInteger('almacen_id')->unsigned();
            $table->foreign('almacen_id')->references('id_almacen')->on('almacens');
            $table->integer('tipo_insumo_id')->unsigned();
            $table->foreign('tipo_insumo_id')->references('id_tipo_insumo')->on('tipo_insumos');
            $table->bigInteger('marca_id')->unsigned()->nullable();
            $table->foreign('marca_id')->references('id_marca_insumo')->on('marca_insumos');
            $table->bigInteger('insumos_id')->unsigned();
            $table->foreign('insumos_id')->references('id_detalle_insumo')->on('detalle_insumos');
            $table->integer('medida_id')->unsigned();
            $table->foreign('medida_id')->references('id_medida')->on('unidad_medidas');
            $table->bigInteger('cantidad_movida');
            $table->bigInteger('numero_orden');
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
        Schema::dropIfExists('asignacion_insumos');
    }
}
