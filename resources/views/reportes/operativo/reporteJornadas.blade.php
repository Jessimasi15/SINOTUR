@extends('layouts.app')

@section('title', 'Reportes de Jornadas')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>REPORTES DE JORNADAS</h2>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-6">
				<table class="table table-borderless">
					<tr>
						<td>Jornadas por fechas</td>
						<td>
							<a href="{{ route('reporteJornada.create')}}" class="btn btn-info" role="button">
								<span class="glyphicon glyphicon-search"></span>
								<span>Buscar</span>
							</a>
						</td>
					</tr>
					<tr>
						<td>Beneficiarios Asignados por Jornada</td>
						<td>
							<a href="{{ route('reporteBeneficiarios.create')}}" class="btn btn-info" role="button">
								<span class="glyphicon glyphicon-search"></span>
								<span>Buscar</span>
							</a>
						</td>
					</tr>
					<tr>
						<td>Entrega a Beneficiarios por Jornada</td>
						<td>
							<a href="{{ route('reporteEntrega.create')}}" class="btn btn-info" role="button">
								<span class="glyphicon glyphicon-search"></span>
								<span>Buscar</span>
							</a>
						</td>
					</tr>
				</table>
				<br>
				<div class="text-center">
					<a href="{{ route('jornadas.index')}}" class="btn btn-info" role="button">
						<span class="glyphicon glyphicon-calendar"></span>
						<span>Jornadas</span>
					</a>
					<a href="{{ route('asignacion.index')}}" class="btn btn-info" role="button">
						<span class="glyphicon glyphicon-list"></span>
						<span>Beneficiarios Asignados</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	
@endsection