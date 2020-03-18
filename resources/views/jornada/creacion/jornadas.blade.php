@extends('layouts.app')

@section('title', 'Jornadas')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>JORNADAS</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    @if(session()->has('alert'))
    	<div class="alert alert-danger" role="alert">{{ session('alert') }}</div>
    @endif
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">	
				<form class="form-inline pull-right" action="{{ action('OperativoController@index')}}" method="GET">
					@csrf
					<div class="form-group">
		                <input type="text" class="form-control" name="jornada" placeholder="Jornada">
		            </div>
					<div class="form-group">
		                <input type="text" class="form-control" name="fecha_jornada" placeholder="AAAA-MM-DD">
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
						<th>FECHA</th>
						<th>JORNADA</th>
						<th>ESTADO</th>
						<th>ALMACEN</th>
						<th>ESTATUS</th>
					</tr>
				</thead>
				<tbody>
					@foreach($jornadas as $jornada)
						<tr>
							<td>{{ $jornada->fecha_jornada}}</td>
							<td>{{ $jornada->nom_jornada}}</td>
							<td>{{ $jornada->estado->nom_estado}}</td>
							<td>{{ $jornada->almacen->nom_almacen}}</td>
							<td>{{ $jornada->estatus}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="text-center">
				{!! $jornadas->render() !!}
		</div>
		<div class="text-center">
			<a href="{{ route('jornadas.create')}}" class="btn btn-info" role="button">
				<span class="glyphicon glyphicon-calendar"></span>
				<span>Crear Jornada</span>
			</a>
			<a href="{{ route('asignacion.create')}}" class="btn btn-info" role="button">
				<span class="glyphicon glyphicon-list"></span>
				<span>Asignar Beneficiarios</span>
			</a>
			<a href="{{ route('cierre.create')}}" class="btn btn-info" role="button">Cerrar Jornada</a>
		</div>
	</div>
@endsection