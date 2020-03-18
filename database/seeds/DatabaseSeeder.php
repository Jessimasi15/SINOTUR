<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	/*$this->truncateTables([
            'roles',
            'users',
    		'estados',
    		'municipios',
            'parroquias',
    		'tipo_vehiculos',
    		'tipo_organizacions',
    		'tipo_beneficiarios',
    		'tipo_servicios',
    		'estatus_empresas',
    		'marca_vehiculos',
    		'colors',
    		'tipo_insumos',
    		'unidad_medidas',
    		'detalle_insumos',
            'almacens',
            'empresas',
            'sucursals',
            'modelo_vehiculos',
            'bloques',
            'organizacions',
            'beneficiarios',
            'vehiculos',
            'marca_insumos'
    	]);*/

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EstadosSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(ParroquiaSeeder::class);
        $this->call(TipoVehiculoSeeder::class);
        $this->call(TipoOrganizacionSeeder::class);
        $this->call(TipoBeneficiarioSeeder::class);
        $this->call(TipoServicioSeeder::class);
        $this->call(EstatusEmpresaSeeder::class);
        $this->call(MarcaVehiculoSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(TipoInsumoSeeder::class);
        $this->call(UnidadMedidaSeeder::class);
        $this->call(DetalleInsumoSeeder::class);
        $this->call(AlmacenSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(SucursalSeeder::class);
        $this->call(ModeloVehiculoSeeder::class);
        $this->call(BloqueSeeder::class);
        $this->call(OrganizacionSeeder::class);
        $this->call(BeneficiarioSeeder::class);
        $this->call(VehiculoSeeder::class);
        $this->call(MarcasInsumoSeeder::class);
    }

    /*protected function truncateTables(array $tables)
    {
    	//DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

    	foreach ($tables as $table) {
    		DB::table($table)->truncate();
    	}

    	//DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }*/
}
