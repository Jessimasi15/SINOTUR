@extends('layouts.app')

@section('title', 'Agregar Empresa')
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>AGREGAR EMPRESA</h2>
	@if(session()->has('flash'))
        <div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <br>
	<form class="form-group" action="/creacionEmpresa" method="POST">
		@csrf
		<div class="form-group">
			<table align="center" border=0 width=100%>
				<tr>
					<td>RIF Empresa</td>
					<td>Nombre Empresa</td>
				</tr>
				<tr>
					<td><input type="text" name="rif_empresa" placeholder="Ingrese el RIF de la Empresa" required></td>
					<td><input type="text" name="nom_empresa" placeholder="Ingrese el Nombre de la Empresa" required></td>
				</tr>
				<tr>
					<td>
						@if($errors->has('rif_empresa'))
							<small class="form-text text-danger">{{ $errors->first('rif_empresa') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('nom_empresa'))
							<small class="form-text text-danger">{{ $errors->first('nom_empresa') }}</small>
						@endif
					</td>
				</tr>
				<tr>
					<td>Telefono</td>
					<td>Correo</td>
				</tr>
				<tr>
					<td><input type="text" name="telef_empresa" placeholder="0414-0000000" required></td>
					<td><input type="text" name="correo_empresa" placeholder="xxxx@mail.com" required></td>
				</tr>
				<tr>
					<td>
						@if($errors->has('telef_empresa'))
							<small class="form-text text-danger">{{ $errors->first('telef_empresa') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('correo_empresa'))
							<small class="form-text text-danger">{{ $errors->first('correo_empresa') }}</small>
						@endif
					</td>
				</tr>
				<tr>
					<td>Sitio Web</td>
					<td>Estatus</td>
				</tr>
				<tr>
					<td><input type="text" name="sitio_web" placeholder="www.xxxxxxxx.com" required></td>
					<td>
						<select name="estatus" class="estados" required>
							<option>Seleccione el Estatus</option>
							@foreach($estatus as $estatu)
								<option value="{{ $estatu['id_estatus']}}">{{ $estatu['nom_estatus']}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td>
						@if($errors->has('sitio_web'))
							<small class="form-text text-danger">{{ $errors->first('sitio_web') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('estatus'))
							<small class="form-text text-danger">{{ $errors->first('estatus') }}</small>
						@endif
					</td>
				</tr>
				<tr>
					<td>Twitter</td>
					<td>Instagram</td>
				</tr>
				<tr>
					<td><input type="text" name="twitter" placeholder="Ingrese el Twitter de la empresa"></td>
					<td><input type="text" name="instagram" placeholder="Ingrese el Instagram de la empresa"></td>
				</tr>
				<tr>
					<tr>
					<td>
						@if($errors->has('twitter'))
							<small class="form-text text-danger">{{ $errors->first('twitter') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('instagram'))
							<small class="form-text text-danger">{{ $errors->first('instagram') }}</small>
						@endif
					</td>
				</tr>
					<td>Facebook</td>
					<td>Dirección de la empresa</td>
				</tr>
				<tr>
					<td><input type="text" name="facebook" placeholder="Ingrese el Facebook de la empresa"></td>
					<td><textarea name="direc_emp" placeholder="Ingrese la Dirección de la Empresa" class="text"></textarea></td>
				</tr>
				<tr>
					<tr>
					<td>
						@if($errors->has('facebook'))
							<small class="form-text text-danger">{{ $errors->first('facebook') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('direc_emp'))
							<small class="form-text text-danger">{{ $errors->first('direc_emp') }}</small>
						@endif
					</td>
				</tr>

				<tr>
					<td height=30>
						<br><button type="submit" class="btn btn-primary principal">AGREGAR EMPRESA</button>
					</td>
					<td height=30>
						<br><button type="button" onclick="window.location.href='{{action('EmpresaController@empresa')}}'" class="btn btn-dark nuevo">NUEVO REGISTRO</button>
					</td>
				</tr>
			</table>
		</div>
	</form>

@endsection