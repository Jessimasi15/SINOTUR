@extends('layouts.app')

@section('title', 'Beneficiarios')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>BENEFICIARIOS</h2>
	@if(session()->has('flash'))
        <div class="alert alert-warning" role="alert">{{ session('flash') }}</div>
    @endif
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<div class="form-inline pull-left">
					<div class="btn-group" role="group" aria-label="Basic example">
						<a href="{{ route('beneficiarios.create')}}" class="btn btn-info" role="button">
							<span class="glyphicon glyphicon-plus"></span>
							<span>Agregar Beneficiario</span>
						</a>
						<a href="{{ route('vehiculo.create')}}" class="btn btn-info" role="button">
							<span class="glyphicon glyphicon-plus"></span>
							<span>Agregar Vehiculo</span>
						</a>
					</div>
				</div>
				<form class="form-inline pull-right" action="{{ action('BeneficiarioController@index')}}" method="GET">
					@csrf
					<div class="form-group">
		                <input type="text" class="form-control" name="rif_organizacion" placeholder="RIF">
		            </div>
					<div class="form-group">
		                <input type="text" class="form-control" name="ci_beneficiario" placeholder="C.I.">
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
						<th>C.I.</th>
						<th>RIF ORGANIZACION</th>
						<th>NOMBRE</th>
						<th>TELEFONO</th>
						<th>CORREO</th>
						<th>ACCIÓN</th>
					</tr>
				</thead>
				<tbody>
					@foreach($beneficiarios as $beneficiario)
						<tr>
							<td>{{ $beneficiario->ci_beneficiario}}</td>
							<td>{{ $beneficiario->organizacion->rif_organizacion}}</td>
							<td>{{ $beneficiario->nom_benef .' ' .$beneficiario->apell_benef}}</td>
							<td>{{ $beneficiario->telef_benef }}</td>
							<td>{{ $beneficiario->correo_benef}}</td>
							<td>
								<a href="{{ action('BeneficiarioController@show', $beneficiario->ci_beneficiario)}}" class="btn btn-info">
									<span class="glyphicon glyphicon-folder-open"></span>
									<span>Ver más</span>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="text-center">
			{!! $beneficiarios->render() !!}
		</div>
	</div>
@endsection