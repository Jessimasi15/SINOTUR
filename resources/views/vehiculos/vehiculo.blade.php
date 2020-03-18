@extends('layouts.app')

@section('title', 'Vehiculo')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>VEHICULO: {{ $vehiculo->placa}}</h2>
	@if(session()->has('flash'))
        <div class="alert alert-warning" role="alert">{{ session('flash') }}</div>
    @endif
    <br>
	<div class="container">
		<div class="row">
    		<div class="col-sm-7">
				<table class="table table-striped">
					<tr>
						<th>Beneficiario:</th>
						<td>{{ $vehiculo->benef_ci}} {{$vehiculo->beneficiario->nom_benef}} {{$vehiculo->beneficiario->apell_benef}}</td>
					</tr>
					<tr>
						<th>Placa:</th>
						<td>{{ $vehiculo->placa}}</td>
					</tr>
                    <tr>
                        <th>Organización:</th>
                        <td>
                            <p>{{ $vehiculo->organizacion_rif}}</p>
                            <p>{{ $vehiculo->organizacion->nom_organizacion}}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Marca:</th>
                        <td>{{ $vehiculo->marca_vehiculo->nom_marca}}</td>
                    </tr>
                    <tr>
                        <th>Modelo:</th>
                        <td>{{ $vehiculo->modelo_vehiculo->nom_modelo}}</td>
                    </tr>
                    <tr>
                        <th>Serial Carroceria:</th>
                        <td>{{ $vehiculo->serial_carroceria}}</td>
                    </tr>
                    <tr>
                        <th>Serial Motor:</th>
                        <td>{{ $vehiculo->serial_motor}}</td>
                    </tr>
                    <tr>
                        <th>Color:</th>
                        <td>{{ $vehiculo->color->nom_color}}</td>
                    </tr>
                    <tr>
                        <th>Año:</th>
                        <td>{{ $vehiculo->año_carro}}</td>
                    </tr>
				</table>
    			
    		</div>
    		<div class="col-sm-2">
    			<table class="table table-striped">

    				<tr>
    					<th>ACCIÓN</th>
    				</tr>
    				<tr>
    					<td align="center">
    						<a href="{{ route('vehiculo.edit', $vehiculo->placa)}}" class="btn btn-info" role="button">
                                <span class="glyphicon glyphicon-pencil"></span>
                                <span>Editar</span>
                            </a>
    					</td>
    				</tr>
    				<tr>
    					<td align="center">
							<form action="{{ route('vehiculo.destroy', $vehiculo->placa)}}" method="POST">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')" role="button">
                                    <span class="glyphicon glyphicon-trash"></span>
                                    <span>Eliminar</span>                        
                                </button>
							</form>
    					</td>
    				</tr>
    				<tr>
    					<td align="center">
    						<a href="{{ URL::previous() }}" class="btn btn-success" role="button">
                                <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                <span>Volver</span>                  
                            </a>
    					</td>
    				</tr>
    			</table>
    		</div>
    </div>
	
@endsection