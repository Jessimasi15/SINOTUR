<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgregarInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agregar_insumos', function (Blueprint $table) {
            $table->bigIncrements('id_agreg_insumos');
            $table->bigInteger('numero_orden');
            $table->date('fecha_desp');
            $table->date('fecha_inven');
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
            $table->bigInteger('cantidad_agreg');
            $table->decimal('monto_compra', 20, 2);
            $table->decimal('ganancia', 20, 2);
            $table->decimal('monto_venta', 20, 2);
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
        Schema::dropIfExists('agregar_insumos');
    }
}
