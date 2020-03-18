@extends('layouts.app')

@section('title', 'Vehiculos')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>VEHICULOS</h2>
	@if(session()->has('flash'))
        <div class="alert alert-warning" role="alert">{{ session('flash') }}</div>
    @endif
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<div class="form-inline pull-left">
					<div class="btn-group" role="group" aria-label="Basic example">
						<a href="{{ route('beneficiarios.create')}}" class="btn btn-info" role="button">
							<span class="glyphicon glyphicon-plus"></span>
							<span>Agregar Beneficiario</span>
						</a>
						<a href="{{ route('vehiculo.create')}}" class="btn btn-info" role="button">
							<span class="glyphicon glyphicon-plus"></span>
							<span>Agregar Vehiculo</span>
						</a>
					</div>
				</div>
				<form class="form-inline pull-right" action="{{ action('VehiculoController@index')}}" method="GET">
					@csrf
					<div class="form-group">
		                <input type="text" class="form-control" name="rif_organizacion" placeholder="RIF">
		            </div>
					<div class="form-group">
		                <input type="text" class="form-control" name="benef_ci" placeholder="C.I.">
		            </div>
		            <div class="form-group">
		                <button type="submit" class="btn btn-default">
		                    <span class="glyphicon glyphicon-search"></span>
		                </button>
		            </div>
				</form>
			</div>
		</div>
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
					<tr class="info">
						<th>PLACA</th>
						<th>RIF ORGANIZACION</th>
						<th>C.I.</th>
						<th>NOMBRE</th>
						<th>MARCA</th>
						<th>MODELO</th>
						<th>ACCIÓN</th>
					</tr>
				</thead>
				<tbody>
					@foreach($vehiculos as $vehiculo)
						<tr>
							<td>{{ $vehiculo->placa}}</td>
							<td>{{ $vehiculo->organizacion->rif_organizacion}}</td>
							<td>{{ $vehiculo->benef_ci}}</td>
							<td>{{ $vehiculo->beneficiario->nom_benef .' ' .$vehiculo->beneficiario->apell_benef}}</td>
							<td>{{ $vehiculo->marca_vehiculo->nom_marca}}</td>
							<td>{{ $vehiculo->modelo_vehiculo->nom_modelo}}</td>
							<td>
								<a href="{{ route('vehiculo.show', $vehiculo->placa)}}" class="btn btn-info" role="button">
									<span class="glyphicon glyphicon-folder-open"></span>
									<span>Ver más</span>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="text-center">
			{!! $vehiculos->render() !!}
		</div>
	</div>
@endsection