@extends('layouts.app')

@section('title', 'Beneficiario')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>BENEFICIARIO: {{ $beneficiario->nom_benef}} {{ $beneficiario->apell_benef}}</h2>
	@if(session()->has('flash'))
        <div class="alert alert-warning" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
	<div class="container">
		<div class="row">
    		<div class="col-sm-7">
				<table class="table table-striped">
					<tr>
						<th>C.I.:</th>
						<td>{{ $beneficiario->ci_beneficiario}}</td>
					</tr>
					<tr>
						<th>Nombre:</th>
						<td>{{ $beneficiario->nom_benef}} {{ $beneficiario->apell_benef}}</td>
					</tr>
					<tr>
						<th>Organización:</th>
						<td>{{ $beneficiario->organizacion->rif_organizacion}}</td>
					</tr>
					<tr>
						<th>Nombre de la Organización:</th>
						<td>{{ $beneficiario->organizacion->nom_organizacion}}</td>
					</tr>
					<tr>
						<th>Tipo de Beneficiario:</th>
						<td>{{ $beneficiario->tipo_beneficiario->nom_tipo_benef}}</td>
					</tr>
					<tr>
						<th>
							Estado:
						</th>
						<td>
							{{ $beneficiario->estado->nom_estado}}
						</td>
					</tr>
					<tr>
						<th>
							Municipio:
						</th>
						<td>
							{{ $beneficiario->municipio->nom_munic}}
						</td>
					</tr>
					<tr>
						<th>
							Parroquia:
						</th>
						<td>
							{{ $beneficiario->parroquia->nom_parroq}}
						</td>
					</tr>
					<tr>
						<th>Teléfono:</th>
						<td>{{ $beneficiario->telef_benef}}</td>
					</tr>
					<tr>
						<th>Correo:</th>
						<td>{{ $beneficiario->correo_benef}}</td>
					</tr>
					<tr>
						<th>Dirección:</th>
						<td>{{ $beneficiario->direc_benef}}</td>
					</tr>
					<tr>
						<th>Placa:</th>
						<td>
							@foreach($vehiculos as $vehiculo)
							<p>
								{{ $vehiculo->placa}}
								<a href="{{ route('vehiculo.show', $vehiculo->placa)}}" class="btn btn-info" role="button">
									<span class="glyphicon glyphicon-folder-open"></span>
									<span>Ver más</span>
								</a>
							</p>
							@endforeach
						</td>
					</tr>
				</table>
    			
    		</div>
    		<div class="col-sm-2">
    			<table class="table table-striped">

    				<tr>
    					<th>ACCIÓN</th>
    				</tr>
    				<tr>
    					<td align="center">
    						<a href="{{ route('beneficiarios.edit', $beneficiario->ci_beneficiario)}}" class="btn btn-info" role="button">
    							<span class="glyphicon glyphicon-pencil"></span>
    							<span>Editar Beneficiario</span>
    						</a>
    					</td>
    				</tr>
    				<tr>
    					<td align="center">
							<form action="{{ action('BeneficiarioController@destroy', $beneficiario->ci_beneficiario)}}" method="POST">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')" role="button">
									<span class="glyphicon glyphicon-trash"></span>
									<span>Eliminar</span>
								</button>
							</form>
    					</td>
    				</tr>
    				<tr>
    					<td align="center">
    						<a href="{{ action('BeneficiarioController@index')}}" class="btn btn-success" role="button">
    							<span class="glyphicon glyphicon-circle-arrow-left"></span>
    							<span>Volver</span>
    						</a>
    					</td>
    				</tr>
    			</table>
    		</div>
    	</div>
    </div>
	
@endsection