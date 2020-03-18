@extends('layouts.app')

@section('title', 'Entrega')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>ENTREGADO</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    @if(session()->has('alert'))
    	<div class="alert alert-danger" role="alert">{{ session('alert') }}</div>
    @endif
    <table class="table table-striped">
		<thead>
			<tr>
				<th>JORNADA</th>
				<th>FECHA</th>
				<th>PLACA</th>
				<th>TIPO DE INSUMO</th>
				<th>DETALLE DE INSUMO</th>
				<th>PRESENTACIÓN</th>
				<th>CANTIDAD</th>
				<th>ESTATUS</th>
			</tr>
		</thead>
		<tbody>
			@foreach($entregados as $entregado)
				<tr>
					<td>{{ $entregado->jornada->nom_jornada}}</td>
					<td>{{ $entregado->jornada->fecha_jornada}}</td>
					<td>{{ $entregado->placa}}</td>
					<td>{{ $entregado->tipo_insumo->nom_tipo_insumo}}</td>
					<td>{{ $entregado->detalle_insumo->nom_detalle_insumo}}</td>
					<td>{{ $entregado->unidad_medida->nom_medida}}</td>
					<td>{{ $entregado->cantidad_entregada}}</td>
					<td>{{ $entregado->estatus }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		<a href="{{ route('entrega.create')}}" class="btn btn-info" role="button">Entrega</a>
	</div>
	<div class="text-center pagination pagination-sm">
		
	</div>

@endsection