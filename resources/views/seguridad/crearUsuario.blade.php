@extends('layouts.app')

@section('title', 'Crear Usuario')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>CREAR USUARIO</h2>
	@if(session()->has('flash'))
        <div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
	<br><br>
	<form class="form-group" action="{{ action('SeguridadController@store')}}" method="POST">
		@csrf
		<div class="form-group">
			<table align="center" border=0 width=100%>
				<tr>
					<td>Usuario</td>
					<td>Correo Electronico</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="username" placeholder="Ingrese nombre de usuario" value="{{old('username')}}" required>
					</td>
					<td>
						<input type="text" name="email" placeholder="Ingrese el correo electronico" value="{{old('email')}}" required>
					</td>
				</tr>
				<tr>
					<td>
						@if($errors->has('username'))
							<small class="form-text text-danger">{{ $errors->first('username') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('email'))
							<small class="form-text text-danger">{{ $errors->first('email') }}</small>
						@endif
					</td>
				</tr>
				<tr>
					<td>Contraseña</td>
					<td>Tipo de Usuario</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="password" placeholder="***********" required>
					</td>
					<td>
						<select name="usuarios" required>
							<option value="0" disabled="true" selected="true">-Seleccione Tipo de Usuario-</option>
							@foreach($roles as $role)
								<option value="{{ $role->id}}">{{ $role->name}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td>
						@if($errors->has('password'))
							<small class="form-text text-danger">{{ $errors->first('password') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('usuarios'))
							<small class="form-text text-danger">{{ $errors->first('usuarios') }}</small>
						@endif
					</td>
				</tr>
					

				<tr align="center">
					<td height=30>
						<br><button type="submit" class="btn btn-primary principal">CREAR USUARIO</button>
					</td>
				</tr>
			</table>
		</div>
	</form>

@endsection