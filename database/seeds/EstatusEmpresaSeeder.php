<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estatus_empresas')->insert([
        	'nom_estatus' => 'ACTIVA',
        ]);
        DB::table('estatus_empresas')->insert([
        	'nom_estatus' => 'SUSPENDIDA',
        ]);
        DB::table('estatus_empresas')->insert([
        	'nom_estatus' => 'EN MORA',
        ]);
    }
}
