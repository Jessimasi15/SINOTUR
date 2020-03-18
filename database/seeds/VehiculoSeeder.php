<?php

use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehiculos')->insert([
        	'placa' => '000SAH',
        	'organizacion_rif' => 'J000311832',
            'benef_ci' => '10168265',
            'marca_id' => '4',
            'modelo_id' => '3',
            'serial_carroceria' => 'KJ45OA4JSAJ8',
            'serial_motor' => 'NFHFO47785EDB',
            'color_id' => '8',
            'año_carro' => '1999',
        ]);
        DB::table('vehiculos')->insert([
        	'placa' => '00AA0VA',
        	'organizacion_rif' => 'J000311832',
            'benef_ci' => '10169464',
            'marca_id' => '4',
            'modelo_id' => '3',
            'serial_carroceria' => 'HSJS7855MJDJND',
            'serial_motor' => '155MNJDHBDH',
            'color_id' => '4',
            'año_carro' => '2001',
        ]);
        DB::table('vehiculos')->insert([
        	'placa' => '00AA1AM',
        	'organizacion_rif' => 'J000311832',
            'benef_ci' => '10168265',
            'marca_id' => '4',
            'modelo_id' => '3',
            'serial_carroceria' => '125HJDB45DFF',
            'serial_motor' => 'JSFHFS4585SN',
            'color_id' => '5',
            'año_carro' => '1997',
        ]);
        DB::table('vehiculos')->insert([
        	'placa' => '01AD7SS',
        	'organizacion_rif' => 'J000771871',
            'benef_ci' => '10170635',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => 'JCHD5445DVS',
            'serial_motor' => 'VDSVSDV4545D',
            'color_id' => '13',
            'año_carro' => '2000',
        ]);
        DB::table('vehiculos')->insert([
        	'placa' => '01AF6TV',
        	'organizacion_rif' => 'J000771871',
            'benef_ci' => '10173024',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => 'VFRF8454SFBSF',
            'serial_motor' => 'VSFBVF455',
            'color_id' => '6',
            'año_carro' => '2015',
        ]);
        DB::table('vehiculos')->insert([
        	'placa' => '04AA2EM',
        	'organizacion_rif' => 'J000771871',
            'benef_ci' => '10173398',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => 'GNG55DDG554DG',
            'serial_motor' => 'SFSF4155BDGBD',
            'color_id' => '9',
            'año_carro' => '2017',
        ]);
        DB::table('vehiculos')->insert([
            'placa' => '00AA0GS',
            'organizacion_rif' => 'J000833460',
            'benef_ci' => '5421003',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => 'JGAQ5545JHAF',
            'serial_motor' => 'JBDKJBD552IHDE',
            'color_id' => '3',
            'año_carro' => '2000',
        ]);
        DB::table('vehiculos')->insert([
            'placa' => '00AA0JM',
            'organizacion_rif' => 'J000833460',
            'benef_ci' => '5421003',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => 'JDBF5565HAUHF',
            'serial_motor' => 'KJBKF5555KGC',
            'color_id' => '5',
            'año_carro' => '2008',
        ]);
        DB::table('vehiculos')->insert([
            'placa' => '00AA0RR',
            'organizacion_rif' => 'J000833460',
            'benef_ci' => '6201003',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => '555OUSHFH54',
            'serial_motor' => 'IHDFK555IAHD',
            'color_id' => '9',
            'año_carro' => '2013',
        ]);
        DB::table('vehiculos')->insert([
            'placa' => '00AA0TA',
            'organizacion_rif' => 'J000913628',
            'benef_ci' => '16201003',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => 'GBKJDB8558OUHD',
            'serial_motor' => 'JUHDFKBJBAKD',
            'color_id' => '9',
            'año_carro' => '2013',
        ]);
        DB::table('vehiculos')->insert([
            'placa' => '00AA0TD',
            'organizacion_rif' => 'J000913628',
            'benef_ci' => '16201003',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => 'JKBD558KUAGDF',
            'serial_motor' => 'KJADFKJ56DFG',
            'color_id' => '6',
            'año_carro' => '2004',
        ]);
        DB::table('vehiculos')->insert([
            'placa' => '00AA0VE',
            'organizacion_rif' => 'J000913628',
            'benef_ci' => '12540036',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => '552558GSRFGS',
            'serial_motor' => 'AGSR55554GSF',
            'color_id' => '1',
            'año_carro' => '2007',
        ]);
        DB::table('vehiculos')->insert([
            'placa' => '06AA5MA',
            'organizacion_rif' => 'J001118160',
            'benef_ci' => '12550036',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => 'HKFHA5564ADGS',
            'serial_motor' => 'AGFR55265858',
            'color_id' => '2',
            'año_carro' => '2003',
        ]);
        DB::table('vehiculos')->insert([
            'placa' => '06AA6DD',
            'organizacion_rif' => 'J001118160',
            'benef_ci' => '11540036',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => 'BAKFBD55655AFG',
            'serial_motor' => 'AGS85569GSRFG',
            'color_id' => '4',
            'año_carro' => '1995',
        ]);
        DB::table('vehiculos')->insert([
            'placa' => '09AB3FM',
            'organizacion_rif' => 'J001736301',
            'benef_ci' => '5630021',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => 'IHADFH5555AG',
            'serial_motor' => 'AGG5552AGAG',
            'color_id' => '6',
            'año_carro' => '2005',
        ]);
        DB::table('vehiculos')->insert([
            'placa' => '24A16AA',
            'organizacion_rif' => 'J001736301',
            'benef_ci' => '10369452',
            'marca_id' => '7',
            'modelo_id' => '6',
            'serial_carroceria' => '5555SFGS55S',
            'serial_motor' => 'AGW5525RG',
            'color_id' => '8',
            'año_carro' => '2007',
        ]);
    }
}
