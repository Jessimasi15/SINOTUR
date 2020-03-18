@extends('layouts.app')

@section('title', 'Organizaciones')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>EMPRESA DE TRANSPORTE: {{ $organizacion->rif_organizacion}}</h2>
	@if(session()->has('flash'))
        <div class="alert alert-warning" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
	<div class="container">
		<div class="row">
    		<div class="col-sm-7">
				<table class="table table-striped">
					<tr>
						<th>RIF:</th>
						<td>{{ $organizacion->rif_organizacion}}</td>
					</tr>
					<tr>
						<th>Nombre:</th>
						<td>{{ $organizacion->nom_organizacion}}</td>
					</tr>
					<tr>
						<th>Tipo de Empresa:</th>
						<td>{{ $organizacion->tipo_organizacion->nom_tipo_organ}}</td>
					</tr>
					<tr>
						<th>Cedula Presidente:</th>
						<td>{{ $organizacion->ci_presidente}}</td>
					</tr>
					<tr>
						<th>Nombre Presidente:</th>
						<td>{{ $organizacion->nom_presidente}} {{ $organizacion->apell_presidente}}</td>
					</tr>
					<tr>
						<th>Correo Electronico:</th>
						<td>{{ $organizacion->correo_organ}}</td>
					</tr>
					<tr>
						<th>Telefono Local:</th>
						<td>{{ $organizacion->telef_local}}</td>
					</tr>
					<tr>
						<th>Telefono Celular:</th>
						<td>{{ $organizacion->telef_celular}}</td>
					</tr>
					<tr>
						<th>Estado:</th>
						<td>{{ $organizacion->estado->nom_estado}}</td>
					</tr>
					<tr>
						<th>Municipio:</th>
						<td>{{ $organizacion->municipio->nom_munic}}</td>
					</tr>
					<tr>
						<th>Parroquia:</th>
						<td>{{ $organizacion->parroquia->nom_parroq}}</td>
					</tr>
					<tr>
						<th>Bloque:</th>
						<td>{{ $organizacion->bloque->nom_bloque}}</td>
					</tr>
					<tr>
						<th>Ruta(s):</th>
						<td>{{ $organizacion->ruta_organ}}</td>
					</tr>
					<tr>
						<th>Dirección:</th>
						<td>{{ $organizacion->direc_organ}}</td>
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
    						<a href="{{ route('organizaciones.edit', $organizacion->rif_organizacion)}}" class="btn btn-info" role="button">
    							<span class="glyphicon glyphicon-pencil"></span>
    							<span>Editar organizacion</span>
    						</a>
    					</td>
    				</tr>
    				<tr>
    					<td align="center">
							<form action="{{ route('organizaciones.destroy', $organizacion->rif_organizacion)}}" method="POST">
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
    						<a href="{{ route('organizaciones.index')}}" class="btn btn-success" role="button">
    							<span class="glyphicon glyphicon-circle-arrow-left"></span>
    							<span>Volver</span>
    						</a>
    					</td>
    				</tr>
    			</table>
    		</div>
    	</div>
    </div>

@endsection