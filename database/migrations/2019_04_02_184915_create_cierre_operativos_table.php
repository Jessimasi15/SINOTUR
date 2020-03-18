<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCierreOperativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cierre_operativos', function (Blueprint $table) {
            $table->bigIncrements('id_cierre_ope');
            $table->bigInteger('jornada_id')->unsigned();
            $table->foreign('jornada_id')->references('id_jornada')->on('jornadas');
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
        Schema::dropIfExists('cierre_operativos');
    }
}
