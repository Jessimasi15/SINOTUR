<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BloqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bloques')->insert([
        	'nom_bloque' => 'Bloque Este',
        	'nom_resp_principal' => 'Luis',
        	'apell_resp_principal' => 'Colmenares',
        	'telef_resp_principal' => '0426-9089957',
        	'nom_resp_suplente' => 'Iraly',
        	'apell_resp_suplente' => 'Reyes',
        	'telef_resp_suplente' => '0412-9632521',
        ]);
        DB::table('bloques')->insert([
        	'nom_bloque' => 'Movimiento Bolivariano Sindical Profesional de Transportista de Venezuela',
        	'nom_resp_principal' => '',
        	'apell_resp_principal' => '',
        	'telef_resp_principal' => '',
        	'nom_resp_suplente' => '',
        	'apell_resp_suplente' => '',
        	'telef_resp_suplente' => '',
        ]);
        DB::table('bloques')->insert([
        	'nom_bloque' => 'Bloque Norte Sur',
        	'nom_resp_principal' => 'Jhon',
        	'apell_resp_principal' => 'Escalona',
        	'telef_resp_principal' => '0424-2977455',
        	'nom_resp_suplente' => 'José',
        	'apell_resp_suplente' => 'Sayago',
        	'telef_resp_suplente' => '0414-2607329',
        ]);
        DB::table('bloques')->insert([
        	'nom_bloque' => 'Bloque Oeste',
        	'nom_resp_principal' => 'Braulio',
        	'apell_resp_principal' => 'Cedeño',
        	'telef_resp_principal' => '0424-2388238',
        	'nom_resp_suplente' => 'Ricardo',
        	'apell_resp_suplente' => 'Guillen',
        	'telef_resp_suplente' => '0426-6336773',
        ]);
        DB::table('bloques')->insert([
        	'nom_bloque' => 'Bloque Sur Oeste',
        	'nom_resp_principal' => 'Pedro',
        	'apell_resp_principal' => 'Jimenez',
        	'telef_resp_principal' => '0414-0336293',
        	'nom_resp_suplente' => 'Aender',
        	'apell_resp_suplente' => 'Cordero',
        	'telef_resp_suplente' => '0412-2373907',
        ]);
        DB::table('bloques')->insert([
        	'nom_bloque' => 'Sutradimeca',
        	'nom_resp_principal' => '',
        	'apell_resp_principal' => '',
        	'telef_resp_principal' => '',
        	'nom_resp_suplente' => 'Keila',
        	'apell_resp_suplente' => 'Hernández',
        	'telef_resp_suplente' => '0414-2568080',
        ]);
        DB::table('bloques')->insert([
        	'nom_bloque' => 'Bloque Sur Este',
        	'nom_resp_principal' => '',
        	'apell_resp_principal' => '',
        	'telef_resp_principal' => '',
        	'nom_resp_suplente' => '',
        	'apell_resp_suplente' => '',
        	'telef_resp_suplente' => '',
        ]);
        DB::table('bloques')->insert([
        	'nom_bloque' => 'Fuerza Bolivariana De Taxistas',
        	'nom_resp_principal' => 'Yuri',
        	'apell_resp_principal' => 'López',
        	'telef_resp_principal' => '0414-3328017',
        	'nom_resp_suplente' => 'Luis',
        	'apell_resp_suplente' => 'Suarez',
        	'telef_resp_suplente' => '',
        ]);
        DB::table('bloques')->insert([
        	'nom_bloque' => 'Fedetrans',
        	'nom_resp_principal' => 'Richard',
        	'apell_resp_principal' => 'Mambel',
        	'telef_resp_principal' => '0414-3001489',
        	'nom_resp_suplente' => '',
        	'apell_resp_suplente' => '',
        	'telef_resp_suplente' => '',
        ]);
    }
}
