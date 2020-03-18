<?php

use Illuminate\Database\Seeder;

class MarcasInsumoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'BFGoodrich',
        	'tipo_insumo_id' => '1',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Dick Cepek',
        	'tipo_insumo_id' => '1',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Fujisaki',
        	'tipo_insumo_id' => '1',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Goodyear',
        	'tipo_insumo_id' => '1',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => '	Kumho Tires',
        	'tipo_insumo_id' => '1',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Lima Caucho',
        	'tipo_insumo_id' => '1',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Nitto',
        	'tipo_insumo_id' => '1',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Toyo Tires',
        	'tipo_insumo_id' => '1',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Triangle',
        	'tipo_insumo_id' => '1',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Yokohama',
        	'tipo_insumo_id' => '1',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Bosch',
        	'tipo_insumo_id' => '2',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Ducan',
        	'tipo_insumo_id' => '2',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => '	Fulgor',
        	'tipo_insumo_id' => '2',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Titán',
        	'tipo_insumo_id' => '2',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Varta',
        	'tipo_insumo_id' => '2',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'CAM2',
        	'tipo_insumo_id' => '3',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Chevron',
        	'tipo_insumo_id' => '3',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Mobil Special',
        	'tipo_insumo_id' => '3',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Phillips 66',
        	'tipo_insumo_id' => '3',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Shell',
        	'tipo_insumo_id' => '3',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'TEXSA',
        	'tipo_insumo_id' => '3',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Ultralub',
        	'tipo_insumo_id' => '3',
        ]);
        DB::table('marca_insumos')->insert([
        	'nom_marca_insumo' => 'Wolf´s Head',
        	'tipo_insumo_id' => '3',
        ]);
    }
}
