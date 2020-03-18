<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
        	'nom_estado' => 'Amazonas',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Anzoátegui',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Apure',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Aragua',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Barinas',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Bolívar',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Carabobo',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Cojedes',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Delta Amacuro',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Distrito Capital',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Falcón',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Guárico',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Lara',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Mérida',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Miranda',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Monagas',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Nueva Esparta',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Portuguesa',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Sucre',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Táchira',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Trujillo',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Vargas',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Yaracuy',
        ]);
        DB::table('estados')->insert([
        	'nom_estado' => 'Zulia',
        ]);

    }
}
