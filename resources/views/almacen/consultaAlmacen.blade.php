@extends('layouts.app')

@section('title', 'Consulta de Almacén')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>CONSULTA DE ALMACÉN</h2>
	@if(session()->has('flash'))
        <div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <div class="row">
		<div class="col-md-12">
			<div class="page-header">	
				<div class="form-group pull-left">
	                <a href="{{ route('almacenes.create')}}" class="btn btn-info" role="button">
	                	<span class="glyphicon glyphicon-plus"></span>
	                	<span>Agregar Almacén</span>
	                </a>
	            </div>
				<form class="form-inline pull-right" action="{{ action('AlmacenController@index')}}" method="GET">
					@csrf
					<div class="form-group">
		                <input type="text" class="form-control" name="nom_almacen" placeholder="Almacén">
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
						<th>#</th>
						<th>ALMACÉN</th>
						<th>DIRECCIÓN</th>
						<th>ACCIÓN</th>
					</tr>
				</thead>
				<tbody>
					@foreach($almacenes as $almacen)
						<tr>
							<td>{{ $almacen->id_almacen}}</td>
							<td>{{ $almacen->nom_almacen}}</td>
							<td>{{ $almacen->direc_almacen}}</td>
							<td>
								<form action="{{ route('almacenes.destroy', $almacen->id_almacen)}}" method="POST">
									@csrf
									@method('DELETE')
									<button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminarlo?')">
										<span class="glyphicon glyphicon-trash"></span>
										<span>Eliminar</span>
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!! $almacenes->render() !!}
			</div>
		</div>
	</div>
@endsection