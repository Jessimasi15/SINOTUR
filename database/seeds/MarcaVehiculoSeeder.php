<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'BELARUS',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'CARIBE',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'CHERY',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'CHEVROLET',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'DAEWOO',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'DODGE',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'EBRO',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'ENCAVA',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'FORD',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'HYUNDAI',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'IVECO',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'KIA',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'M. B. SPRINTER',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'MERCEDES BENZ',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'MITSUBISHI',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'NISSAN',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'NO DISPONIBLE',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'RENAULT',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'TOYOTA',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'VOLVO',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'YUTONG',
        ]);
        DB::table('marca_vehiculos')->insert([
        	'nom_marca' => 'TITAN',
        ]);

    }
}
