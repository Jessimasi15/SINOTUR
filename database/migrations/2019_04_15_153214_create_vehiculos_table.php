<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->string('placa')->primary();
            $table->string('organizacion_rif', 15);
            $table->foreign('organizacion_rif')->references('rif_organizacion')->on('organizacions')->onDelete('cascade');
            $table->integer('benef_ci');
            $table->foreign('benef_ci')->references('ci_beneficiario')->on('beneficiarios')->onDelete('cascade');
            $table->bigInteger('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id_marca')->on('marca_vehiculos');
            $table->bigInteger('modelo_id')->unsigned();
            $table->foreign('modelo_id')->references('id_modelo')->on('modelo_vehiculos');
            $table->string('serial_carroceria');
            $table->string('serial_motor');
            $table->bigInteger('color_id')->unsigned();
            $table->foreign('color_id')->references('id_color')->on('colors');
            $table->year('año_carro');
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
        Schema::dropIfExists('asignar_vehiculos');
    }
}
