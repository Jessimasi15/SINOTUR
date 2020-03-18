<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Rutas de inicio */
// Rutas de Autenticación
Route::get('/', 'Auth\LoginController@showLoginForm'); // View Login
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('index', 'HomeController@index')->name('index'); // View Inicio
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Rutas de Reseteo de Contraseña
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

/* Rutas de Almacén */
Route::resource('almacenes', 'AlmacenController');


/* Rutas Entrada de Inventario */
Route::resource('entradaInventario', 'EntradaInsumoController');

/* Rutas Selects Dinamicos en EntradaInsumoController */
Route::get('medida', 'EntradaInsumoController@medida')->name('medida'); // Selects Medida
Route::get('insumosCaucho', 'EntradaInsumoController@insumosCaucho')->name('insumosCaucho'); // Selects InsumoCaucho
Route::get('insumosBateria', 'EntradaInsumoController@insumosBateria')->name('insumosBateria'); // Selects InsumoBateria
Route::get('insumosAceite', 'EntradaInsumoController@insumosAceite')->name('insumosAceite'); // Selects InsumoAceite
Route::get('marcas', 'EntradaInsumoController@marcas')->name('marcas'); // Selects MarcaInsumo

/* Rutas Movimiento de Inventario */
Route::resource('movimientoInventario', 'MovimientoInsumoController');

/* Rutas Selects Dinamicos en MovimientoInsumoController */
Route::get('cauchos', 'MovimientoInsumoController@cauchos')->name('cauchos'); // Selects InsumoCaucho
Route::get('baterias', 'MovimientoInsumoController@baterias')->name('baterias'); // Selects InsumoBateria
Route::get('aceites', 'MovimientoInsumoController@aceites')->name('aceites'); // Selects InsumoBateria
Route::get('marcasInsumo', 'MovimientoInsumoController@marcasInsumo')->name('marcasInsumo'); // Selects MarcaInsumo


/* Rutas de Beneficiarios */
Route::resource('organizaciones', 'OrganizacionController');
Route::resource('beneficiarios', 'BeneficiarioController');
Route::resource('vehiculo', 'VehiculoController');

/* Rutas de Selects Dinamicos en BeneficiarioController */
Route::get('municipio','BeneficiarioController@municipio')->name('municipio'); // Selects Municipio
Route::get('parroquia','BeneficiarioController@parroquia')->name('parroquia'); // Selects Parroquia
Route::get('modelos', 'BeneficiarioController@modelos')->name('modelos');


/* Rutas de Jornadas */
Route::resource('jornadas', 'OperativoController'); // Creacion de Jornadas
Route::get('almacen', 'OperativoController@almacen')->name('almacen'); // Selects Almacen

/* Asignacion de Beneficiarios a Jornadas */
Route::resource('asignacion', 'OperativoBeneficiarioController');

/* Rutas Selects Dinamicos en OperativoBeneficiarioController */
Route::get('caucho', 'OperativoBeneficiarioController@caucho')->name('caucho'); // Selects InsumoCaucho
Route::get('bateria', 'OperativoBeneficiarioController@bateria')->name('bateria'); // Selects InsumoBateria
Route::get('aceite', 'OperativoBeneficiarioController@aceite')->name('aceite'); // Selects InsumoBateria

/* Entrega en el Operativo */
Route::resource('entrega', 'EntregaController');
Route::get('entregar/{placa}', 'EntregaController@entregar')->name('entregar');

/* Cierre de la Jornada */
Route::resource('cierre', 'CierreOperativoController');


/* Rutas de Opciones Extras */
Route::get('marca', 'OpcionesController@marca')->name('marca'); // View Agregar MarcaVehiculo
Route::get('modelo', 'OpcionesController@modelo')->name('modelo'); // View Agregar ModeloVehiculo
Route::get('bloque', 'OpcionesController@bloque')->name('bloque'); // View Bloque
Route::post('agregarMarca', 'OpcionesController@agregarMarca'); // Guardar datos View MarcaVehiculo
Route::post('agregarModelo', 'OpcionesController@agregarModelo'); // Guardar datos View ModeloVehiculo
Route::post('agregarBloque', 'OpcionesController@agregarBloque'); // Guardar datos View Bloque


/* Ruta de Empresa */
/*Route::get('empresa', 'EmpresaController@empresa')->name('empresa'); // View AgregarEmpresa
Route::post('creacionEmpresa', 'EmpresaController@creacionEmpresa'); // Guardar datos View CrearEmpresa*/
Route::get('coordinacion', 'EmpresaController@sucursal')->name('sucursal'); // View AgregarSucursal
Route::post('creacionCoordinacion', 'EmpresaController@creacionSucursal'); // Guardar datos View CrearSucursal


/* Rutas de Seguridad */
Route::resource('users', 'SeguridadController');

/* Rutas de Reportes */
Route::resource('reporteEntrada', 'ReporteEntradaInventarioController');
Route::get('pdfEntrada', 'ReporteEntradaInventarioController@pdfEntrada')->name('pdfEntrada');

Route::resource('reporteMovimiento', 'ReporteMovimientoInventarioController');
Route::get('pdfMovimiento', 'ReporteMovimientoInventarioController@pdfMovimiento')->name('pdfMovimiento');

Route::resource('reporteInventario', 'ReporteInventarioController');
Route::get('pdfInventario', 'ReporteInventarioController@pdfInventario')->name('pdfInventario');

Route::resource('reporteJornada', 'ReporteJornadasController');
Route::get('pdfJornada', 'ReporteJornadasController@pdfJornada')->name('pdfJornada');

Route::resource('reporteBeneficiarios', 'ReporteBeneficiariosController');
Route::get('pdfBeneficiarios', 'ReporteBeneficiariosController@pdfBeneficiarios')->name('pdfBeneficiarios');

Route::resource('reporteEntrega', 'ReporteEntregaBeneficiarioController');
Route::get('pdfEntrega', 'ReporteEntregaBeneficiarioController@pdfEntrega')->name('pdfEntrega');