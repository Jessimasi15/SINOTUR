<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizacions', function (Blueprint $table) {
            $table->string('tipo_empresa', 8);
            $table->string('servicio', 2);
            $table->string('institucional', 2);
            $table->string('rif_organizacion', 15)->primary();
            $table->string('nom_organizacion', 100);
            $table->integer('tipo_organ_id')->unsigned();
            $table->foreign('tipo_organ_id')->references('id_tipo_organ')->on('tipo_organizacions');
            $table->integer('ci_presidente')->unique();
            $table->string('nom_presidente', 40);
            $table->string('apell_presidente', 40);
            $table->string('correo_organ', 50);
            $table->string('telef_local', 20);
            $table->string('telef_celular', 20);
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id_estado')->on('estados');
            $table->integer('munic_id')->unsigned();
            $table->foreign('munic_id')->references('id_munic')->on('municipios');
            $table->integer('parroq_id')->unsigned();
            $table->foreign('parroq_id')->references('id_parroq')->on('parroquias');
            $table->bigInteger('bloque_id')->unsigned();
            $table->foreign('bloque_id')->references('id_bloque')->on('bloques');
            $table->string('ruta_organ', 300);
            $table->string('direc_organ', 300);
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
        Schema::dropIfExists('organizacions');
    }
}
