<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcaInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca_insumos', function (Blueprint $table) {
            $table->bigIncrements('id_marca_insumo');
            $table->string('nom_marca_insumo');
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
        Schema::dropIfExists('marca_insumos');
    }
}
