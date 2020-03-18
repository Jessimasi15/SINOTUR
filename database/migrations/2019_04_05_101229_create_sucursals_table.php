<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursals', function (Blueprint $table) {
            $table->bigIncrements('id_sucursal');
            $table->bigInteger('empresa_rif')->unsigned();
            $table->foreign('empresa_rif')->references('id_empresa')->on('empresas');
            $table->string('nom_coord', 100);
            $table->string('telef_coord');
            $table->string('direc_coord', 200);
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
        Schema::dropIfExists('sucursals');
    }
}
