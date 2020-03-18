<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('almacens')->insert([
        	'nom_almacen' => Str::upper('Almacen Central'),
        	'estado_id' => '10',
            'direc_almacen' => Str::upper('Distrito Capital'),
        ]);

        DB::table('almacens')->insert([
            'nom_almacen' => Str::upper('Catia'),
            'estado_id' => '10',
            'direc_almacen' => Str::upper('Catia, Caracas. Distrito Capital'),
        ]);DB::table('almacens')->insert([
            'nom_almacen' => Str::upper('Maracay'),
            'estado_id' => '4',
            'direc_almacen' => Str::upper('Maracay, Aragua'),
        ]);
    }
}
