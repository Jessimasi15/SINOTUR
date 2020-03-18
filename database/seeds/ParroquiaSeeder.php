<?php

use Illuminate\Database\Seeder;

class ParroquiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // Amazonas
       	// Alto Orinoco
       	DB::table('parroquias')->insert([
        	'nom_parroq' => 'La Esmeralda',
        	'munic_id' => '1',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Huachamacare',
        	'munic_id' => '1',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Marawaka',
        	'munic_id' => '1',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Mavaca',
        	'munic_id' => '1',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Sierra Parima',
        	'munic_id' => '1',
        ]);
        // Atabapo
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'San Fernando de Atabapo',
        	'munic_id' => '2',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Caname',
        	'munic_id' => '2',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Ucata',
        	'munic_id' => '2',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Yapacana',
        	'munic_id' => '2',
        ]);
        // Atures
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Fernando Girón Tovar',
        	'munic_id' => '3',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Luis Alberto Gómez',
        	'munic_id' => '3',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Parhueña',
        	'munic_id' => '3',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Platanillal',
        	'munic_id' => '3',
        ]);
        // Autana
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Isla Ratón',
        	'munic_id' => '4',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Guayapo',
        	'munic_id' => '4',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Munduapo',
        	'munic_id' => '4',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Samariapo',
        	'munic_id' => '4',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Sipapo',
        	'munic_id' => '4',
        ]);
        // Manapiare
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'San Juan de Manapiare',
        	'munic_id' => '5',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Alto Ventuari',
        	'munic_id' => '5',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Bajo Ventuari',
        	'munic_id' => '5',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Medio Ventuari',
        	'munic_id' => '5',
        ]);
        // Maroa
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Maroa',
        	'munic_id' => '6',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Comunidad',
        	'munic_id' => '6',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Victorino',
        	'munic_id' => '6',
        ]);
        // Río Negro
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'San Carlos de Río Negro',
        	'munic_id' => '7',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Casiquiare',
        	'munic_id' => '7',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Cocuy',
        	'munic_id' => '7',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Solano',
        	'munic_id' => '7',
        ]);
    // Anzoátegui
        // Anaco
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Anaco',
        	'munic_id' => '8',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'San Joaquin',
        	'munic_id' => '8',
        ]);
        // Aragua
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Aragua de Barcelona',
        	'munic_id' => '9',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Cachipo',
        	'munic_id' => '9',
        ]);
        // Bolívar
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Bergantin',
        	'munic_id' => '10',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Caigua',
        	'munic_id' => '10',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'El Carmen',
        	'munic_id' => '10',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'El Pilar',
        	'munic_id' => '10',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Naricual',
        	'munic_id' => '10',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'San Cristobal',
        	'munic_id' => '10',
        ]);
        // Bruzual
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Clarines',
        	'munic_id' => '11',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Guanape',
        	'munic_id' => '11',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Sabana de Uchire',
        	'munic_id' => '11',
        ]);
        // Cajigal
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Onoto',
        	'munic_id' => '12',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'San Pablo',
        	'munic_id' => '12',
        ]);
        // Carvajal
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Santa Barbara',
        	'munic_id' => '13',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Valle Guanape',
        	'munic_id' => '13',
        ]);
        // Freites
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Cantaura',
        	'munic_id' => '14',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Libertador',
        	'munic_id' => '14',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Santa Rosa',
        	'munic_id' => '14',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Urica',
        	'munic_id' => '14',
        ]);
        // Guanipa
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'San José de Guanipa',
        	'munic_id' => '15',
        ]);
        // Guanta
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Chorreron',
        	'munic_id' => '16',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Guanta',
        	'munic_id' => '16',
        ]);
        // Independencia
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Soledad',
        	'munic_id' => '17',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Mamo',
        	'munic_id' => '17',
        ]);
        // Libertad
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'San Mateo',
        	'munic_id' => '18',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'El Carito',
        	'munic_id' => '18',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Santa Ines',
        	'munic_id' => '18',
        ]);
        // Mc Gregor
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'El Chaparro',
        	'munic_id' => '19',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Tomas Alfaro Calatrava',
        	'munic_id' => '19',
        ]);
        // Miranda
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Pariaguan',
        	'munic_id' => '20',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Atapirire',
        	'munic_id' => '20',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Boca del Pao',
        	'munic_id' => '20',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'El Pao',
        	'munic_id' => '20',
        ]);
        // Monagas
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Mapire',
        	'munic_id' => '21',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Piar',
        	'munic_id' => '21',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Santa Clara',
        	'munic_id' => '21',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'San Diego de Cabrutica',
        	'munic_id' => '21',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Uverito',
        	'munic_id' => '21',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Zuata',
        	'munic_id' => '21',
        ]);
        // Peñalver
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Puerto Piritu',
        	'munic_id' => '22',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'San Miguel',
        	'munic_id' => '22',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Sucre',
        	'munic_id' => '22',
        ]);
        // Piritu
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Piritu',
        	'munic_id' => '23',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'San Francisco',
        	'munic_id' => '23',
        ]);
        // San Juan Capistrano
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Boca de Chavez',
        	'munic_id' => '24',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Boca Uchire',
        	'munic_id' => '24',
        ]);
        // Santa Ana
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Pueblo Nuevo',
        	'munic_id' => '25',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Santa Ana',
        	'munic_id' => '25',
        ]);
        // Simon Rodríguez
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'El Tigre',
        	'munic_id' => '26',
        ]);
        // Sotillo
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Puerto la Cruz',
        	'munic_id' => '27',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Pozuelos',
        	'munic_id' => '27',
        ]);
        // Urbaneja
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'El Morro',
        	'munic_id' => '28',
        ]);
        DB::table('parroquias')->insert([
        	'nom_parroq' => 'Lecherias',
        	'munic_id' => '28',
        ]);
    // Apure
        // Achaguas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Achaguas',
            'munic_id' => '29',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Apurito',
            'munic_id' => '29',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Yagual',
            'munic_id' => '29',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guachara',
            'munic_id' => '29',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mucuritas',
            'munic_id' => '29',
        ]);DB::table('parroquias')->insert([
            'nom_parroq' => 'Queseras del Medio',
            'munic_id' => '29',
        ]);
        // Biruaca
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Biruaca',
            'munic_id' => '30',
        ]);
        // Muñoz
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bruzual',
            'munic_id' => '31',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mantecal',
            'munic_id' => '31',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Quintero',
            'munic_id' => '31',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ricon Hondo',
            'munic_id' => '31',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Vicente',
            'munic_id' => '31',
        ]);
        // Paez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aramendi',
            'munic_id' => '32',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Amparo',
            'munic_id' => '32',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guasdualito',
            'munic_id' => '32',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Camilo',
            'munic_id' => '32',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Urdaneta',
            'munic_id' => '32',
        ]);
        // Pedro Camejo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Codazzi',
            'munic_id' => '33',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cunaviche',
            'munic_id' => '33',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Juan de Payara',
            'munic_id' => '33',
        ]);
        // Romulo Gallegos
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Elorza',
            'munic_id' => '34',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Trinidad',
            'munic_id' => '34',
        ]);
        // San Fernando
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Recreo',
            'munic_id' => '35',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Peñalver',
            'munic_id' => '35',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Fernando',
            'munic_id' => '35',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Rafael de Atamaica',
            'munic_id' => '35',
        ]);
    // Aragua
        // Francisco Linares A.
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Rita',
            'munic_id' => '36',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Francisco de Miranda',
            'munic_id' => '36',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mons Feliciano G',
            'munic_id' => '36',
        ]);
        // Bolivar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Mateo',
            'munic_id' => '37',
        ]);
        // Camatagua
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Camatagua',
            'munic_id' => '38',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Carmen de Cura',
            'munic_id' => '38',
        ]);
        // Girardot
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Delicias',
            'munic_id' => '39',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Andres Eloy Blanco',
            'munic_id' => '39',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Choroni',
            'munic_id' => '39',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Joaquin Crespo',
            'munic_id' => '39',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Jose Casanova Godoy',
            'munic_id' => '39',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Los Tacariguas',
            'munic_id' => '39',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Madre María de San José',
            'munic_id' => '39',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pedro Jose Ovalles',
            'munic_id' => '39',
        ]);
        // Jose Angel Lamas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Cruz',
            'munic_id' => '40',
        ]);
        // Jose Felix Rivas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Victoria',
            'munic_id' => '41',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Castor Nieves Rios',
            'munic_id' => '41',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Guacamayas',
            'munic_id' => '41',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pao de Zarate',
            'munic_id' => '41',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Zuata',
            'munic_id' => '41',
        ]);
        // Jose R Revenga
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Consejo',
            'munic_id' => '42',
        ]);
        // Libertador
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Palo Negro',
            'munic_id' => '43',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Martin de Porres',
            'munic_id' => '43',
        ]);
        // Mario B Iragorry
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Limon',
            'munic_id' => '44',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caña de Azúcar',
            'munic_id' => '44',
        ]);
        // San Casimiro
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Casimiro',
            'munic_id' => '45',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guiripa',
            'munic_id' => '45',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ollas de Caramacate',
            'munic_id' => '45',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Valle Morin',
            'munic_id' => '45',
        ]);
        // San Sebastián
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Sebastián',
            'munic_id' => '46',
        ]);
        // Santiago Mariño
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Turmero',
            'munic_id' => '47',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Alfredo Pacheco M',
            'munic_id' => '47',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Arevalo Aponte',
            'munic_id' => '47',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chuao',
            'munic_id' => '47',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Saman de Guere',
            'munic_id' => '47',
        ]);
        // Santos Michelena
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Tejerias',
            'munic_id' => '48',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tiara',
            'munic_id' => '48',
        ]);
        // Ocumare de la Costa
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ocumare de la Costa',
            'munic_id' => '49',
        ]);
        // Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cagua',
            'munic_id' => '50',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bella Vista',
            'munic_id' => '50',
        ]);
        // Tovar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Colonia Tovar',
            'munic_id' => '51',
        ]);
        // Urdaneta
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Barbacoas',
            'munic_id' => '52',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Peñitas',
            'munic_id' => '52',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Francisco de Cara',
            'munic_id' => '52',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Taguay',
            'munic_id' => '52',
        ]);
        // Zamora
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Villa de Cura',
            'munic_id' => '53',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Magdaleno',
            'munic_id' => '53',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Augusto Mijares',
            'munic_id' => '53',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Francisco de Asis',
            'munic_id' => '53',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Vales de Tucutunemo',
            'munic_id' => '53',
        ]);
    // Barinas
        // Alberto Arvelo Torrealba
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rodríguez Dominguez',
            'munic_id' => '54',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sabaneta',
            'munic_id' => '54',
        ]);
        // Andrés Eloy Blanco
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Canton',
            'munic_id' => '55',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Puerto Vivas',
            'munic_id' => '55',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Cruz de Guacas',
            'munic_id' => '55',
        ]);
        // Antonio José de Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Andres Bello',
            'munic_id' => '56',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Nicolas Pulido',
            'munic_id' => '56',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ticoporo',
            'munic_id' => '56',
        ]);
        // Arismendi
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Arismendi',
            'munic_id' => '57',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guadarrama',
            'munic_id' => '57',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Union',
            'munic_id' => '57',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Antonio',
            'munic_id' => '57',
        ]);
        // Barinas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Alfredo A Larriva',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Alto Barinas',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Barinas',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Corazón de Jesus',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Dominga Ortiz P',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Carmen',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan A Rodríguez D',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Manuel P Fajardo',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ramon I Mendez',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Romulo Betancourt',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Silvestre',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Ines',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Lucia',
            'munic_id' => '58',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Torunos',
            'munic_id' => '58',
        ]);
        // Bolivar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Altamira',
            'munic_id' => '59',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Barinitas',
            'munic_id' => '59',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Calderas',
            'munic_id' => '59',
        ]);
        // Cruz Paredes
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Barrancas',
            'munic_id' => '60',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Socorro',
            'munic_id' => '60',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Masparrito',
            'munic_id' => '60',
        ]);
        // Ezequiel Zamora
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José Ignacio del Pumar',
            'munic_id' => '61',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pedro Briceño Mendez',
            'munic_id' => '61',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ramon Ignacio Mendez',
            'munic_id' => '61',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Barbara',
            'munic_id' => '61',
        ]);
        // Obispos
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Real',
            'munic_id' => '62',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Luz',
            'munic_id' => '62',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Los Guasimitos',
            'munic_id' => '62',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Obispos',
            'munic_id' => '62',
        ]);
        // Pedraza
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ciudad Bolivia',
            'munic_id' => '63',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ignacio Briceño',
            'munic_id' => '63',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José Felix Ribas',
            'munic_id' => '63',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Paez',
            'munic_id' => '63',
        ]); 
        // Rojas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Dolores',
            'munic_id' => '64',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Libertad',
            'munic_id' => '64',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Palacio Fajardo',
            'munic_id' => '64',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Rosa',
            'munic_id' => '64',
        ]);
        // Sosa
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ciudad de Nutrias',
            'munic_id' => '65',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Regalo',
            'munic_id' => '65',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Puerto de Nutrias',
            'munic_id' => '65',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Catalina',
            'munic_id' => '65',
        ]);
    // Bolivar
        // Caroni
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cachamay',
            'munic_id' => '66',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chirica',
            'munic_id' => '66',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Dalla Costa',
            'munic_id' => '66',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Once de Abril',
            'munic_id' => '66',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pozo Verde',
            'munic_id' => '66',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Simon Bolivar',
            'munic_id' => '66',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Unare',
            'munic_id' => '66',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Universidad',
            'munic_id' => '66',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Vista al Sol',
            'munic_id' => '66',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Yocoima',
            'munic_id' => '66',
        ]);
        // Cedeño
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caicara del Orinoco',
            'munic_id' => '67',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Altagracia',
            'munic_id' => '67',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ascension Farreras',
            'munic_id' => '67',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guaniamo',
            'munic_id' => '67',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Urbana',
            'munic_id' => '67',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pijiguaos',
            'munic_id' => '67',
        ]);
        // El Callao
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Callao',
            'munic_id' => '68',
        ]);
        // Gran Sabana
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Elena de Uairen',
            'munic_id' => '69',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ikabaru',
            'munic_id' => '69',
        ]);
        // Heres
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Agua Salada',
            'munic_id' => '70',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Catedral',
            'munic_id' => '70',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José Antonio Paez',
            'munic_id' => '70',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Sabanita',
            'munic_id' => '70',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Marhuanta',
            'munic_id' => '70',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Orinoco',
            'munic_id' => '70',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Panapana',
            'munic_id' => '70',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Vista Hermosa',
            'munic_id' => '70',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Zea',
            'munic_id' => '70',
        ]);
        // Padre Pedro Chien
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Palmar',
            'munic_id' => '71',
        ]);
        // Piar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Upata',
            'munic_id' => '72',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Andres Eloy Blanco',
            'munic_id' => '72',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pedro Cova',
            'munic_id' => '72',
        ]);
        // Raul Leoni
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ciudad Piar',
            'munic_id' => '73',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Barceloneta',
            'munic_id' => '73',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Francisco',
            'munic_id' => '73',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Barbara',
            'munic_id' => '73',
        ]);
        // Roscio
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guasipati',
            'munic_id' => '74',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Salom',
            'munic_id' => '74',
        ]);
        // Sifontes
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tumeremo',
            'munic_id' => '75',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Dalla Costa',
            'munic_id' => '75',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Isidro',
            'munic_id' => '75',
        ]);
        // Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Maripa',
            'munic_id' => '76',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aripao',
            'munic_id' => '76',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guarataro',
            'munic_id' => '76',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Majadas',
            'munic_id' => '76',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Moitaco',
            'munic_id' => '76',
        ]);
    // Carabobo
        // Bejuma
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bejuma',
            'munic_id' => '77',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Canoabo',
            'munic_id' => '77',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Simon Bolivar',
            'munic_id' => '77',
        ]);
        // Carlos Arvelo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Belen',
            'munic_id' => '78',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guigue',
            'munic_id' => '78',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tacarigua',
            'munic_id' => '78',
        ]);
        // Diego Ibarra
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aguas Calientes',
            'munic_id' => '79',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mariana',
            'munic_id' => '79',
        ]);
        // Guacara
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ciudad Alianza',
            'munic_id' => '80',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guacara',
            'munic_id' => '80',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Yagua',
            'munic_id' => '80',
        ]);
        // Juan Jose Mora
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Moron',
            'munic_id' => '81',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Urama',
            'munic_id' => '81',
        ]);
        // Libertador
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Independencia',
            'munic_id' => '82',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tocuyito',
            'munic_id' => '82',
        ]);
        // Los Guayos
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Los Guayos',
            'munic_id' => '83',
        ]);
        // Miranda
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Miranda',
            'munic_id' => '84',
        ]);
        // Montalbán
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Montalbán',
            'munic_id' => '85',
        ]);
        // Naguanagua
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Naguanagua',
            'munic_id' => '86',
        ]);
        // Puerto Cabello
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bartolome Salom',
            'munic_id' => '87',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Borburata',
            'munic_id' => '87',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Democracia',
            'munic_id' => '87',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Fraternidad',
            'munic_id' => '87',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Goaigoaza',
            'munic_id' => '87',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan José Flores',
            'munic_id' => '87',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Patanemo',
            'munic_id' => '87',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Union',
            'munic_id' => '87',
        ]);
        // San Diego
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Diego',
            'munic_id' => '88',
        ]);
        // San Joaquín
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Joaquín',
            'munic_id' => '89',
        ]);
        // Valencia
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Candelaria',
            'munic_id' => '90',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Catedral',
            'munic_id' => '90',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Socorro',
            'munic_id' => '90',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Miguel Peña',
            'munic_id' => '90',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Negro Primero',
            'munic_id' => '90',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rafael Urdaneta',
            'munic_id' => '90',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Blas',
            'munic_id' => '90',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José',
            'munic_id' => '90',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Rosa',
            'munic_id' => '90',
        ]);
    // Cojedes
        // Anzoátegui
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cojedes',
            'munic_id' => '91',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan de Mata Suarez',
            'munic_id' => '91',
        ]);
        // Falcón
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tinaquillo',
            'munic_id' => '92',
        ]);
        // Girardot
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Baul',
            'munic_id' => '93',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sucre',
            'munic_id' => '93',
        ]);
        // Lima Blanco
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Aguadita',
            'munic_id' => '94',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Macapo',
            'munic_id' => '94',
        ]);
        // Pao de San Juan Bautista
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Pao',
            'munic_id' => '95',
        ]);
        // Ricaurte
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Amparo',
            'munic_id' => '96',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Libertad de Cojedes',
            'munic_id' => '96',
        ]);
        // Rómulo Gallegos
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Romulo Gallegos',
            'munic_id' => '97',
        ]);
        // San Carlos
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan Angel Bravo',
            'munic_id' => '98',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Manuel Manrique',
            'munic_id' => '98',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Carlos de Austria',
            'munic_id' => '98',
        ]);
        // Tinaco
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José L. Silva',
            'munic_id' => '99',
        ]);
    // Delta Amacuro
        // Antonio Díaz
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Almirante Luis Brion',
            'munic_id' => '100',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aniceto Lugo',
            'munic_id' => '100',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Curiapo',
            'munic_id' => '100',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Manuel Renaud',
            'munic_id' => '100',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Padre Barral',
            'munic_id' => '100',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santos de Abelgas',
            'munic_id' => '100',
        ]);
        // Casacoima
        DB::table('parroquias')->insert([
            'nom_parroq' => '5 de Julio',
            'munic_id' => '101',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Imataca',
            'munic_id' => '101',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan Bautista Arismendi',
            'munic_id' => '101',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Manuel Piar',
            'munic_id' => '101',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Romulo Gallegos',
            'munic_id' => '101',
        ]);
        // Pedernales
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Luis B Prieto Figuero',
            'munic_id' => '102',
        ]);DB::table('parroquias')->insert([
            'nom_parroq' => 'Pedernales',
            'munic_id' => '102',
        ]);
        // Tucupita
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José Vidal Marcano',
            'munic_id' => '103',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan Millan',
            'munic_id' => '103',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Leonardo Ruiz Pineda',
            'munic_id' => '103',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Antonio José de Sucre',
            'munic_id' => '103',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Argimiro Garcia',
            'munic_id' => '103',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José',
            'munic_id' => '103',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Rafael',
            'munic_id' => '103',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Virgen del Valle',
            'munic_id' => '103',
        ]);
    // Distrito Capital
        // Libertador
        DB::table('parroquias')->insert([
            'nom_parroq' => '23 de enero',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Altagracia',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Antímano',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Candelaria',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caricuao',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Catedral',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Coche',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Junquito',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Paraíso',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Recreo',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Valle',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Pastora',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Vega',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Macarao',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Agustín',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Bernardino',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Juan',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Pedro',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Rosalia',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Teresa',
            'munic_id' => '104',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sucre',
            'munic_id' => '104',
        ]);
    // Falcón
        // Acosta
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Capadare',
            'munic_id' => '105',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Pastora',
            'munic_id' => '105',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Libertador',
            'munic_id' => '105',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Juan de los Cayos',
            'munic_id' => '105',
        ]);
        // Bolívar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aracua',
            'munic_id' => '106',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Peña',
            'munic_id' => '106',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Luis',
            'munic_id' => '106',
        ]);
        // Buchivacoa
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bariro',
            'munic_id' => '107',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Borojo',
            'munic_id' => '107',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Capatarida',
            'munic_id' => '107',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guajiro',
            'munic_id' => '107',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Seque',
            'munic_id' => '107',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Zazarida',
            'munic_id' => '107',
        ]);
        // Cacique Manaure
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Yaracal',
            'munic_id' => '108',
        ]);
        // Carirubana
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Carirubana',
            'munic_id' => '109',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Norte',
            'munic_id' => '109',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Punta Cardon',
            'munic_id' => '109',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Ana',
            'munic_id' => '109',
        ]);
        // Colina
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Acurigua',
            'munic_id' => '110',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guaibacoa',
            'munic_id' => '110',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Calderas',
            'munic_id' => '110',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Vela de Coro',
            'munic_id' => '110',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Macoruca',
            'munic_id' => '110',
        ]);
        // Dabajuro
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Dabajuro',
            'munic_id' => '111',
        ]);
        // Democracia
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Agua Clara',
            'munic_id' => '112',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Avaria',
            'munic_id' => '112',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pedregal',
            'munic_id' => '112',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Piedra Grande',
            'munic_id' => '112',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Purureche',
            'munic_id' => '112',
        ]);
        // Falcón
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Adaure',
            'munic_id' => '113',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Adicora',
            'munic_id' => '113',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Baraived',
            'munic_id' => '113',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Buena Vista',
            'munic_id' => '113',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Hato',
            'munic_id' => '113',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Vinculo',
            'munic_id' => '113',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Jadacaquiva',
            'munic_id' => '113',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Moruy',
            'munic_id' => '113',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pueblo Nuevo',
            'munic_id' => '113',
        ]);
        // Federación
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Agua Larga',
            'munic_id' => '114',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Churuguara',
            'munic_id' => '114',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Pauji',
            'munic_id' => '114',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Independencia',
            'munic_id' => '114',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Maparari',
            'munic_id' => '114',
        ]);
        // Jacura
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Agua Linda',
            'munic_id' => '115',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Araurima',
            'munic_id' => '115',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Jacura',
            'munic_id' => '115',
        ]);
        // Los Taques
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Judibana',
            'munic_id' => '116',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Los Taques',
            'munic_id' => '116',
        ]);
        // Mauroa
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Casigua',
            'munic_id' => '117',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mene de Mauroa',
            'munic_id' => '117',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Felix',
            'munic_id' => '117',
        ]);
        // Miranda
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guzman Guillermo',
            'munic_id' => '118',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mitare',
            'munic_id' => '118',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rio Seco',
            'munic_id' => '118',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sabaneta',
            'munic_id' => '118',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Antonio',
            'munic_id' => '118',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Gabriel',
            'munic_id' => '118',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Ana',
            'munic_id' => '118',
        ]);
        // Mons. Iturriza
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Boca de Tocuyo',
            'munic_id' => '119',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chichiriviche',
            'munic_id' => '119',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tocuyo de la Costa',
            'munic_id' => '119',
        ]);
        // Palma sola
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Palma Sola',
            'munic_id' => '120',
        ]);
        // Petit
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cabure',
            'munic_id' => '121',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Colina',
            'munic_id' => '121',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Curimagua',
            'munic_id' => '121',
        ]);
        // Píritu
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Píritu',
            'munic_id' => '122',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José de la Costa',
            'munic_id' => '122',
        ]);
        // San Francisco
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mirimire',
            'munic_id' => '123',
        ]);
        // Silva
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Boca de Aroa',
            'munic_id' => '124',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tucacas',
            'munic_id' => '124',
        ]);
        // Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pecaya',
            'munic_id' => '125',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sucre',
            'munic_id' => '125',
        ]);
        // Tocópero
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tocópero',
            'munic_id' => '126',
        ]);
        // Unión
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Charal',
            'munic_id' => '127',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Vegas del Tuy',
            'munic_id' => '127',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Cruz de Bucaral',
            'munic_id' => '127',
        ]);
        // Urumaco
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bruzual',
            'munic_id' => '128',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Urumaco',
            'munic_id' => '128',
        ]);
        // Zamora
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Cienaga',
            'munic_id' => '129',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Soledad',
            'munic_id' => '129',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pueblo Cumarebo',
            'munic_id' => '129',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Puerto Cumarebo',
            'munic_id' => '129',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Zazarida',
            'munic_id' => '129',
        ]);
    // Guárico
        // Camaguán
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Camaguán',
            'munic_id' => '130',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Puerto Miranda',
            'munic_id' => '130',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Uverito',
            'munic_id' => '130',
        ]);
        // Chaguaramas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chaguaramas',
            'munic_id' => '131',
        ]);
        // El Socorro
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Socorro',
            'munic_id' => '132',
        ]);
        // Infante
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Espino',
            'munic_id' => '133',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Valle de la Pascua',
            'munic_id' => '133',
        ]);
        // Las Mercedes
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cabruta',
            'munic_id' => '134',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Mercedes',
            'munic_id' => '134',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Rita de Manapire',
            'munic_id' => '134',
        ]);
        // Mellado
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Sombrero',
            'munic_id' => '135',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sosa',
            'munic_id' => '135',
        ]);
        // Miranda
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Calabozo',
            'munic_id' => '136',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Calvario',
            'munic_id' => '136',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Rastro',
            'munic_id' => '136',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guardatinajas',
            'munic_id' => '136',
        ]);
        // Monagas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Altagracia de Orituco',
            'munic_id' => '137',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Lezama',
            'munic_id' => '137',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Libertad de Orituco',
            'munic_id' => '137',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Paso Real de Macaira',
            'munic_id' => '137',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Francisco de Macaira',
            'munic_id' => '137',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Rafael de Orituco',
            'munic_id' => '137',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Soublette',
            'munic_id' => '137',
        ]);
        // Ortiz
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ortiz',
            'munic_id' => '138',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Francisco de Tiznados',
            'munic_id' => '138',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José de Tiznados',
            'munic_id' => '138',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Lorenzo de Tiznados',
            'munic_id' => '138',
        ]);
        // Ribas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Rafael de Laya',
            'munic_id' => '139',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tucupido',
            'munic_id' => '139',
        ]);
        // Roscio
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cantagallo',
            'munic_id' => '140',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Parapara',
            'munic_id' => '140',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Juan de los Morros',
            'munic_id' => '140',
        ]);
        // San Gerónimo de Guayabal
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cazorla',
            'munic_id' => '141',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guayabal',
            'munic_id' => '141',
        ]);
        // San José de Guaribe
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José de Guaribe',
            'munic_id' => '142',
        ]);
        // Santa María de Ipire
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Altamira',
            'munic_id' => '143',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa María de Ipire',
            'munic_id' => '143',
        ]);
        // Zaraza
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José de Unare',
            'munic_id' => '144',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Zaraza',
            'munic_id' => '144',
        ]);
    // Lara
        // Andrés Eloy Blanco
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pio Tamayo',
            'munic_id' => '145',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Honda de Guache',
            'munic_id' => '145',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Yacambu',
            'munic_id' => '145',
        ]);
        // Crespo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Freitez',
            'munic_id' => '146',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José María Blanco',
            'munic_id' => '146',
        ]);
        // Iribarren
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aguedo F. Alvarado',
            'munic_id' => '147',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Buena Vista',
            'munic_id' => '147',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Catedral',
            'munic_id' => '147',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Cuji',
            'munic_id' => '147',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan de Villegas',
            'munic_id' => '147',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juarez',
            'munic_id' => '147',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Concepcion',
            'munic_id' => '147',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Rosa',
            'munic_id' => '147',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tamaca',
            'munic_id' => '147',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Unión',
            'munic_id' => '147',
        ]);
        // Jiménez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Crnel. Mariano Peraza',
            'munic_id' => '148',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cuara',
            'munic_id' => '148',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Diego de Lozada',
            'munic_id' => '148',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José Bernardo Dorante',
            'munic_id' => '148',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan B. Rodríguez',
            'munic_id' => '148',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Paraíso de San José',
            'munic_id' => '148',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Miguel',
            'munic_id' => '148',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tintorero',
            'munic_id' => '148',
        ]);
        // Morán
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Anzoátegui',
            'munic_id' => '149',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bolivar',
            'munic_id' => '149',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guárico',
            'munic_id' => '149',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Hilario Luna y Luna',
            'munic_id' => '149',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Humocaro Alto',
            'munic_id' => '149',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Humocaro Bajo',
            'munic_id' => '149',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Candelaria',
            'munic_id' => '149',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Morán',
            'munic_id' => '149',
        ]);
        // Palavecino
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Agua Viva',
            'munic_id' => '150',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cabudare',
            'munic_id' => '150',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José G. Bastidas',
            'munic_id' => '150',
        ]);
        // Simón Planas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Buria',
            'munic_id' => '151',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Gustavo Vegas Leon',
            'munic_id' => '151',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sarare',
            'munic_id' => '151',
        ]);
        // Torres
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Altagracia',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Antonio Díaz',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Camacaro',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Castañeda',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cecilio Zubillaga',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chiquinquira',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Blanco',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Espinoza los Monteros',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Heriberto Arroyo',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Lara',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Mercedes',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Manuel Morillo',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Monta A. Verde',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Montes de Oca',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Reyes Vargas',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Torres',
            'munic_id' => '152',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Trinidad Samuel',
            'munic_id' => '152',
        ]);
        // Urdaneta
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Moroturo',
            'munic_id' => '153',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Miguel',
            'munic_id' => '153',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Siquisique',
            'munic_id' => '153',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Xaguas',
            'munic_id' => '153',
        ]);
    // Mérida
        // Alberto Adriani
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Gabriel Picon G.',
            'munic_id' => '154',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Hector Amable Mora',
            'munic_id' => '154',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José Nucete Sardi',
            'munic_id' => '154',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Presidente Betancourt',
            'munic_id' => '154',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Presidente Paez',
            'munic_id' => '154',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Presidente Romulo Gallegos',
            'munic_id' => '154',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pulido Mendez',
            'munic_id' => '154',
        ]);
        // Andrés Bello
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Azulita',
            'munic_id' => '155',
        ]);
        // Antonio Pinto Salinas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Cruz de Mora',
            'munic_id' => '156',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mesa Bolivar',
            'munic_id' => '156',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mesa de las Palmas',
            'munic_id' => '156',
        ]);
        // Aricagua
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aricagua',
            'munic_id' => '157',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Antonio',
            'munic_id' => '157',
        ]);
        // Arzobispo Chacón
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Canagua',
            'munic_id' => '158',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Capuri',
            'munic_id' => '158',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chacanta',
            'munic_id' => '158',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Molino',
            'munic_id' => '158',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guaimaral',
            'munic_id' => '158',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mucuchachi',
            'munic_id' => '158',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mucutuy',
            'munic_id' => '158',
        ]);
        // Campo Elías
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Acequias',
            'munic_id' => '159',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Fernandez Peña',
            'munic_id' => '159',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Jaji',
            'munic_id' => '159',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Mesa',
            'munic_id' => '159',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Matriz',
            'munic_id' => '159',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Montalbán',
            'munic_id' => '159',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José',
            'munic_id' => '159',
        ]);
        // Caracciolo Parra
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tucani',
            'munic_id' => '160',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Florencio Ramirez',
            'munic_id' => '160',
        ]);
        // Cardenal Quintero
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santo Domingo',
            'munic_id' => '161',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Piedras',
            'munic_id' => '161',
        ]);
        // Guaraque
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guaraque',
            'munic_id' => '162',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mesa de Quintero',
            'munic_id' => '162',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rio Negro',
            'munic_id' => '162',
        ]);
        // Julio Cesar Salas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Arapuey',
            'munic_id' => '163',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Palmira',
            'munic_id' => '163',
        ]);
        // Justo Briceño
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Torondoy',
            'munic_id' => '164',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Cristobal de T.',
            'munic_id' => '164',
        ]);
        // Libertador
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Antonio Spinetti Dini',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Arias',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caracciolo Parra P.',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Domingo Peña',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Llano',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Morro',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Gonzalo Picon Febres',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Jacinto Plaza',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan Rodríguez Suarez',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Lasso de la Vega',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Los Nevados',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mariano Picon Salas',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Milla',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Osuna Rodríguez',
            'munic_id' => '165',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sagrario',
            'munic_id' => '165',
        ]);
        // Miranda
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Timotes',
            'munic_id' => '166',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Andrés Eloy Blanco',
            'munic_id' => '166',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Venta',
            'munic_id' => '166',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Piñango',
            'munic_id' => '166',
        ]);
        // Ramos de Lora
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Elena de Arenales',
            'munic_id' => '167',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Eloy Paredes',
            'munic_id' => '167',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Rafael de Alcázar',
            'munic_id' => '167',
        ]);
        // Padre Noguera
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa María de Caparo',
            'munic_id' => '168',
        ]);
        // Pueblo Llano
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pueblo Llano',
            'munic_id' => '169',
        ]);
        // Rangel
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cacute',
            'munic_id' => '170',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Toma',
            'munic_id' => '170',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mucuchies',
            'munic_id' => '170',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mucuruba',
            'munic_id' => '170',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Rafael',
            'munic_id' => '170',
        ]);
        // Rivas Dávila
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bailadores',
            'munic_id' => '171',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Gerónimo Maldonado',
            'munic_id' => '171',
        ]);
        // Santos Marquina
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tabay',
            'munic_id' => '172',
        ]);
        // Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chiguara',
            'munic_id' => '173',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Estanques',
            'munic_id' => '173',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Trampa',
            'munic_id' => '173',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Lagunillas',
            'munic_id' => '173',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pueblo Nuevo del Sur',
            'munic_id' => '173',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Juan',
            'munic_id' => '173',
        ]);
        // Tovar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Amparo',
            'munic_id' => '174',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Llano',
            'munic_id' => '174',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Francisco',
            'munic_id' => '174',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tovar',
            'munic_id' => '174',
        ]);
        // Tulio Febres Cordero
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Nueva Bolivia',
            'munic_id' => '175',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Independencia',
            'munic_id' => '175',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Maria C. Palacios',
            'munic_id' => '175',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Apolonia',
            'munic_id' => '175',
        ]);
        // Zea
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Zea',
            'munic_id' => '176',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caño el Tigre',
            'munic_id' => '176',
        ]);
    // Miranda
        // Acevedo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Araguita',
            'munic_id' => '177',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Arevalo Gonzalez',
            'munic_id' => '177',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Capaya',
            'munic_id' => '177',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caucagua',
            'munic_id' => '177',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Cafe',
            'munic_id' => '177',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Marizapa',
            'munic_id' => '177',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Panaquire',
            'munic_id' => '177',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ribas',
            'munic_id' => '177',
        ]);
        // Andrés Bello
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cumbo',
            'munic_id' => '178',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José de Barlovento',
            'munic_id' => '178',
        ]);
        // Baruta
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Baruta',
            'munic_id' => '179',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Cafetal',
            'munic_id' => '179',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Minas de Baruta',
            'munic_id' => '179',
        ]);
        // Brión
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Curiepe',
            'munic_id' => '180',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Higuerote',
            'munic_id' => '180',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tacarigua',
            'munic_id' => '180',
        ]);
        // Buroz
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mamporal',
            'munic_id' => '181',
        ]);
        // Carrizal
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Carrizal',
            'munic_id' => '182',
        ]);
        // Chacao
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chacao',
            'munic_id' => '183',
        ]);
        // Cristóbal Rojas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Charallave',
            'munic_id' => '184',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Brisas',
            'munic_id' => '184',
        ]);
        // El Hatillo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Hatillo',
            'munic_id' => '185',
        ]);
        // Guaicaipuro
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Altagracia de la Montaña',
            'munic_id' => '186',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cecilio Acosta',
            'munic_id' => '186',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Jarillo',
            'munic_id' => '186',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Los Teques',
            'munic_id' => '186',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Paracotos',
            'munic_id' => '186',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Pedro',
            'munic_id' => '186',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tacata',
            'munic_id' => '186',
        ]);
        // Independencia
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Cartanal',
            'munic_id' => '187',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Teresa del Tuy',
            'munic_id' => '187',
        ]);
        // Lander
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Democracia',
            'munic_id' => '188',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ocumare del Tuy',
            'munic_id' => '188',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Barbara',
            'munic_id' => '188',
        ]);
        // Los Salias
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Antonio de los Altos',
            'munic_id' => '189',
        ]);
        // Páez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Guapo',
            'munic_id' => '190',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Paparo',
            'munic_id' => '190',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rio Chico',
            'munic_id' => '190',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Fernando del Guapo',
            'munic_id' => '190',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tacarigua de la Laguna',
            'munic_id' => '190',
        ]);
        // Paz Castillo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Lucia',
            'munic_id' => '191',
        ]);
        // Pedro Gual
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cupira',
            'munic_id' => '192',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Machurucuto',
            'munic_id' => '192',
        ]);
        // Plaza
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guarenas',
            'munic_id' => '193',
        ]);
        // Simón Bolívar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Francisco de Yare',
            'munic_id' => '194',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Antonio de Yare',
            'munic_id' => '194',
        ]);
        // Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caucaguita',
            'munic_id' => '195',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Filas de Mariches',
            'munic_id' => '195',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Dolorita',
            'munic_id' => '195',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Leoncio Martinez',
            'munic_id' => '195',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Petare',
            'munic_id' => '195',
        ]);
        // Urdaneta
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cua',
            'munic_id' => '196',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Nueva Cua',
            'munic_id' => '196',
        ]);
        // Zamora
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bolivar',
            'munic_id' => '197',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guatire',
            'munic_id' => '197',
        ]);
    // Monagas
        // Acosta
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Antonio',
            'munic_id' => '198',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Francisco',
            'munic_id' => '198',
        ]);
        // Aguasay
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aguasay',
            'munic_id' => '199',
        ]);
        // Bolívar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caripito',
            'munic_id' => '200',
        ]);
        // Caripe
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caripe',
            'munic_id' => '201',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Guacharo',
            'munic_id' => '201',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Guanota',
            'munic_id' => '201',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sabana de Piedra',
            'munic_id' => '201',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Agustín',
            'munic_id' => '201',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Teresen',
            'munic_id' => '201',
        ]);
        // Cedeño
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caicara',
            'munic_id' => '202',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Areo',
            'munic_id' => '202',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Felix',
            'munic_id' => '202',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Viento Fresco',
            'munic_id' => '202',
        ]);
        // Ezequiel Zamora
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Punta de Mata',
            'munic_id' => '203',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Tejero',
            'munic_id' => '203',
        ]);
        // Libertador
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chaguaramas',
            'munic_id' => '204',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Alhuacas',
            'munic_id' => '204',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tabasca',
            'munic_id' => '204',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Temblador',
            'munic_id' => '204',
        ]);
        // Maturín
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Alto de los Godos',
            'munic_id' => '205',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Boqueron',
            'munic_id' => '205',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Corozo',
            'munic_id' => '205',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Furrial',
            'munic_id' => '205',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Jusepin',
            'munic_id' => '205',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Pica',
            'munic_id' => '205',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Cocuizas',
            'munic_id' => '205',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Simon',
            'munic_id' => '205',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Cruz',
            'munic_id' => '205',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Vicente',
            'munic_id' => '205',
        ]);
        // Piar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aragua',
            'munic_id' => '206',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aparicio',
            'munic_id' => '206',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chaguaramal',
            'munic_id' => '206',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Pinto',
            'munic_id' => '206',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guanaguana',
            'munic_id' => '206',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Toscana',
            'munic_id' => '206',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Taguaya',
            'munic_id' => '206',
        ]);
        // Punceres
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cachipo',
            'munic_id' => '207',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Quiriquire',
            'munic_id' => '207',
        ]);
        // Santa Bárbara
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Bárbara',
            'munic_id' => '208',
        ]);
        // Sotillo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Barrancas',
            'munic_id' => '209',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Los Barrancos de Fajardo',
            'munic_id' => '209',
        ]);
        // Uracoa
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Uracoa',
            'munic_id' => '210',
        ]);
    // Nueva Esparta
        // Antolín del Campo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Plaza de Paraguachi',
            'munic_id' => '211',
        ]);
        // Arismendi
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Asunción',
            'munic_id' => '212',
        ]);
        // Díaz
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Juan Bautista',
            'munic_id' => '213',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Zabala',
            'munic_id' => '213',
        ]);
        // García
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Valle Esp Santo',
            'munic_id' => '214',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Francisco Fajardo',
            'munic_id' => '214',
        ]);
        // Gómez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Ana',
            'munic_id' => '215',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bolivar',
            'munic_id' => '215',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guevara',
            'munic_id' => '215',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Matasiete',
            'munic_id' => '215',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sucre',
            'munic_id' => '215',
        ]);
        // Maneiro
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aguairre',
            'munic_id' => '216',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pampatar',
            'munic_id' => '216',
        ]);
        // Marcano
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan Griego',
            'munic_id' => '217',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Adrian',
            'munic_id' => '217',
        ]);
        // Mariño
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Porlamar',
            'munic_id' => '218',
        ]);
        // Península de Macanao
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Boca del Rio',
            'munic_id' => '219',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Francisco',
            'munic_id' => '219',
        ]);
        // Tubores
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Punta de Piedras',
            'munic_id' => '220',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Los Barales',
            'munic_id' => '220',
        ]);
        // Villalba
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Pedro de Coche',
            'munic_id' => '221',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Vicente Fuentes',
            'munic_id' => '221',
        ]);
    // Portuguesa
        // Agua Blanca
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Agua Blanca',
            'munic_id' => '222',
        ]);
        // Araure
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Araure',
            'munic_id' => '223',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rio Acarigua',
            'munic_id' => '223',
        ]);
        // Esteller
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Piritu',
            'munic_id' => '224',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Uveral',
            'munic_id' => '224',
        ]);
        // Guanare
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guanare',
            'munic_id' => '225',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cordoba',
            'munic_id' => '225',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José de la Montaña',
            'munic_id' => '225',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Juan Guanaguanare',
            'munic_id' => '225',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Virgen de la Coromoto',
            'munic_id' => '225',
        ]);
        // Guanarito
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Divina Pastora',
            'munic_id' => '226',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guanarito',
            'munic_id' => '226',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Trinidad de la Capilla',
            'munic_id' => '226',
        ]);
        // José V. de Unda
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chabasquen',
            'munic_id' => '227',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Peña Blanca',
            'munic_id' => '227',
        ]);
        // Ospino
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aparición',
            'munic_id' => '228',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Estación',
            'munic_id' => '228',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ospino',
            'munic_id' => '228',
        ]);
        // Páez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Acarigua',
            'munic_id' => '229',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Payara',
            'munic_id' => '229',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pimpinela',
            'munic_id' => '229',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ramon Peraza',
            'munic_id' => '229',
        ]);
        // Papelón
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caño Delgadito',
            'munic_id' => '230',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Papelón',
            'munic_id' => '230',
        ]);
        // San Genaro de Boconoíto
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Antolín Tovar Aquino',
            'munic_id' => '231',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Boconoíto',
            'munic_id' => '231',
        ]);
        // San Rafael de Onoto
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Rafael de Onoto',
            'munic_id' => '232',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Fe',
            'munic_id' => '232',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Thermo Morles',
            'munic_id' => '232',
        ]);
        // Santa Rosalía
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Playon',
            'munic_id' => '233',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Florida',
            'munic_id' => '233',
        ]);
        // Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Biscucuy',
            'munic_id' => '234',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Concepcion',
            'munic_id' => '234',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José de Saguaz',
            'munic_id' => '234',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Rafael Palo Alzado',
            'munic_id' => '234',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Uvencio A. Velasquez',
            'munic_id' => '234',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Villa Rosa',
            'munic_id' => '234',
        ]);
        // Turén
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Canelones',
            'munic_id' => '235',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Isidro Labrador',
            'munic_id' => '235',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Cruz',
            'munic_id' => '235',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Villa Bruzual',
            'munic_id' => '235',
        ]);
    // Sucre
        // Andrés Eloy Blanco
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mariño',
            'munic_id' => '236',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Romulo Gallegos',
            'munic_id' => '236',
        ]);
        // Andrés Mata
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José de Aerocuar',
            'munic_id' => '237',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tavera Acosta',
            'munic_id' => '237',
        ]);
        // Arismendi
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Antonio José de Sucre',
            'munic_id' => '238',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Morro de Puerto Santo',
            'munic_id' => '238',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Puerto Santo',
            'munic_id' => '238',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rio Caribe',
            'munic_id' => '238',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Juan Galdonas',
            'munic_id' => '238',
        ]);
        // Benítez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Pilar',
            'munic_id' => '239',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Ricon',
            'munic_id' => '239',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'General Francisco Antonio Vaquez',
            'munic_id' => '239',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guaraúnos',
            'munic_id' => '239',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tunapuicito',
            'munic_id' => '239',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Unión',
            'munic_id' => '239',
        ]);
        // Bermúdez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bolivar',
            'munic_id' => '240',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Macarapana',
            'munic_id' => '240',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Catalina',
            'munic_id' => '240',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Rosa',
            'munic_id' => '240',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Teresa',
            'munic_id' => '240',
        ]);
        // Bolívar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mariguitar',
            'munic_id' => '241',
        ]);
        // Cajigal
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Libertad',
            'munic_id' => '242',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Paujil',
            'munic_id' => '242',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Yaguaraparo',
            'munic_id' => '242',
        ]);
        // Cruz Salmerón Acosta
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Araya',
            'munic_id' => '243',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chacopata',
            'munic_id' => '243',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Manicuare',
            'munic_id' => '243',
        ]);
        // Libertador
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Campo Elías',
            'munic_id' => '244',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tunapuy',
            'munic_id' => '244',
        ]);
        // Mariño
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Campo Claro',
            'munic_id' => '245',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Irapa',
            'munic_id' => '245',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Marabal',
            'munic_id' => '245',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Antonio de Irapa',
            'munic_id' => '245',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Soro',
            'munic_id' => '245',
        ]);
        // Mejía
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Ant del Golfo',
            'munic_id' => '246',
        ]);
        // Montes
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Arenas',
            'munic_id' => '247',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aricagua',
            'munic_id' => '247',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cocollar',
            'munic_id' => '247',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cumanacoa',
            'munic_id' => '247',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Fernando',
            'munic_id' => '247',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Lorenzo',
            'munic_id' => '247',
        ]);
        // Ribero
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cariaco',
            'munic_id' => '248',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Catuaro',
            'munic_id' => '248',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rendón',
            'munic_id' => '248',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Cruz',
            'munic_id' => '248',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa María',
            'munic_id' => '248',
        ]);
        // Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Altagracia',
            'munic_id' => '249',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ayacucho',
            'munic_id' => '249',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Gran Mariscal',
            'munic_id' => '249',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Raúl Leoni',
            'munic_id' => '249',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Juan',
            'munic_id' => '249',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Inés',
            'munic_id' => '249',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Valentín Valiente',
            'munic_id' => '249',
        ]);
        // Valdez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bideau',
            'munic_id' => '250',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cristóbal Colón',
            'munic_id' => '250',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Güiria',
            'munic_id' => '250',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Punta de Piedra',
            'munic_id' => '250',
        ]);
    // Táchira
        // Andrés Bello
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cordero',
            'munic_id' => '251',
        ]);
        // Antonio Rómulo Costa
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Mesas',
            'munic_id' => '252',
        ]);
        // Ayacucho
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Colón',
            'munic_id' => '253',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rivas Berti',
            'munic_id' => '253',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Pedro del Río',
            'munic_id' => '253',
        ]);
        // Bolívar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Isaías Medina Angarita',
            'munic_id' => '254',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan Vicente Gómez',
            'munic_id' => '254',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Palotal',
            'munic_id' => '254',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Antonio del Táchira',
            'munic_id' => '254',
        ]);
        // Cárdenas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Amenodoro Ángel Lamus',
            'munic_id' => '255',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Florida',
            'munic_id' => '255',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tariba',
            'munic_id' => '255',
        ]);
        // Córdoba
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Ana del Táchira',
            'munic_id' => '256',
        ]);
        // Francisco de Miranda
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José de Bolivar',
            'munic_id' => '257',
        ]);
        // Fernández Feo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Alberto Adriani',
            'munic_id' => '258',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Rafael del Pinal',
            'munic_id' => '258',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santo Domingo',
            'munic_id' => '258',
        ]);
        // Garcia Hevia
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Boca de Grita',
            'munic_id' => '259',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José Antonio Páez',
            'munic_id' => '259',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Fria',
            'munic_id' => '259',
        ]);
        // Guásimos
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Palmira',
            'munic_id' => '260',
        ]);
        // Independencia
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Capacho Nuevo',
            'munic_id' => '261',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan Germán Roscio',
            'munic_id' => '261',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Román Cárdenas',
            'munic_id' => '261',
        ]);
        // Jáuregui
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Emilio Constantino Guerrero',
            'munic_id' => '262',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Grita',
            'munic_id' => '262',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Monseñor Miguel Antonio Salas',
            'munic_id' => '262',
        ]);
        // José María Vargas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Cobre',
            'munic_id' => '263',
        ]);
        // Junín
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bramón',
            'munic_id' => '264',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Petrólea',
            'munic_id' => '264',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rubio',
            'munic_id' => '264',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Quinimarí',
            'munic_id' => '264',
        ]);
        // Libertad
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Capacho Viejo',
            'munic_id' => '265',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cipriano Castro',
            'munic_id' => '265',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Manuel Felipe Rugeles',
            'munic_id' => '265',
        ]);
        // Libertador
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Abejales',
            'munic_id' => '266',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Doradas',
            'munic_id' => '266',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Emeterio Ochoa',
            'munic_id' => '266',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Joaquín de Navay',
            'munic_id' => '266',
        ]);
        // Lobatera
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Constitución',
            'munic_id' => '267',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Lobatera',
            'munic_id' => '267',
        ]);
        // Michelena
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Michelena',
            'munic_id' => '268',
        ]);
        // Panamericano
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Coloncito',
            'munic_id' => '269',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Palmita',
            'munic_id' => '269',
        ]);
        // Pedro María Ureña
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ureña',
            'munic_id' => '270',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Nueva Arcadia',
            'munic_id' => '270',
        ]);
        // Rafael Urdaneta
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Delicias',
            'munic_id' => '271',
        ]);
        // Samuel Maldonado
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Tiendita',
            'munic_id' => '272',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Boconó',
            'munic_id' => '272',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Hernández',
            'munic_id' => '272',
        ]);
        // San Cristóbal
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Dr. Francisco Romero Lobo',
            'munic_id' => '273',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Concordia',
            'munic_id' => '273',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pedro María Morantes',
            'munic_id' => '273',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Juan Bautista',
            'munic_id' => '273',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Sebastián',
            'munic_id' => '273',
        ]);
        // San Judas Tadeo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Umuquena',
            'munic_id' => '274',
        ]);
        // Seboruco
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Seboruco',
            'munic_id' => '275',
        ]);
        // Simón Rodríguez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Simón',
            'munic_id' => '276',
        ]);
        // Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Eleazar López Contreras',
            'munic_id' => '277',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Pablo',
            'munic_id' => '277',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Queniquea',
            'munic_id' => '277',
        ]);
        // Torbes
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Josecito',
            'munic_id' => '278',
        ]);
        // Uribante
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cárdenas',
            'munic_id' => '279',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan Pablo Peñalosa',
            'munic_id' => '279',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Potosí',
            'munic_id' => '279',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pregonero',
            'munic_id' => '279',
        ]);
    // Trujillo
        // Andrés Bello
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Araguaney',
            'munic_id' => '280',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Jaguito',
            'munic_id' => '280',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Esperanza',
            'munic_id' => '280',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Isabel',
            'munic_id' => '280',
        ]);
        // Boconó
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ayacucho',
            'munic_id' => '281',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Boconó',
            'munic_id' => '281',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Burbusay',
            'munic_id' => '281',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Carmen',
            'munic_id' => '281',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'General Rivas',
            'munic_id' => '281',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guaramacal',
            'munic_id' => '281',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Vega de Guaramacal',
            'munic_id' => '281',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Monseñor Jauregui',
            'munic_id' => '281',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mosquey',
            'munic_id' => '281',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rafael Rangel',
            'munic_id' => '281',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José',
            'munic_id' => '281',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Miguel',
            'munic_id' => '281',
        ]);
        // Bolívar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cheregue',
            'munic_id' => '282',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Granados',
            'munic_id' => '282',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sabana Grande',
            'munic_id' => '282',
        ]);
        // Candelaria
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Arnoldo Gabaldon',
            'munic_id' => '283',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bolivia',
            'munic_id' => '283',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Carrillo',
            'munic_id' => '283',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cegarra',
            'munic_id' => '283',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chejende',
            'munic_id' => '283',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Manuel Salvador Ulloa',
            'munic_id' => '283',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José',
            'munic_id' => '283',
        ]);
        // Carache
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Carache',
            'munic_id' => '284',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cuicas',
            'munic_id' => '284',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Concepcion',
            'munic_id' => '284',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Panamericana',
            'munic_id' => '284',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Cruz',
            'munic_id' => '284',
        ]);
        // Escuque
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Escuque',
            'munic_id' => '285',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Unión',
            'munic_id' => '285',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sabana Libre',
            'munic_id' => '285',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Rita',
            'munic_id' => '285',
        ]);
        // José Felipe Márquez Cañizalez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Antonio José de Sucre',
            'munic_id' => '286',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Socorro',
            'munic_id' => '286',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Los Caprichos',
            'munic_id' => '286',
        ]);
        // Juan Vicente Campos Elías
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Arnoldo Gabaldon',
            'munic_id' => '287',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Campo Elías',
            'munic_id' => '287',
        ]);
        // La Ceiba
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Progreso',
            'munic_id' => '288',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Ceiba',
            'munic_id' => '288',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Apolonia',
            'munic_id' => '288',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tres de Febrero',
            'munic_id' => '288',
        ]);
        // Miranda
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Agua Caliente',
            'munic_id' => '289',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Agua Santa',
            'munic_id' => '289',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Cenizo',
            'munic_id' => '289',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Dividive',
            'munic_id' => '289',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Valerita',
            'munic_id' => '289',
        ]);
        // Monte Carmelo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Buena Vista',
            'munic_id' => '290',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Monte Carmelo',
            'munic_id' => '290',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa María del Horcón',
            'munic_id' => '290',
        ]);
        // Motatán
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Baño',
            'munic_id' => '291',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Jalisco',
            'munic_id' => '291',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Motatán',
            'munic_id' => '291',
        ]);
        // Pampán
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Flor de Patria',
            'munic_id' => '292',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Paz',
            'munic_id' => '292',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pampán',
            'munic_id' => '292',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Ana',
            'munic_id' => '292',
        ]);
        // Pampanito
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Concepción',
            'munic_id' => '293',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pampanito',
            'munic_id' => '293',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pampanito II',
            'munic_id' => '293',
        ]);
        // Rafael Rangel
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Betijoque',
            'munic_id' => '294',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Cedro',
            'munic_id' => '294',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José Gregorio Hernández',
            'munic_id' => '294',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Pueblita',
            'munic_id' => '294',
        ]);
        // San Rafael de Carvajal
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Antonio Nicolás Briceño',
            'munic_id' => '295',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Campo Alegre',
            'munic_id' => '295',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Carvajal',
            'munic_id' => '295',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José Leonardo Suárez',
            'munic_id' => '295',
        ]);
        // Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Paraíso',
            'munic_id' => '296',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Junín',
            'munic_id' => '296',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sabana de Mendoza',
            'munic_id' => '296',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Valmore Rodríguez',
            'munic_id' => '296',
        ]);
        // Trujillo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Andrés Linares',
            'munic_id' => '297',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chiquinquirá',
            'munic_id' => '297',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cristóbal Mendoza',
            'munic_id' => '297',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cruz Carrillo',
            'munic_id' => '297',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Matriz',
            'munic_id' => '297',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Monseñor Carrillo',
            'munic_id' => '297',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tres Esquinas',
            'munic_id' => '297',
        ]);
        // Urdaneta
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cabimbú',
            'munic_id' => '298',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Jajó',
            'munic_id' => '298',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Mesa de Esnujaque',
            'munic_id' => '298',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Quebrada',
            'munic_id' => '298',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santiago',
            'munic_id' => '298',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tuñame',
            'munic_id' => '298',
        ]);
        // Valera
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juan Ignacio Montilla',
            'munic_id' => '299',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Beatriz',
            'munic_id' => '299',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Puerta',
            'munic_id' => '299',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mendoza del Valle de Momboy',
            'munic_id' => '299',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mercedes Díaz',
            'munic_id' => '299',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Luis',
            'munic_id' => '299',
        ]);
    // Vargas
        // Vargas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caraballeda',
            'munic_id' => '300',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Carayaca',
            'munic_id' => '300',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Carlos Soublette',
            'munic_id' => '300',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Caruao Chuspa',
            'munic_id' => '300',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Catia La Mar',
            'munic_id' => '300',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Junko',
            'munic_id' => '300',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Guaira',
            'munic_id' => '300',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Macuto',
            'munic_id' => '300',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Maiquetía',
            'munic_id' => '300',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Naiguatá',
            'munic_id' => '300',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Raul Leoni',
            'munic_id' => '300',
        ]);
    // Yaracuy
        // Arístide Bastidas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Pablo',
            'munic_id' => '301',
        ]);
        // Bolívar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Aroa',
            'munic_id' => '302',
        ]);
        // Bruzual
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chivacoa',
            'munic_id' => '303',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Campo Elías',
            'munic_id' => '303',
        ]);
        // Cocorote
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cocorote',
            'munic_id' => '304',
        ]);
        // Independencia
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Independencia',
            'munic_id' => '305',
        ]);
        // José Antonio Páez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sabana de Parra',
            'munic_id' => '306',
        ]);
        // La Trinidad
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Boraure',
            'munic_id' => '307',
        ]);
        // Manuel Monge
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Yumare',
            'munic_id' => '308',
        ]);
        // Nirgua
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Nirgua',
            'munic_id' => '309',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Salóm',
            'munic_id' => '309',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Temerla',
            'munic_id' => '309',
        ]);
        // Peña
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Andrés',
            'munic_id' => '310',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Yaritagua',
            'munic_id' => '310',
        ]);
        // San Felipe
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Albarico',
            'munic_id' => '311',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Felipe',
            'munic_id' => '311',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Javier',
            'munic_id' => '311',
        ]);
        // Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Guama',
            'munic_id' => '312',
        ]);
        // Urachiche
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Urachiche',
            'munic_id' => '313',
        ]);
        // Veroes
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Guayabo',
            'munic_id' => '314',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Farriar',
            'munic_id' => '314',
        ]);
    // Zulia
        // Almirante Padilla
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Isla de Toas',
            'munic_id' => '315',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Monagas',
            'munic_id' => '315',
        ]);
        // Baralt
        DB::table('parroquias')->insert([
            'nom_parroq' => 'General Urdaneta',
            'munic_id' => '316',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Libertador',
            'munic_id' => '316',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Manuel Guanipa Matos',
            'munic_id' => '316',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Marcelino Briceño',
            'munic_id' => '316',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pueblo Nuevo',
            'munic_id' => '316',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Timoteo',
            'munic_id' => '316',
        ]);
        // Cabimas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ambrosio',
            'munic_id' => '317',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Arístides Calvani',
            'munic_id' => '317',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Carmen Herrera',
            'munic_id' => '317',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Germán Ríos Linares',
            'munic_id' => '317',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Jorge Hernández',
            'munic_id' => '317',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Rosa',
            'munic_id' => '317',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Punta Gorda',
            'munic_id' => '317',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rómulo Betancourt',
            'munic_id' => '317',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Benito',
            'munic_id' => '317',
        ]);
        // Catatumbo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Encontrados',
            'munic_id' => '318',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Udón Pérez',
            'munic_id' => '318',
        ]);
        // Colón
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Moralito',
            'munic_id' => '319',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Carlos del Zulia',
            'munic_id' => '319',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Bárbara',
            'munic_id' => '319',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Cruz del Zulia',
            'munic_id' => '319',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Urribarrí',
            'munic_id' => '319',
        ]);
        // Francisco Javier Pulgar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Carlos Quevedo',
            'munic_id' => '320',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Francisco Javier Pulgar',
            'munic_id' => '320',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Simón Rodríguez',
            'munic_id' => '320',
        ]);
        // Jesús Enrique Lossada
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José Ramón Yépez',
            'munic_id' => '321',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Concepción',
            'munic_id' => '321',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Mariano Parra León',
            'munic_id' => '321',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José',
            'munic_id' => '321',
        ]);
        // Jesús María Semprún
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Barí',
            'munic_id' => '322',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Jesús María Semprún',
            'munic_id' => '322',
        ]);
        // La Cañada de Urdaneta
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Andrés Bello',
            'munic_id' => '323',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chiquinquirá',
            'munic_id' => '323',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Concepción',
            'munic_id' => '323',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Carmelo',
            'munic_id' => '323',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Potreritos',
            'munic_id' => '323',
        ]);
        // Lagunillas
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Alonso de Ojeda',
            'munic_id' => '324',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Campo Lara',
            'munic_id' => '324',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Eleazar López Contreras',
            'munic_id' => '324',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Libertad',
            'munic_id' => '324',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Venezuela',
            'munic_id' => '324',
        ]);
        // Machiques de Perijá
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bartolomé de las Casas',
            'munic_id' => '325',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Libertad',
            'munic_id' => '325',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Río Negro',
            'munic_id' => '325',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José de Perijá',
            'munic_id' => '325',
        ]);
        // Mara
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Sierrita',
            'munic_id' => '326',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Las Parcelas',
            'munic_id' => '326',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Luis de Vicente',
            'munic_id' => '326',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Monseñor Marcos Sergio Godoy',
            'munic_id' => '326',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ricaurte',
            'munic_id' => '326',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Rafael',
            'munic_id' => '326',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Tamare',
            'munic_id' => '326',
        ]);
        // Maracaibo
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Antonio Borjas Romero',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bolívar',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cacique Mara',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Carracciolo Parra Pérez',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cecilio Acosta',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Chiquinquirá',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Coquivacoa',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Cristo de Aranza',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Francisco Eugenio Bustamante',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Idelfonzo Vásquez',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Juana de Ávila',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Luis Hurtado Higuera',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Manuel Dagnino',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Olegario Villalobos',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Raúl Leoni',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Isidro',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Lucía',
            'munic_id' => '327',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Venancio Pulgar',
            'munic_id' => '327',
        ]);
        // Miranda
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Altagracia',
            'munic_id' => '328',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Ana María Campos',
            'munic_id' => '328',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Faría',
            'munic_id' => '328',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Antonio',
            'munic_id' => '328',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San José',
            'munic_id' => '328',
        ]);
        // Páez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Alta Guajira',
            'munic_id' => '329',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Elias Sanchez Rubio',
            'munic_id' => '329',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Goajira',
            'munic_id' => '329',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sinamaica',
            'munic_id' => '329',
        ]);
        // Rosario de Perijá
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Donaldo Garcia',
            'munic_id' => '330',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Rosario',
            'munic_id' => '330',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Sixto Zambrano',
            'munic_id' => '330',
        ]);
        // San Francisco
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Domitila Flores',
            'munic_id' => '331',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Bajo',
            'munic_id' => '331',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Francisco Ochoa',
            'munic_id' => '331',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Los Cortijos',
            'munic_id' => '331',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Marcial Hernández',
            'munic_id' => '331',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'San Francisco',
            'munic_id' => '331',
        ]);
        // Santa Rita
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Mene',
            'munic_id' => '332',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'José Cenobio Urribarrí',
            'munic_id' => '332',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Pedro Lucas Urribarrí',
            'munic_id' => '332',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Santa Rita',
            'munic_id' => '332',
        ]);
        // Simón Bolívar
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Manuel Manrique',
            'munic_id' => '333',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rafael Maria Baralt',
            'munic_id' => '333',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rafael Urdaneta',
            'munic_id' => '333',
        ]);
        // Sucre
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Bobures',
            'munic_id' => '334',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'El Batey',
            'munic_id' => '334',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Gibraltar',
            'munic_id' => '334',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Heras',
            'munic_id' => '334',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Monseñor Arturo Álvarez',
            'munic_id' => '334',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rómulo Gallegos',
            'munic_id' => '334',
        ]);
        // Valmore Rodríguez
        DB::table('parroquias')->insert([
            'nom_parroq' => 'La Victoria',
            'munic_id' => '335',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Rafael Urdaneta',
            'munic_id' => '335',
        ]);
        DB::table('parroquias')->insert([
            'nom_parroq' => 'Raul Cuenca',
            'munic_id' => '335',
        ]);
    }
    	
}
