<?php

use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
        	'rif_empresa' => 'G-20006289-4',
        	'nom_empresa' => 'Fundación Fondo Nacional de Transporte Urbano (FONTUR)',
            'telef_empresa' => '02127070211',
            'correo_empresa' => 'fontur@fontur.gob.ve',
            'sitio_web' => 'www.fontur.gob.ve',
            'estatus_id' => '1',
            'twitter' => '@Fontur_Oficial',
            'instagram' => 'fontur_oficial',
            'facebook' => 'Fontur Gob',
            'direc_empresa' => 'Av. Los Jabillos, entre Av. Libertador y calle Las Flores. Edf. FONTUR. Sabana Grande. Caracas.',
        ]);
    }
}
