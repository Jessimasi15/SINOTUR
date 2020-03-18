<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignarBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_beneficiarios', function (Blueprint $table) {
            $table->bigIncrements('id_asignar_benef');
            $table->bigInteger('jornada_id')->unsigned();
            $table->foreign('jornada_id')->references('id_jornada')->on('jornadas');
            $table->string('placa');
            $table->foreign('placa')->references('placa')->on('vehiculos');
            $table->integer('tipo_insumo_id')->unsigned();
            $table->foreign('tipo_insumo_id')->references('id_tipo_insumo')->on('tipo_insumos');
            $table->bigInteger('insumos_id')->unsigned();
            $table->foreign('insumos_id')->references('id_detalle_insumo')->on('detalle_insumos');
            $table->integer('medida_id')->unsigned();
            $table->foreign('medida_id')->references('id_medida')->on('unidad_medidas');
            $table->integer('cantidad_entregar')->unsigned();
            $table->string('estatus')->nullable();
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
        Schema::dropIfExists('asignar_beneficiarios');
    }
}
