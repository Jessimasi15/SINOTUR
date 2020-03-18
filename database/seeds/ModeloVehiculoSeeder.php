<?php

use Illuminate\Database\Seeder;

class ModeloVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelo_vehiculos')->insert([
            'marca_id' => '1',
        	'nom_modelo' => 'MAZ-152-062',
        	'tipo_vehic_id' => '1',
            'chasis' => 'ENCAVA',
            'carroceria' => 'IVECO',
        	'caucho_id' => '95',
        	'cantidad_caucho' => '6',
        	'aceite_id' => '157',
        	'cantidad_litros' => '9',
        	'bateria_id' => '144',
        	'num_puestos' => '44',
        ]);
        DB::table('modelo_vehiculos')->insert([
            'marca_id' => '2',
        	'nom_modelo' => 'MAZ-251-050',
        	'tipo_vehic_id' => '1',
            'chasis' => 'IVECO',
            'carroceria' => 'BERALIS',
        	'caucho_id' => '95',
        	'cantidad_caucho' => '6',
        	'aceite_id' => '157',
        	'cantidad_litros' => '9',
        	'bateria_id' => '144',
        	'num_puestos' => '48',
        ]);
        DB::table('modelo_vehiculos')->insert([
            'marca_id' => '4',
        	'nom_modelo' => 'MAZ-256-270',
        	'tipo_vehic_id' => '2',
            'chasis' => 'ENCAVA',
            'carroceria' => 'ENCAVA',
        	'caucho_id' => '42',
        	'cantidad_caucho' => '6',
        	'aceite_id' => '157',
        	'cantidad_litros' => '9',
        	'bateria_id' => '144',
        	'num_puestos' => '27',
        ]);
        DB::table('modelo_vehiculos')->insert([
            'marca_id' => '3',
        	'nom_modelo' => 'TC 1936',
        	'tipo_vehic_id' => '1',
            'chasis' => 'BERALIS',
            'carroceria' => 'BELARIS',
        	'caucho_id' => '95',
        	'cantidad_caucho' => '6',
        	'aceite_id' => '157',
        	'cantidad_litros' => '26',
        	'bateria_id' => '133',
        	'num_puestos' => '55',
        ]);
        DB::table('modelo_vehiculos')->insert([
            'marca_id' => '9',
            'nom_modelo' => 'SPORT WAGON',
            'tipo_vehic_id' => '5',
            'chasis' => 'ENCAVA',
            'carroceria' => 'CARIBE',
            'caucho_id' => '27',
            'cantidad_caucho' => '4',
            'aceite_id' => '149',
            'cantidad_litros' => '5',
            'bateria_id' => '107',
            'num_puestos' => '5',
        ]);
	    DB::table('modelo_vehiculos')->insert([
            'marca_id' => '7',
	    	'nom_modelo' => 'ORINOCO',
	    	'tipo_vehic_id' => '5',
            'chasis' => 'CHERY',
            'carroceria' => 'CHERY',
	    	'caucho_id' => '57',
	    	'cantidad_caucho' => '4',
	    	'aceite_id' => '152',
	    	'cantidad_litros' => '5',
	    	'bateria_id' => '107',
	    	'num_puestos' => '5',
	    ]);
    }
}
