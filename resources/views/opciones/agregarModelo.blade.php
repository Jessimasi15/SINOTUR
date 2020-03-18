@extends('layouts.app')

@section('title', 'Agregar Modelo')
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>AGREGAR MODELO DEL VEHICULO</h2>
	@if(session()->has('flash'))
        <div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
		<form class="form-group" action="/agregarModelo" method="POST">
			@csrf
			<div class="form-group">
				<table align="center" border=0 width=100%>
					<tr>
						<td>Marca del Vehiculo</td>
						<td>Modelo del Vehiculo</td>
						<td>Tipo de Vehiculo</td>
					</tr>
					<tr>
						<td>
							<select name="marca" required>
								<option value="0" disabled="true" selected="true">-Seleccione la Marca-</option>
								@foreach($marcas as $marca)
									<option value="{{ $marca['id_marca']}}">{{ $marca['nom_marca']}}</option>
								@endforeach
							</select>
						</td>
						<td>
							<input type="text" name="nom_modelo" placeholder="Ingrese el Modelo del Vehiculo" value="{{old('nom_modelo')}}" required>
						</td>
						<td>
							<select name="tipo_vehic" required>
								<option value="0" disabled="true" selected="true">-Seleccione el Tipo de Vehiculo-</option>
								@foreach($tvehiculos as $tvehiculo)
									<option value="{{ $tvehiculo['id_tipo_vehiculo']}}">{{ $tvehiculo['nom_tipo_vehiculo']}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('marca'))
								<small class="form-text text-danger">{{ $errors->first('marca') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('nom_modelo'))
								<small class="form-text text-danger">{{ $errors->first('nom_modelo') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('tipo_vehic'))
								<small class="form-text text-danger">{{ $errors->first('tipo_vehic') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Chasis</td>
						<td>Carroceria</td>
						<td>Tipo de Caucho</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="chasis" placeholder="Ingrese Chasis" value="{{old('chasis')}}" required>
						</td>
						<td>
							<input type="text" name="carroceria" placeholder="Ingrese Carroceria" value="{{old('carroceria')}}" required>
						</td>
						<td>
							<select name="tipo_caucho" required>
								<option value="0" disabled="true" selected="true">-Seleccione el Tipo de Caucho-</option>
								@foreach($cauchos as $caucho)
									<option value="{{ $caucho['id_detalle_insumo']}}">{{ $caucho['nom_detalle_insumo']}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('chasis'))
								<small class="form-text text-danger">{{ $errors->first('chasis') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('carroceria'))
								<small class="form-text text-danger">{{ $errors->first('carroceria') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('tipo_caucho'))
								<small class="form-text text-danger">{{ $errors->first('tipo_caucho') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Cantidad de Cauchos</td>
						<td>Tipo de Aceite</td>
						<td>Cantidad de Litros de Aceite</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="cantidad_caucho" placeholder="Ingrese la Cantidad de cauchos" value="{{old('cantidad_caucho')}}" required>
						</td>
						<td>
							<select name="tipo_aceite" required>
								<option value="0" disabled="true" selected="true">-Seleccione el Tipo de Aceite-</option>
								@foreach($aceites as $aceite)
									<option value="{{ $aceite['id_detalle_insumo']}}">{{ $aceite['nom_detalle_insumo']}}</option>
								@endforeach
							</select>
						</td>
						<td>
							<input type="text" name="cantidad_litros" placeholder="Ingrese la Cantidad de litros" value="{{old('cantidad_litros')}}" required>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('cantidad_caucho'))
								<small class="form-text text-danger">{{ $errors->first('cantidad_caucho') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('tipo_aceite'))
								<small class="form-text text-danger">{{ $errors->first('tipo_aceite') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('cantidad_litros'))
								<small class="form-text text-danger">{{ $errors->first('cantidad_litros') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Tipo de Bateria</td>
						<td>Número de Puestos</td>
					</tr>
					<tr>
						<td>
							<select name="tipo_bateria" required>
								<option value="0" disabled="true" selected="true">-Seleccione Tipo de Bateria-</option>
								@foreach($baterias as $bateria)
									<option value="{{ $bateria['id_detalle_insumo']}}">{{ $bateria['nom_detalle_insumo']}}</option>
								@endforeach
							</select>
						</td>
						<td>
							<input type="text" name="num_puestos" placeholder="Ingrese el Número de puestos" value="{{old('num_puestos')}}" required>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('tipo_bateria'))
								<small class="form-text text-danger">{{ $errors->first('tipo_bateria') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('num_puestos'))
								<small class="form-text text-danger">{{ $errors->first('num_puestos') }}</small>
							@endif
						</td>
					</tr>


					<tr>
						<td height=30>
							<br><button type="submit" class="btn btn-primary principal">AGREGAR MODELO</button>
						</td>
						<td height=30>
							<br><button type="button" onclick="window.location.href='{{action('OpcionesController@modelo')}}'" class="btn btn-dark nuevo">NUEVO MODELO</button>
						</td>
					</tr>
				</table>
			</div>
		</form>

@endsection