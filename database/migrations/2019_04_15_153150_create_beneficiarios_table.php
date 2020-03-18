<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->integer('ci_beneficiario')->primary();
            $table->string('organizacion_rif', 15);
            $table->foreign('organizacion_rif')->references('rif_organizacion')->on('organizacions')->onDelete('cascade');
            $table->string('nom_benef', 40);
            $table->string('apell_benef', 40);
            $table->integer('tipo_benef_id')->unsigned();
            $table->foreign('tipo_benef_id')->references('id_tipo_benef')->on('tipo_beneficiarios');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id_estado')->on('estados');
            $table->integer('munic_id')->unsigned();
            $table->foreign('munic_id')->references('id_munic')->on('municipios');
            $table->integer('parroq_id')->unsigned();
            $table->foreign('parroq_id')->references('id_parroq')->on('parroquias');
            $table->string('telef_benef', 20);
            $table->string('correo_benef');
            $table->string('direc_benef', 300);
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
        Schema::dropIfExists('beneficiarios');
    }
}
