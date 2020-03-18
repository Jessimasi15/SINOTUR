@extends('layouts.app')

@section('title', 'Agregar Coordinación')
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>AGREGAR COORDINACIÓN</h2>
	@if(session()->has('flash'))
        <div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <br>
	<form class="form-group" action="/creacionCoordinacion" method="POST">
		@csrf
		<div class="form-group">
			<table align="center" border=0 width=100%>
				<tr>
					<td>Empresa</td>
					<td>Nombre de Coordinación</td>
				</tr>
				<tr>
					<td>
						<!--<input type="text" name="empresa" placeholder="Ingrese RIF de la empresa">-->
						<select name="empresa" class="empresas" required>
							<option value="0" disabled="true" selected="true">-Seleccione la Empresa-</option>
							@foreach($empresas as $empresa)
								<option value="{{ $empresa['id_empresa']}}">{{ $empresa['nom_empresa']}}</option>
							@endforeach
						</select>
					</td>
					<td><input type="text" name="nom_coord" placeholder="Ingrese la Coordinación" value="{{old('nom_coord')}}" required></td>
				</tr>
				<tr>
					<tr>
					<td>
						@if($errors->has('empresa'))
							<small class="form-text text-danger">{{ $errors->first('empresa') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('nom_coord'))
							<small class="form-text text-danger">{{ $errors->first('nom_coord') }}</small>
						@endif
					</td>
				</tr>
				<tr>
					<td>Telefono</td>
					<td>Dirección de la Coordinación</td>
				</tr>
				<tr>
					<td><input type="text" name="telef_coord" placeholder="0414-0000000" value="{{old('telef_coord')}}" required></td>
					<td><textarea name="direc_coord" placeholder="Ingrese la Dirección de la Coordinación" class="text" value="{{old('direc_coord')}}" required></textarea></td>
				</tr>
				<tr>
					<tr>
					<td>
						@if($errors->has('telef_coord'))
							<small class="form-text text-danger">{{ $errors->first('telef_coord') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('direc_suc'))
							<small class="form-text text-danger">{{ $errors->first('direc_suc') }}</small>
						@endif
					</td>
				</tr>

				<tr>
					<td height=30>
						<br><button type="submit" class="btn btn-primary principal">AGREGAR COORDINACION</button>
					</td>
					<td height=30>
						<br><button type="button" onclick="window.location.href='{{action('EmpresaController@sucursal')}}'" class="btn btn-dark nuevo">NUEVO REGISTRO</button>
					</td>
				</tr>
			</table>
		</div>
	</form>
@endsection