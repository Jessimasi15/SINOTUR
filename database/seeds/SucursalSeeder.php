<?php

use Illuminate\Database\Seeder;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursals')->insert([
        	'empresa_rif' => '1',
        	'nom_coord' => 'Sede Fontur',
            'telef_coord' => '02127070211',
            'direc_coord' => 'Av. Los Jabillos, entre Av. Libertador y calle Las Flores. Edf. FONTUR. Sabana Grande. Caracas.',
        ]);
    }
}
