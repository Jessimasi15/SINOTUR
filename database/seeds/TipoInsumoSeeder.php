<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoInsumoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_insumos')->insert([
        	'nom_tipo_insumo' => 'CAUCHO',
        ]);
        DB::table('tipo_insumos')->insert([
        	'nom_tipo_insumo' => 'BATERIA',
        ]);
        DB::table('tipo_insumos')->insert([
        	'nom_tipo_insumo' => 'LUBRICANTE',
        ]);
    }
}
