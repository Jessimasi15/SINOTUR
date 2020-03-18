@extends('layouts.app')

@section('title', 'Agregar Insumos')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>CONSULTA INVENTARIO</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <div class="row">
		<div class="col-md-12">
			<div class="page-header">	
				<form class="form-inline pull-right" action="{{ action('EntradaInsumoController@index')}}" method="GET">
					@csrf
					<div class="form-group">
		                <input type="text" class="form-control" name="almacen" placeholder="Almacén">
		            </div>
		            <div class="form-group">
		                <input type="text" class="form-control" name="tipo_insumo" placeholder="Tipo Insumo">
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
						<th>ALMACÉN</th>
						<th>TIPO DE INSUMO</th>
						<th>MARCA</th>
						<th>DETALLE DE INSUMO</th>
						<th>MEDIDA</th>
						<th>CANTIDAD</th>
					</tr>
				</thead>
				<tbody>
					@foreach($insumos as $insumo)
						<tr>
							<td>{{ $insumo->almacen->nom_almacen}}</td>
							<td>{{ $insumo->tipo_insumo->nom_tipo_insumo}}</td>
							<td>{{ $insumo->marca_insumo->nom_marca_insumo}}</td>
							<td>{{ $insumo->detalle_insumo->nom_detalle_insumo}}</td>
							<td>{{ $insumo->unidad_medida->nom_medida}}</td>
							<td>{{ $insumo->cantidad_total}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="text-center">
			{!! $insumos->render() !!}
		</div>
		<div class="text-center">
			<a href="{{ route('entradaInventario.create')}}" class="btn btn-info" role="button">
				<span class="glyphicon glyphicon-plus"></span>
				<span>Agregar Inventario</span>
			</a>
			<a href="{{ route('movimientoInventario.create')}}" class="btn btn-info" role="button">
				<span class="glyphicon glyphicon-transfer"></span>
				<span>Mover Inventario</span>
			</a>
		</div>
	</div>
@endsection