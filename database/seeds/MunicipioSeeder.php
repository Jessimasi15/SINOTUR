<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // Amazonas
        DB::table('municipios')->insert([
        	'nom_munic' => 'Alto Orinoco',
        	'estado_id' => '1',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Atabapo',
        	'estado_id' => '1',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Atures',
        	'estado_id' => '1',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Autana',
        	'estado_id' => '1',
        ]);
         DB::table('municipios')->insert([
        	'nom_munic' => 'Manapiare',
        	'estado_id' => '1',
        ]);
         DB::table('municipios')->insert([
        	'nom_munic' => 'Maroa',
        	'estado_id' => '1',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Río Negro',
        	'estado_id' => '1',
        ]);

    // Anzoátegui
        DB::table('municipios')->insert([
        	'nom_munic' => 'Anaco',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Aragua',
        	'estado_id' => '2',
        ]);
         DB::table('municipios')->insert([
        	'nom_munic' => 'Bolívar',
        	'estado_id' => '2',
        ]);
         DB::table('municipios')->insert([
        	'nom_munic' => 'Bruzual',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cajigal',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Carvajal',
        	'estado_id' => '2',
        ]);
         DB::table('municipios')->insert([
        	'nom_munic' => 'Freites',
        	'estado_id' => '2',
        ]);
         DB::table('municipios')->insert([
        	'nom_munic' => 'Guanipa',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Guanta',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Independencia',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Libertad',
        	'estado_id' => '2',
        ]);
         DB::table('municipios')->insert([
        	'nom_munic' => 'Mc Gregor',
        	'estado_id' => '2',
        ]);
         DB::table('municipios')->insert([
        	'nom_munic' => 'Miranda',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Monagas',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Peñalver',
        	'estado_id' => '2',
        ]);
         DB::table('municipios')->insert([
        	'nom_munic' => 'Píritu',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Juan de Capistrano',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Santa Ana',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Simón Rodríguez',
        	'estado_id' => '2',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sotillo',
        	'estado_id' => '2',
        ]);
         DB::table('municipios')->insert([
        	'nom_munic' => 'Urbaneja',
        	'estado_id' => '2',
        ]);
    // Apure
        DB::table('municipios')->insert([
        	'nom_munic' => 'Achaguas',
        	'estado_id' => '3',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Biruaca',
        	'estado_id' => '3',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Muñoz',
        	'estado_id' => '3',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Páez',
        	'estado_id' => '3',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Pedro Camejo',
        	'estado_id' => '3',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Rómulo Gallegos',
        	'estado_id' => '3',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Fernando',
        	'estado_id' => '3',
        ]);
    // Aragua
        DB::table('municipios')->insert([
        	'nom_munic' => 'Francisco Linares A.',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Bolívar',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Camatagua',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Girardot',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Jose Angel Lamas',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Jose Felix Rivas',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Jose R Revenga',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Libertador',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Mario B Iragorry',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Casimiro',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Sebastián',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Santiago Mariño',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Santos Michelena',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Ocumare de la Costa',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sucre',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Tovar',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Urdaneta',
        	'estado_id' => '4',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Zamora',
        	'estado_id' => '4',
        ]);
    // Barinas
        DB::table('municipios')->insert([
        	'nom_munic' => 'Alberto Arvelo Torrealba',
        	'estado_id' => '5',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Andrés Eloy Blanco',
        	'estado_id' => '5',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Antonio José de Sucre',
        	'estado_id' => '5',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Arismendi',
        	'estado_id' => '5',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Barinas',
        	'estado_id' => '5',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Bolívar',
        	'estado_id' => '5',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cruz Paredes',
        	'estado_id' => '5',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Ezequiel Zamora',
        	'estado_id' => '5',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Obispos',
        	'estado_id' => '5',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Pedraza',
        	'estado_id' => '5',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Rojas',
        	'estado_id' => '5',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sosa',
        	'estado_id' => '5',
        ]);
    // Bolívar
        DB::table('municipios')->insert([
        	'nom_munic' => 'Caroní',
        	'estado_id' => '6',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cedeño',
        	'estado_id' => '6',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'El Callao',
        	'estado_id' => '6',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Gran Sabana',
        	'estado_id' => '6',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Heres',
        	'estado_id' => '6',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Padre Pedro Chien',
        	'estado_id' => '6',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Piar',
        	'estado_id' => '6',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Raul Leoni',
        	'estado_id' => '6',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Roscio',
        	'estado_id' => '6',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sifontes',
        	'estado_id' => '6',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sucre',
        	'estado_id' => '6',
        ]);
    // Carabobo
        DB::table('municipios')->insert([
        	'nom_munic' => 'Bejuma',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Carlos Arvelo',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Diego Ibarra',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Guacara',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Juan Jose Mora',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Libertador',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Los Guayos',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Miranda',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Montalbán',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Naguanagua',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Puerto Cabello',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Diego',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Joaquín',
        	'estado_id' => '7',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Valencia',
        	'estado_id' => '7',
        ]);
    // Cojedes
        DB::table('municipios')->insert([
        	'nom_munic' => 'Anzoátegui',
        	'estado_id' => '8',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Falcón',
        	'estado_id' => '8',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Girardot',
        	'estado_id' => '8',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Lima Blanco',
        	'estado_id' => '8',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Pao de San Juan Bautista',
        	'estado_id' => '8',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Ricaurte',
        	'estado_id' => '8',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Rómulo Gallegos',
        	'estado_id' => '8',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Carlos',
        	'estado_id' => '8',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Tinaco',
        	'estado_id' => '8',
        ]);
    // Delta Amacuro
        DB::table('municipios')->insert([
        	'nom_munic' => 'Antonio Díaz',
        	'estado_id' => '9',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Casacoima',
        	'estado_id' => '9',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Pedernales',
        	'estado_id' => '9',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Tucupita',
        	'estado_id' => '9',
        ]);
    // Distrito Capital
        DB::table('municipios')->insert([
        	'nom_munic' => 'Libertador',
        	'estado_id' => '10',
        ]);
    // Falcón
        DB::table('municipios')->insert([
        	'nom_munic' => 'Acosta',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Bolívar',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Buchivacoa',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cacique Manaure',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Carirubana',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Colina',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Dabajuro',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Democracia',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Falcón',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Federación',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Jacura',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Los Taques',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Mauroa',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Miranda',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Mons. Iturriza',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Palma sola',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Petit',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Píritu',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Francisco',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Silva',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sucre',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Tocópero',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Unión',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Urumaco',
        	'estado_id' => '11',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Zamora',
        	'estado_id' => '11',
        ]);
    // Guárico
        DB::table('municipios')->insert([
        	'nom_munic' => 'Camaguán',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Chaguaramas',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'El Socorro',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Infante',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Las Mercedes',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Mellado',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Miranda',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Monagas',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Ortiz',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Ribas',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Roscio',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Gerónimo de Guayabal',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San José de Guaribe',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Santa María de Ipire',
        	'estado_id' => '12',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Zaraza',
        	'estado_id' => '12',
        ]);
    // Lara
        DB::table('municipios')->insert([
        	'nom_munic' => 'Andrés Eloy Blanco',
        	'estado_id' => '13',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Crespo',
        	'estado_id' => '13',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Iribarren',
        	'estado_id' => '13',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Jiménez',
        	'estado_id' => '13',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Morán',
        	'estado_id' => '13',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Palavecino',
        	'estado_id' => '13',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Simón Planas',
        	'estado_id' => '13',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Torres',
        	'estado_id' => '13',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Urdaneta',
        	'estado_id' => '13',
        ]);
    // Mérida
        DB::table('municipios')->insert([
        	'nom_munic' => 'Alberto Adriani',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Andrés Bello',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Antonio Pinto Salinas',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Aricagua',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Arzobispo Chacón',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Campo Elías',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Caracciolo Parra',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cardenal Quintero',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Guaraque',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Julio Cesar Salas',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Justo Briceño',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Libertador',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Miranda',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Ramos de Lora',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Padre Noguera',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Pueblo Llano',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Rangel',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Rivas Dávila',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Santos Marquina',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sucre',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Tovar',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Tulio Febres Cordero',
        	'estado_id' => '14',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Zea',
        	'estado_id' => '14',
        ]);
    // Miranda
        DB::table('municipios')->insert([
        	'nom_munic' => 'Acevedo',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Andrés Bello',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Baruta',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Brión',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Buroz',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Carrizal',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Chacao',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cristóbal Rojas',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'El Hatillo',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Guaicaipuro',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Independencia',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Lander',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Los Salias',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Páez',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Paz Castillo',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Pedro Gual',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Plaza',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Simón Bolívar',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sucre',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Urdaneta',
        	'estado_id' => '15',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Zamora',
        	'estado_id' => '15',
        ]);
    // Monagas
        DB::table('municipios')->insert([
        	'nom_munic' => 'Acosta',
        	'estado_id' => '16',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Aguasay',
        	'estado_id' => '16',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Bolívar',
        	'estado_id' => '16',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Caripe',
        	'estado_id' => '16',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cedeño',
        	'estado_id' => '16',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Ezequiel Zamora',
        	'estado_id' => '16',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Libertador',
        	'estado_id' => '16',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Maturín',
        	'estado_id' => '16',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Piar',
        	'estado_id' => '16',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Punceres',
        	'estado_id' => '16',
        ]);
       	DB::table('municipios')->insert([
        	'nom_munic' => 'Santa Bárbara',
        	'estado_id' => '16',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sotillo',
        	'estado_id' => '16',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Uracoa',
        	'estado_id' => '16',
        ]);
    // Nueva Esparta
        DB::table('municipios')->insert([
        	'nom_munic' => 'Antolín del Campo',
        	'estado_id' => '17',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Arismendi',
        	'estado_id' => '17',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Díaz',
        	'estado_id' => '17',
        ]);
       	DB::table('municipios')->insert([
        	'nom_munic' => 'García',
        	'estado_id' => '17',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Gómez',
        	'estado_id' => '17',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Maneiro',
        	'estado_id' => '17',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Marcano',
        	'estado_id' => '17',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Mariño',
        	'estado_id' => '17',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Península de Macanao',
        	'estado_id' => '17',
        ]);
       	DB::table('municipios')->insert([
        	'nom_munic' => 'Tubores',
        	'estado_id' => '17',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Villalba',
        	'estado_id' => '17',
        ]);
    // Portuguesa
        DB::table('municipios')->insert([
        	'nom_munic' => 'Agua Blanca',
        	'estado_id' => '18',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Araure',
        	'estado_id' => '18',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Esteller',
        	'estado_id' => '18',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Guanare',
        	'estado_id' => '18',
        ]);
       	DB::table('municipios')->insert([
        	'nom_munic' => 'Guanarito',
        	'estado_id' => '18',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'José V. de Unda',
        	'estado_id' => '18',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Ospino',
        	'estado_id' => '18',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Páez',
        	'estado_id' => '18',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Papelón',
        	'estado_id' => '18',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Genaro de Boconoíto',
        	'estado_id' => '18',
        ]);
       	DB::table('municipios')->insert([
        	'nom_munic' => 'San Rafael de Onoto',
        	'estado_id' => '18',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Santa Rosalía',
        	'estado_id' => '18',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sucre',
        	'estado_id' => '18',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Turén',
        	'estado_id' => '18',
        ]);
    // Sucre
        DB::table('municipios')->insert([
        	'nom_munic' => 'Andrés Eloy Blanco',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Andrés Mata',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Arismendi',
        	'estado_id' => '19',
        ]);
       	DB::table('municipios')->insert([
        	'nom_munic' => 'Benítez',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Bermúdez',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Bolívar',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cajigal',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cruz Salmerón Acosta',
        	'estado_id' => '19',
        ]);
       	DB::table('municipios')->insert([
        	'nom_munic' => 'Libertador',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Mariño',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Mejía',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Montes',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Ribero',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sucre',
        	'estado_id' => '19',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Valdez',
        	'estado_id' => '19',
        ]);
    // Táchira
       	DB::table('municipios')->insert([
        	'nom_munic' => 'Andrés Bello',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Antonio Rómulo Costa',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Ayacucho',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Bolívar',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cárdenas',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Córdoba',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Francisco de Miranda',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Fernández Feo',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Garcia Hevia',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Guásimos',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Independencia',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Jáuregui',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'José María Vargas',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Junín',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Libertad',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Libertador',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Lobatera',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Michelena',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Panamericano',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Pedro María Ureña',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Rafael Urdaneta',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Samuel Maldonado',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Cristóbal',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Judas Tadeo',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Seboruco',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Simón Rodríguez',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sucre',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Torbes',
        	'estado_id' => '20',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Uribante',
        	'estado_id' => '20',
        ]);
    // Trujillo
        DB::table('municipios')->insert([
        	'nom_munic' => 'Andrés Bello',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Boconó',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Bolívar',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Candelaria',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Carache',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Escuque',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'José Felipe Márquez Cañizalez',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Juan Vicente Campos Elías',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'La Ceiba',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Miranda',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Monte Carmelo',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Motatán',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Pampán',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Pampanito',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Rafael Rangel',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Rafael de Carvajal',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sucre',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Trujillo',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Urdaneta',
        	'estado_id' => '21',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Valera',
        	'estado_id' => '21',
        ]);
    // Vargas
        DB::table('municipios')->insert([
        	'nom_munic' => 'Vargas',
        	'estado_id' => '22',
        ]);
    // Yaracuy
        DB::table('municipios')->insert([
        	'nom_munic' => 'Arístide Bastidas',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Bolívar',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Bruzual',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cocorote',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Independencia',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'José Antonio Páez',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'La Trinidad',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Manuel Monge',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Nirgua',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Peña',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Felipe',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sucre',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Urachiche',
        	'estado_id' => '23',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Veroes',
        	'estado_id' => '23',
        ]);
    // Zulia
        DB::table('municipios')->insert([
        	'nom_munic' => 'Almirante Padilla',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Baralt',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Cabimas',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Catatumbo',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Colón',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Francisco Javier Pulgar',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Jesús Enrique Lossada',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Jesús María Semprún',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'La Cañada de Urdaneta',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Lagunillas',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Machiques de Perijá',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Mara',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Maracaibo',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Miranda',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Páez',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Rosario de Perijá',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'San Francisco',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Santa Rita',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Simón Bolívar',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Sucre',
        	'estado_id' => '24',
        ]);
        DB::table('municipios')->insert([
        	'nom_munic' => 'Valmore Rodríguez',
        	'estado_id' => '24',
        ]);

    }
}
