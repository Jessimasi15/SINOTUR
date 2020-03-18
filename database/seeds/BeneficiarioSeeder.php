<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BeneficiarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beneficiarios')->insert([
        	'ci_beneficiario' => '10168265',
        	'organizacion_rif' => Str::upper('J000311832'),
            'nom_benef' => Str::upper('Felix'),
            'apell_benef' => Str::upper('Useche'),
            'tipo_benef_id' => '1',
            'estado_id' => '14',
            'munic_id' => '163',
            'parroq_id' => '572',
            'telef_benef' => '0416-2546378',
            'correo_benef' => Str::upper('fuseche@mail.com'),
            'direc_benef' => Str::upper('merida'),
        ]);
        DB::table('beneficiarios')->insert([
        	'ci_beneficiario' => '10169464',
        	'organizacion_rif' => Str::upper('J000311832'),
            'nom_benef' => Str::upper('Francisco'),
            'apell_benef' => Str::upper('Pernia'),
            'tipo_benef_id' => '1',
            'estado_id' => '14',
            'munic_id' => '163',
            'parroq_id' => '572',
            'telef_benef' => '0416-7521479',
            'correo_benef' => Str::upper('fpernia@mail.com'),
            'direc_benef' => Str::upper('merida'),
        ]);
        DB::table('beneficiarios')->insert([
        	'ci_beneficiario' => '10169465',
        	'organizacion_rif' => Str::upper('J000311832'),
            'nom_benef' => Str::upper('Pablo'),
            'apell_benef' => Str::upper('Pernia'),
            'tipo_benef_id' => '1',
            'estado_id' => '14',
            'munic_id' => '163',
            'parroq_id' => '572',
            'telef_benef' => '0416-4568972',
            'correo_benef' => Str::upper('ppernia@mail.com'),
            'direc_benef' => Str::upper('merida'),
        ]);
        DB::table('beneficiarios')->insert([
        	'ci_beneficiario' => '10170635',
        	'organizacion_rif' => Str::upper('J000771871'),
            'nom_benef' => Str::upper('Jose'),
            'apell_benef' => Str::upper('Valera'),
            'tipo_benef_id' => '1',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '345',
            'telef_benef' => '0414-4568972',
            'correo_benef' => Str::upper('josevarela@mail.com'),
            'direc_benef' => Str::upper('la vega'),
        ]);
        DB::table('beneficiarios')->insert([
        	'ci_beneficiario' => '10173024',
        	'organizacion_rif' => Str::upper('J000771871'),
            'nom_benef' => Str::upper('Luis'),
            'apell_benef' => Str::upper('Rojas'),
            'tipo_benef_id' => '2',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '345',
            'telef_benef' => '0414-4596301',
            'correo_benef' => Str::upper('luisrojas@mail.com'),
            'direc_benef' => Str::upper('la vega'),
        ]);
        DB::table('beneficiarios')->insert([
        	'ci_beneficiario' => '10173398',
        	'organizacion_rif' => Str::upper('J000771871'),
            'nom_benef' => Str::upper('Jose'),
            'apell_benef' => Str::upper('Ortega'),
            'tipo_benef_id' => '2',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '345',
            'telef_benef' => '0414-4789301',
            'correo_benef' => Str::upper('joseoprtega@mail.com'),
            'direc_benef' => Str::upper('la vega'),
        ]);
        DB::table('beneficiarios')->insert([
            'ci_beneficiario' => '5421003',
            'organizacion_rif' => Str::upper('J000833460'),
            'nom_benef' => Str::upper('Pedro'),
            'apell_benef' => Str::upper('Rodriguez'),
            'tipo_benef_id' => '2',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '345',
            'telef_benef' => '0414-4589620',
            'correo_benef' => Str::upper('prodriguez@mail.com'),
            'direc_benef' => Str::upper('centro'),
        ]);
        DB::table('beneficiarios')->insert([
            'ci_beneficiario' => '6201003',
            'organizacion_rif' => Str::upper('J000833460'),
            'nom_benef' => Str::upper('Jose'),
            'apell_benef' => Str::upper('Castillo'),
            'tipo_benef_id' => '2',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '345',
            'telef_benef' => '0414-5410021',
            'correo_benef' => Str::upper('josecastillo@mail.com'),
            'direc_benef' => Str::upper('centro'),
        ]);
        DB::table('beneficiarios')->insert([
            'ci_beneficiario' => '16201003',
            'organizacion_rif' => Str::upper('J000913628'),
            'nom_benef' => Str::upper('Jesus'),
            'apell_benef' => Str::upper('Castillo'),
            'tipo_benef_id' => '2',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '345',
            'telef_benef' => '0412-5410021',
            'correo_benef' => Str::upper('jcastillo@mail.com'),
            'direc_benef' => Str::upper('silencio'),
        ]);
        DB::table('beneficiarios')->insert([
            'ci_beneficiario' => '12540036',
            'organizacion_rif' => Str::upper('J000913628'),
            'nom_benef' => Str::upper('Kevin'),
            'apell_benef' => 'Acosta',
            'tipo_benef_id' => '2',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '345',
            'telef_benef' => '0416-5410021',
            'correo_benef' => Str::upper('kevinacosta@mail.com'),
            'direc_benef' => Str::upper('silencio'),
        ]);
        DB::table('beneficiarios')->insert([
            'ci_beneficiario' => '12550036',
            'organizacion_rif' => Str::upper('J001118160'),
            'nom_benef' => Str::upper('Carlos'),
            'apell_benef' => Str::upper('Acosta'),
            'tipo_benef_id' => '2',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '345',
            'telef_benef' => '0416-4201236',
            'correo_benef' => Str::upper('cacosta@mail.com'),
            'direc_benef' => Str::upper('catia'),
        ]);
        DB::table('beneficiarios')->insert([
            'ci_beneficiario' => '11540036',
            'organizacion_rif' => Str::upper('J001118160'),
            'nom_benef' => Str::upper('Johan'),
            'apell_benef' => Str::upper('Pineda'),
            'tipo_benef_id' => '2',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '345',
            'telef_benef' => '0424-5483002',
            'correo_benef' => Str::upper('johanpineda@mail.com'),
            'direc_benef' => Str::upper('catia'),
        ]);
        DB::table('beneficiarios')->insert([
            'ci_beneficiario' => '5630021',
            'organizacion_rif' => Str::upper('J001736301'),
            'nom_benef' => Str::upper('Ismael'),
            'apell_benef' => Str::upper('Palacios'),
            'tipo_benef_id' => '2',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '345',
            'telef_benef' => '0424-6520120',
            'correo_benef' => Str::upper('ismaelp@mail.com'),
            'direc_benef' => Str::upper('florida'),
        ]);
        DB::table('beneficiarios')->insert([
            'ci_beneficiario' => '10369452',
            'organizacion_rif' => Str::upper('J001736301'),
            'nom_benef' => Str::upper('Erik'),
            'apell_benef' => Str::upper('Gomez'),
            'tipo_benef_id' => '2',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '345',
            'telef_benef' => '0414-3002560',
            'correo_benef' => Str::upper('erikgomez@mail.com'),
            'direc_benef' => Str::upper('florida'),
        ]);
    }
}
