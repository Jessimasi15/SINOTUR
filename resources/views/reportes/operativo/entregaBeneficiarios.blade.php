@extends('layouts.app')

@section('title', 'Entrega a Beneficiarios')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>REPORTE DE ENTREGA A BENEFICIARIOS</h2>
	@if(session()->has('alert'))
        <div class="alert alert-danger" role="alert">{{ session('alert') }}</div>
    @endif
	<form class="form-group" action="{{route('pdfEntrega')}}" method="POST">
		@csrf
		@method('GET')
		<div class="form-group">
			<table align="center" border=0 width=100%>
				<tr>
					<td colspan="2">JORNADA A CONSULTAR</td>
				</tr>
				<tr>
					<td>Jornada</td>
				</tr>
				<tr>
					<td class="pull-left">
						<input type="text" class="form-control" name="jornada" placeholder="Nombre Jornada" required>
					</td>
				</tr>
				<tr>
					<td>
						@if($errors->has('jornadas'))
							<small class="form-text text-danger">{{ $errors->first('jornadas') }}</small>
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
						<button type="button" onclick="window.location.href='{{action('ReporteJornadasController@index')}}'" class="btn btn-success volver">
							<span class="glyphicon glyphicon-circle-arrow-left"></span>
    						<span>Volver</span>
						</button>
					</td>
				</tr>
			</table>
		</div>
	</form>
@endsection