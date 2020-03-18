@extends('layouts.app')

@section('title', 'Crear Almacén')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>CREAR ALMACÉN</h2>
	@if(session()->has('flash'))
        <div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
	<form class="form-group" id="form" action="{{route('almacenes.store')}}" method="POST">
		@csrf
		<div class="form-group">
			<table align="center" border=0 width=100%>
				<tr>
					<td>Nombre del Almacén</td>
					<td>Estado</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="nom_almacen" value="{{old('nom_almacen')}}" placeholder="Nombre del Almacén" required>
					</td>
					<td>
						<select name="estado" class="estados" required>
							<option value="0" disabled="true" selected="true">-Seleccione el Estado-</option>
							@foreach($estados as $estado)
								<option value="{{ $estado['id_estado']}}">{{ $estado['nom_estado']}}</option>
							@endforeach
						</select>
					</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('nom_almacen'))
								<small class="form-text text-danger">{{ $errors->first('nom_almacen') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('estado'))
								<small class="form-text text-danger">{{ $errors->first('estado') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Dirección</td>
					</tr>
					<tr>
						<td>
							<textarea name="direc_almacen" value="{{old('direc_almacen')}}" placeholder="Dirección del Almacen" class="text" required></textarea>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('direc_almacen'))
								<small class="form-text text-danger">{{ $errors->first('direc_almacen') }}</small>
							@endif
						</td>
					</tr>

					<tr align="center">
						<td height=30>
							<br><button type="submit" class="btn btn-primary principal">CREAR ALMACÉN</button>
						</td>
						<td>
							<br><button type="button" onclick="window.location.href='{{action('AlmacenController@create')}}'" class="btn btn-dark nuevo">NUEVO REGISTRO</button>
						</td>
					</tr>
			</table>
		</div>
	</form>

@endsection