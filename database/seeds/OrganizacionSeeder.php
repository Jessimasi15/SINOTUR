<?php

use Illuminate\Database\Seeder;

class OrganizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizacions')->insert([
            'tipo_empresa' => 'privada',
            'servicio' => 'si',
            'institucional' => 'no',
        	'rif_organizacion' => 'J000311832',
        	'nom_organizacion' => 'Union Conductores playa grande playa verde ruta 168',
            'tipo_organ_id' => '1',
            'ci_presidente' => '3568152',
            'nom_presidente' => 'Raul',
            'apell_presidente' => 'Perez',
            'correo_organ' => 'raulp@mail.com',
            'telef_local' => '0212-4235896',
            'telef_celular' => '0416-8956310',
            'estado_id' => '14',
            'munic_id' => '163',
            'parroq_id' => '572',
            'bloque_id' => '9',
            'ruta_organ' => 'merida',
            'direc_organ' => 'merida',
        ]);
        DB::table('organizacions')->insert([
            'tipo_empresa' => 'publico',
            'servicio' => 'si',
            'institucional' => 'no',
        	'rif_organizacion' => 'J000771871',
        	'nom_organizacion' => 'Acoop. de transporte "Quinta Crespo-Sabana del Blanco',
            'tipo_organ_id' => '2',
            'ci_presidente' => '5421035',
            'nom_presidente' => 'Pedro',
            'apell_presidente' => 'Lopez',
            'correo_organ' => 'pedrolopez@mail.com',
            'telef_local' => '0212-5426820',
            'telef_celular' => '0412-875146',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '342',
            'bloque_id' => '2',
            'ruta_organ' => 'el recreo',
            'direc_organ' => 'caracas',
        ]);
        DB::table('organizacions')->insert([
            'tipo_empresa' => 'privado',
            'servicio' => 'si',
            'institucional' => 'no',
            'rif_organizacion' => 'J000833460',
            'nom_organizacion' => 'Sociedad Civil Union Santa Monica',
            'tipo_organ_id' => '2',
            'ci_presidente' => '6521987',
            'nom_presidente' => 'Jose',
            'apell_presidente' => 'Carrillo',
            'correo_organ' => 'josecarrillo@mail.com',
            'telef_local' => '0212-6321002',
            'telef_celular' => '0424-875146',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '342',
            'bloque_id' => '2',
            'ruta_organ' => 'chacao',
            'direc_organ' => 'caracas',
        ]);
        DB::table('organizacions')->insert([
            'tipo_empresa' => 'privado',
            'servicio' => 'si',
            'institucional' => 'no',
            'rif_organizacion' => 'J000913628',
            'nom_organizacion' => 'Asoc. Civil Union Silencio Lidice',
            'tipo_organ_id' => '2',
            'ci_presidente' => '8965785',
            'nom_presidente' => 'Ricardo',
            'apell_presidente' => 'Hernandez',
            'correo_organ' => 'ricardoh@mail.com',
            'telef_local' => '0212-4568520',
            'telef_celular' => '0424-7562001',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '342',
            'bloque_id' => '2',
            'ruta_organ' => 'silencio centro',
            'direc_organ' => 'caracas',
        ]);
        DB::table('organizacions')->insert([
            'tipo_empresa' => 'publica',
            'servicio' => 'si',
            'institucional' => 'si',
            'rif_organizacion' => 'J001118160',
            'nom_organizacion' => 'Union Magallanes',
            'tipo_organ_id' => '2',
            'ci_presidente' => '10987256',
            'nom_presidente' => 'Antonio',
            'apell_presidente' => 'Rosales',
            'correo_organ' => 'arosales@mail.com',
            'telef_local' => '0212-4520032',
            'telef_celular' => '0412-9872530',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '342',
            'bloque_id' => '2',
            'ruta_organ' => 'catia',
            'direc_organ' => 'caracas',
        ]);
        DB::table('organizacions')->insert([
            'tipo_empresa' => 'privada',
            'servicio' => 'si',
            'institucional' => 'si',
            'rif_organizacion' => 'J001736301',
            'nom_organizacion' => 'A.Coop de Transporte Alto R.L',
            'tipo_organ_id' => '2',
            'ci_presidente' => '9520012',
            'nom_presidente' => 'Igor',
            'apell_presidente' => 'Rodriguez',
            'correo_organ' => 'igorrodrig@mail.com',
            'telef_local' => '0212-1026533',
            'telef_celular' => '0416-8953005',
            'estado_id' => '10',
            'munic_id' => '104',
            'parroq_id' => '342',
            'bloque_id' => '2',
            'ruta_organ' => 'florida',
            'direc_organ' => 'caracas',
        ]);
    }
}
