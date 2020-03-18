<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJornadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornadas', function (Blueprint $table) {
            $table->bigIncrements('id_jornada');
            $table->date('fecha_jornada');
            $table->string('nom_jornada',50)->unique();
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id_estado')->on('estados');
            $table->bigInteger('almacen_id')->unsigned();
            $table->foreign('almacen_id')->references('id_almacen')->on('almacens');
            $table->string('direc_jornada', 200);
            $table->string('rif_empresa');
            $table->string('ci_resp_jorn');
            $table->string('nom_apell_resp');
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
        Schema::dropIfExists('crear_jornadas');
    }
}
