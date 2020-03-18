<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_vehiculos', function (Blueprint $table) {
            $table->bigIncrements('id_modelo');
            $table->bigInteger('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id_marca')->on('marca_vehiculos');
            $table->string('nom_modelo', 25);
            $table->integer('tipo_vehic_id')->unsigned();
            $table->foreign('tipo_vehic_id')->references('id_tipo_vehiculo')->on('tipo_vehiculos');
            $table->string('chasis');
            $table->string('carroceria');
            $table->bigInteger('caucho_id')->unsigned();
            $table->foreign('caucho_id')->references('id_detalle_insumo')->on('detalle_insumos');
            $table->integer('cantidad_caucho')->unsigned();
            $table->bigInteger('aceite_id')->unsigned();
            $table->foreign('aceite_id')->references('id_detalle_insumo')->on('detalle_insumos');
            $table->integer('cantidad_litros')->unsigned();
            $table->bigInteger('bateria_id')->unsigned();
            $table->foreign('bateria_id')->references('id_detalle_insumo')->on('detalle_insumos');
            $table->integer('num_puestos')->unsigned();
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
        Schema::dropIfExists('modelo_vehiculos');
    }
}
