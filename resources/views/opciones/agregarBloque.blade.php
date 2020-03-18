@extends('layouts.app')

@section('title', 'Agregar Bloque')
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>AGREGAR BLOQUE</h2>
	@if(session()->has('flash'))
        <div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
		<form class="form-group" action="/agregarBloque" method="POST">
			@csrf
			<div class="form-group">
				<table align="center" border=0 width=100%>
					<tr>
						<td>Nombre del Bloque</td>
						<td>Nombre Responsable Principal</td>
						<td>Apellido Responsable Principal</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="nom_bloque" placeholder="Ingrese el Nombre del Bloque" value="{{old('nom_bloque')}}" required>
						</td>
						<td>
							<input type="text" name="nom_resp_prin" placeholder="Ingrese el Nombre" value="{{old('nom_resp_prin')}}" required>
						</td>
						<td>
							<input type="text" name="ape_resp_prin" placeholder="Ingrese el Apellido" value="{{old('ape_resp_prin')}}" required>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('nom_bloque'))
								<small class="form-text text-danger">{{ $errors->first('nom_bloque') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('nom_resp_prin'))
								<small class="form-text text-danger">{{ $errors->first('nom_resp_prin') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('ape_resp_prin'))
								<small class="form-text text-danger">{{ $errors->first('ape_resp_prin') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Telefono Responsable Principal</td>
						<td>Nombre Responsable Suplente</td>
						<td>Apellido Responsable Suplente</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="telef_resp_prin" placeholder="0416-0000000" value="{{old('telef_resp_prin')}}" required>
						</td>
						<td>
							<input type="text" name="nom_resp_sup" placeholder="Ingrese el Nombre" value="{{old('nom_resp_prin')}}" required>
						</td>
						<td>
							<input type="text" name="ape_resp_sup" placeholder="Ingrese el Apellido" value="{{old('ape_resp_sup')}}" required>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('telef_resp_prin'))
								<small class="form-text text-danger">{{ $errors->first('telef_resp_prin') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('nom_resp_sup'))
								<small class="form-text text-danger">{{ $errors->first('nom_resp_sup') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('ape_resp_sup'))
								<small class="form-text text-danger">{{ $errors->first('ape_resp_sup') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Telefono Responsable Suplente</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="telef_resp_sup" placeholder="0426-0000000" value="{{old('telef_resp_sup')}}" required>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('telef_resp_sup'))
								<small class="form-text text-danger">{{ $errors->first('telef_resp_sup') }}</small>
							@endif
						</td>
					</tr>


					<tr>
						<td height=30>
							<br><button type="submit" class="btn btn-primary principal">AGREGAR BLOQUE</button>
						</td>
						<td height=30>
							<br><button type="button" onclick="window.location.href='{{action('OpcionesController@bloque')}}'" class="btn btn-dark nuevo">NUEVO BLOQUE</button>
						</td>
					</tr>
				</table>
			</div>
		</form>

@endsection