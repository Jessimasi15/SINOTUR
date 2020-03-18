<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_servicios')->insert([
        	'nom_tipo_serv' => 'Público',
        ]);
        DB::table('tipo_servicios')->insert([
        	'nom_tipo_serv' => 'Privado',
        ]);
        DB::table('tipo_servicios')->insert([
            'nom_tipo_serv' => 'Transporte Escolar',
        ]);
        DB::table('tipo_servicios')->insert([
            'nom_tipo_serv' => 'Particular (Taxi)',
        ]);
    }
}
