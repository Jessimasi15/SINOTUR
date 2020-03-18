<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id_empresa');
            $table->string('rif_empresa', 15)->unique();
            $table->string('nom_empresa', 100);
            $table->string('telef_empresa', 20);
            $table->string('correo_empresa', 40);
            $table->string('sitio_web', 50)->nullable();
            $table->integer('estatus_id')->unsigned();
            $table->foreign('estatus_id')->references('id_estatus')->on('estatus_empresas');
            $table->string('twitter', 35)->nullable();
            $table->string('instagram', 35)->nullable();
            $table->string('facebook', 35)->nullable();
            $table->string('direc_empresa', 200);
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
        Schema::dropIfExists('empresas');
    }
}
