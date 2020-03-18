@extends('layouts.app')

@section('title', 'Entrega')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>ENTREGA DE INSUMOS</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    @if(session()->has('alert'))
    	<div class="alert alert-danger" role="alert">{{ session('alert') }}</div>
    @endif
    <br>
    <div class="row">
		<div class="col-md-12">
		    <table class="table table-bordered table-striped">
		    	<tr>
					<th>JORNADA</th>
			    	@foreach($jornadas as $jornada)
						<td>{{ $jornada->nom_jornada}}</td>
					@endforeach
		    	</tr>
		    	<tr>
					<th>PLACA</th>
			    	@foreach($vehiculos as $vehiculo)
						<td>{{ $vehiculo->placa}}</td>
					@endforeach
		    	</tr>
		    	<tr>
		    		<th>BENEFICIARIO</th>
		    		@foreach($vehiculos as $vehiculo)
						<td>
							{{ $vehiculo->beneficiario->ci_beneficiario}}
							{{ $vehiculo->beneficiario->nom_benef}}
							{{ $vehiculo->beneficiario->apell_benef}}
						</td>
					@endforeach
		    	</tr>
		    </table>
		</div>
		<div class="col-md-12">
		    <table class="table table-striped">
		    	<th>TIPO DE INSUMO</th>
				<th>DETALLE DE INSUMO</th>
				<th>MEDIDA</th>
				<th>ASIGNADO</th>
				<th>ESTATUS</th>
				<th>ACCIÓN</th>
			    @foreach($asignaciones as $asignado)
					<tr>
						<td>{{ $asignado->tipo_insumo->nom_tipo_insumo}}</td>
						<td>{{ $asignado->detalle_insumo->nom_detalle_insumo}}</td>
						<td>{{ $asignado->unidad_medida->nom_medida}}</td>
						<td>{{ $asignado->cantidad_entregar}}</td>
						<td>{{ $asignado->estatus}}</td>
						<td>
							<a href="{{ action('EntregaController@show', $asignado->id_asignar_benef)}}" class="btn btn-info" role="button">Entregar</a>
						</td>
					</tr>
				@endforeach
			</table>
		</div>

@endsection