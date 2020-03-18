<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoBeneficiarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_beneficiarios')->insert([
        	'nom_tipo_benef' => 'Asociado',
        ]);
        DB::table('tipo_beneficiarios')->insert([
        	'nom_tipo_benef' => 'Particular',
        ]);
        DB::table('tipo_beneficiarios')->insert([
            'nom_tipo_benef' => 'Institucional',
        ]);
    }
}