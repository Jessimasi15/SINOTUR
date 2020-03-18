<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SINOTUR - @yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.11.1.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style type="text/css">
        .panel-title {
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    <div>
        <table width=100% id="principal">
            <td>
                <img src="{{asset('../images/ministerio_transporte.png')}}" height="105px" width="390px" style="float:left;">
            </td>
            <td align="center">
                <img src="{{asset('../images/sinotur.png')}}" height="105px">
            </td>
            <td>
                <img src="{{asset('../images/granmisiontransporte.png')}}" height="105px" style="float:right;">
            </td> 
        </table>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <br><br>
        <!-- Aquí empieza el menú vertical desplegable -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <!--<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">INICIO</a>-->
                                    <a href="{{ url('/index') }}">INICIO</a>
                                </h4>
                            </div>
                            <!--<div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="{{ url('/index') }}">Bienvenido</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>-->
                        </div>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">INVENTARIO</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <!--<tr>
                                        <td>
                                            <a href="{{ action('EntradaInsumoController@create')}}">Agregar Inventario</a>
                                        </td>
                                    </tr>-->
                                    <tr>
                                        <td>
                                            <a href="{{ action('EntradaInsumoController@index')}}">Consulta de Inventario</a><span class="label label-info"></span>
                                        </td>
                                    </tr>
                                    <!--<tr>
                                        <td>
                                            <a href="{{ action('MovimientoInsumoController@create')}}">Movimiento de Inventario</a>
                                        </td>
                                    </tr>-->
                                    <!--<tr>
                                        <td>
                                            <a href="{{ action('AlmacenController@create')}}">Crear Almacén</a><span class="label label-success"></span>
                                        </td>
                                    </tr>-->
                                    <tr>
                                        <td>
                                            <a href="{{ action('AlmacenController@index')}}">Almacenes</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        </div>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">BENEFICIARIOS</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="{{ action('OrganizacionController@index')}}">Organizaciones</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ action('BeneficiarioController@index')}}">Beneficiarios</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ action('VehiculoController@index')}}">Vehiculos</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        </div>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">OPERATIVO</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="{{ action('OperativoController@index')}}">Jornadas</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ action('OperativoBeneficiarioController@index')}}">Beneficiarios Asignados</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ action('EntregaController@create')}}">Entrega</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ action('CierreOperativoController@create')}}">Cierre de Operativo</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">REPORTES</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="{{ action('ReporteInventarioController@index')}}">Inventario</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{ action('ReporteJornadasController@index')}}">Jornadas</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">OPCIONES EXTRAS</a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="{{ action('OpcionesController@marca')}}">Agregar Marca</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{ action('OpcionesController@modelo')}}">Agregar Modelo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{ action('OpcionesController@bloque')}}">Agregar Bloque</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{ action('EmpresaController@sucursal')}}">Agregar Coordinación</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">SEGURIDAD</a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="{{ action('SeguridadController@create')}}">Agregar Usuario</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{ action('SeguridadController@index')}}">Usuarios</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Aquí empieza el Contenido -->
                <div class="col-sm-9 col-md-9">
                    <div class="well">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

