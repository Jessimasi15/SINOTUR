<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_vehiculos')->insert([
        	'nom_tipo_vehiculo' => 'Autobus',
        ]);
        DB::table('tipo_vehiculos')->insert([
        	'nom_tipo_vehiculo' => 'Minibus',
        ]);
        DB::table('tipo_vehiculos')->insert([
        	'nom_tipo_vehiculo' => 'Rustico',
        ]);
        DB::table('tipo_vehiculos')->insert([
        	'nom_tipo_vehiculo' => 'Periferico',
        ]);
        DB::table('tipo_vehiculos')->insert([
        	'nom_tipo_vehiculo' => 'Van',
        ]);
    }
}
