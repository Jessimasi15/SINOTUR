@extends('layouts.app')

@section('title', 'Reporte Inventario')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>REPORTE ENTRADA DE INVENTARIO</h2>
	<br>
	<form class="form-group" action="{{route('pdfEntrada')}}" method="POST">
			@csrf
			@method('GET')
			<div class="form-group">
				<table align="center" border=0 width=100%>
					<tr>
						<td colspan="2">RANGO DE FECHAS</td>
					</tr>
					<tr>
						<td>Desde</td>
						<td>Hasta</td>
					</tr>
					<tr>
						<td><input type="date" name="start_date" required></td>
						<td><input type="date" name="end_date" required></td>
					</tr>
					<tr>
						<td>
							@if($errors->has('start_date'))
								<small class="form-text text-danger">{{ $errors->first('start_date') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('end_date'))
								<small class="form-text text-danger">{{ $errors->first('end_date') }}</small>
							@endif
						</td>
					</tr>

					<tr>
						<td height=30>
							<button type="submit" class="btn btn-primary principal">
								<span class="glyphicon glyphicon-cloud-download"></span>
								<span>Generar Reporte</span>
							</button>
						</td>
						<td>
							<button type="button" onclick="window.location.href='{{action('ReporteInventarioController@index')}}'" class="btn btn-success volver">
								<span class="glyphicon glyphicon-circle-arrow-left"></span>
    							<span>Volver</span>
							</button>
						</td>
					</tr>
				</table>
			</div>
		</form>

@endsection