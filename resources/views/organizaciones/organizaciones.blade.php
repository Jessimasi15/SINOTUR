@extends('layouts.app')

@section('title', 'Organizaciones')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>ORGANIZACIONES</h2>
	@if(session()->has('flash'))
    	<div class="col-md-12 alert alert-warning" role="alert">{{ session('flash') }}</div>
    @endif
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<div class="form-inline pull-left">
					<a href="{{ route('organizaciones.create')}}" class="btn btn-info" role="button">
						<span class="glyphicon glyphicon-plus"></span>
						<span>Agregar Organización</span>
					</a>
				</div>
				<form class="form-inline pull-right" action="{{ action('OrganizacionController@index')}}" method="GET">
					@csrf
					<div class="form-group">
		                <input type="text" class="form-control" name="rif_organizacion" placeholder="RIF">
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
			<table width=100% class="table table-striped">
				<thead>
					<tr class="info">
						<th>RIF</th>
						<th>NOMBRE</th>
						<th>C.I. PRESIDENTE</th>
						<th>NOMBRE PRESIDENTE</th>
						<th>BLOQUE</th>
						<th>ACCIÓN</th>
					</tr>
				</thead>
				<tbody>
					@foreach($organizaciones as $organizacion)
						<tr>
							<td>{{ $organizacion->rif_organizacion}}</td>
							<td>{{ $organizacion->nom_organizacion}}</td>
							<td>{{ $organizacion->ci_presidente}}</td>
							<td>{{ $organizacion->nom_presidente .' ' .$organizacion->apell_presidente}}</td>
							<td>{{ $organizacion->bloque->nom_bloque}}</td>
							<td>
								<a href="{{ route('organizaciones.show', $organizacion->rif_organizacion)}}" class="btn btn-info" role="button">
									<span class="glyphicon glyphicon-folder-open"></span>
									<span>Ver más</span>
								</a>
						</tr>
					@endforeach
				</tbody>
			</table>
	    </div>
	
		<div class="text-center">
			{!! $organizaciones->render() !!}
		</div>
	</div>
@endsection