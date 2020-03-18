@extends('layouts.app')

@section('title', 'Reportes de Inventario')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>REPORTES DE INVENTARIO</h2>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-6">
				<table class="table table-borderless">
					<tr>
						<td>Entrada de Inventario por fechas</td>
						<td>
							<a href="{{ route('reporteEntrada.create')}}" class="btn btn-info" role="button">
								<span class="glyphicon glyphicon-search"></span>
								<span>Buscar</span>
							</a>
						</td>
					</tr>
					<tr>
						<td>Movimiento de Inventario por fechas</td>
						<td>
							<a href="{{ route('reporteMovimiento.create')}}" class="btn btn-info" role="button">
								<span class="glyphicon glyphicon-search"></span>
								<span>Buscar</span>
							</a>
						</td>
					</tr>
					<tr>
						<td>Inventario actual</td>
						<td>
							<a href="{{ route('reporteInventario.create')}}" class="btn btn-info" role="button">
								<span class="glyphicon glyphicon-search"></span>
								<span>Buscar</span>
							</a>
						</td>
					</tr>
				</table>
				<br>
				<div class="text-center">
					<a href="{{ route('entradaInventario.index')}}" class="btn btn-info" role="button">
						<span class="glyphicon glyphicon-list"></span>
						<span>Consulta de Inventario</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	
@endsection