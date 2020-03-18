@extends('layouts.app')

@section('title', 'Beneficiarios Asignados')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>BENEFICIARIOS ASIGNADOS</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    @if(session()->has('alert'))
    	<div class="alert alert-danger" role="alert">{{ session('alert') }}</div>
    @endif
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">	
				<form class="form-inline pull-right" action="{{ action('OperativoBeneficiarioController@index')}}" method="GET">
					@csrf
					<div class="form-group">
		                <input type="text" class="form-control" name="jornada" placeholder="Jornada">
		            </div>
					<div class="form-group">
		                <input type="text" class="form-control" name="placa" placeholder="Placa">
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
						<th>JORNADA</th>
						<th>PLACA</th>
						<th>TIPO DE INSUMO</th>
						<th>DETALLE DE INSUMO</th>
						<th>MEDIDA</th>
						<th>ASIGNADO</th>
						<th>ESTATUS</th>
					</tr>
				</thead>
				<tbody>
					@foreach($asignaciones as $asignacion)
						<tr>
							<td>{{ $asignacion->jornada->nom_jornada}}</td>
							<td>{{ $asignacion->placa}}</td>
							<td>{{ $asignacion->tipo_insumo->nom_tipo_insumo}}</td>
							<td>{{ $asignacion->detalle_insumo->nom_detalle_insumo}}</td>
							<td>{{ $asignacion->unidad_medida->nom_medida}}</td>
							<td>{{ $asignacion->cantidad_entregar}}</td>
							<td>{{ $asignacion->estatus }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="text-center">
			<a href="{{ route('asignacion.create')}}" class="btn btn-info" role="button">
				<span class="glyphicon glyphicon-list"></span>
				<span>Asignar Beneficiarios</span>
			</a>
			<a href="{{ route('jornadas.index')}}" class="btn btn-info" role="button">Jornadas</a>
		</div>
		<div class="text-center">
			{!! $asignaciones->render() !!}
		</div>
	</div>
@endsection