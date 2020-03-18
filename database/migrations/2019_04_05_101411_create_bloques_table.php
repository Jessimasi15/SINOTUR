<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloques', function (Blueprint $table) {
            $table->bigIncrements('id_bloque');
            $table->string('nom_bloque', 150);
            $table->string('nom_resp_principal', 40);
            $table->string('apell_resp_principal', 40);
            $table->string('telef_resp_principal', 20);
            $table->string('nom_resp_suplente', 40);
            $table->string('apell_resp_suplente', 40);
            $table->string('telef_resp_suplente', 20);
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
        Schema::dropIfExists('bloques');
    }
}
