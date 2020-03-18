@extends('layouts.app')

@section('title', 'Entrega')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>ENTREGA DE INSUMOS</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif<br><br>
    <form class="form-group" action="{{route('entrega.store')}}" method="POST">
    	@csrf
    	<div class="form-group">
			<table align="center" border=0 width=100%>
				<tr>
					<td>Jornada</td>
					<td>Placa</td>
				</tr>
				<tr>
					<td>
						<select name="jornada" required>
							<option value="0" disabled="true" selected="true">-Seleccione la Jornada-</option>
							@foreach($jornadas as $jornada)
								<option value="{{ $jornada->id_jornada}}">{{ $jornada->nom_jornada}}</option>
							@endforeach
						</select>
					</td>
					<td><input type="text" name="placa" placeholder="Ingrese la Placa del Vehiculo" value="{{old('placa')}}" required></td>
				</tr>
				<tr>
					<td>
						@if($errors->has('jornada'))
							<small class="form-text text-danger">{{ $errors->first('jornada') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('placa'))
							<small class="form-text text-danger">{{ $errors->first('placa') }}</small>
						@endif
					</td>
				</tr>
			</table>

			<tr align="center">
				<td height=30>
					<br><button type="submit" class="btn btn-primary principal">BUSCAR</button>
				</td>
			</tr>
		</div>
    </form>
		<!--<form class="form-group" action="{{route('entrega.store')}}" method="POST">
			@csrf
			<div class="form-group">
				<table align="center" border=0 width=100%>
					<tr>
						<td>Placa</td>
						<td>Cedula del Beneficiario</td>
						<td>RIF de la Organizacion</td>
					</tr>
					<tr>
						<td><input type="text" name="placa" placeholder="Ingrese la Placa del Vehiculo"></td>
						<td><input type="text" name="ci_benef" placeholder="Ingrese la C.I. del Beneficiario"></td>
						<td><input type="text" name="rif_org" placeholder="Ingrese el RIF de la Organización"></td>
					</tr>
					<tr>
						<td>
							@if($errors->has('placa'))
								<small class="form-text text-danger">{{ $errors->first('placa') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('ci_benef'))
								<small class="form-text text-danger">{{ $errors->first('ci_benef') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('rif_org'))
								<small class="form-text text-danger">{{ $errors->first('rif_org') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Tipo de Vehiculo</td>
						<td>Serial Carroceria</td>
						<td>Serial Motor</td>
					</tr>
					<tr>
						<td>
							<select name="tipo_vehic">
								<option>Seleccione Tipo de Vehiculo</option>
								
							</select>
						</td>
						<td><input type="text" name="serial_carr" placeholder="Serial Carroceria del Vehiculo"></td>
						<td><input type="text" name="serial_motor" placeholder="Serial Moto del Vehiculo"></td>
					</tr>
					<tr>
						<td>
							@if($errors->has('tipo_vehic'))
								<small class="form-text text-danger">{{ $errors->first('tipo_vehic') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('serial_carr'))
								<small class="form-text text-danger">{{ $errors->first('serial_carr') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('serial_motor'))
								<small class="form-text text-danger">{{ $errors->first('serial_motor') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Puestos</td>
					</tr>
					<tr>
						<td><input type="text" name="puestos" placeholder="Ingrese la Cantidad de puestos"></td>
					</tr>
					<tr>
						<td>
							@if($errors->has('puestos'))
								<small class="form-text text-danger">{{ $errors->first('puestos') }}</small>
							@endif
						</td>
					</tr>


					<tr align="center">
						<td height=30>
							<br><button type="submit" class="btn btn-primary">ENTREGA INSUMO</button>
						</td>
						<td>
							<br><button type="reset" class="btn btn-dark">NUEVA ENTREGA</button>
						</td>
					</tr>
				</table>
			</div>
		</form>-->

@endsection