<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidad_medidas')->insert([
        	'nom_medida' => 'Unidad',
        	'id_tipo_insumo' => '1',
        ]);
        DB::table('unidad_medidas')->insert([
        	'nom_medida' => 'Litro',
        	'id_tipo_insumo' => '3',
        ]);
         DB::table('unidad_medidas')->insert([
        	'nom_medida' => 'Paila',
        	'id_tipo_insumo' => '3',
        ]);
        DB::table('unidad_medidas')->insert([
        	'nom_medida' => 'Tambor',
        	'id_tipo_insumo' => '3',
        ]);
         DB::table('unidad_medidas')->insert([
        	'nom_medida' => 'Unidad',
        	'id_tipo_insumo' => '2',
        ]);
    }
}
