@extends('layouts.app')

@section('title', 'Editar Usuario')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>EDITAR USUARIO</h2><br><br>
	<form class="form-group" action="{{ action('SeguridadController@update', $user->id)}}" method="POST">
		@method('PUT')
		@csrf
		<div class="form-group">
			<table align="center" border=0 width=100%>
				<tr>
					<td>Usuario</td>
					<td>Correo Electronico</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="username" value="{{ $user->name}}" required>
					</td>
					<td>
						<input type="text" name="email" value="{{ $user->email}}" required>
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
					<td>Tipo de Usuario</td>
				</tr>
				<tr>
					<td>
						<select name="usuarios" required>
							<option>-Seleccione Tipo de Usuario-</option>
							@foreach($roles as $role)
								<option value="{{ $role->id}}">{{ $role->name}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td>
						@if($errors->has('usuarios'))
							<small class="form-text text-danger">{{ $errors->first('usuarios') }}</small>
						@endif
					</td>
				</tr>
					

				<tr align="center">
					<td height=30>
						<br><button type="submit" class="btn btn-primary principal">ACTUALIZAR</button>
					</td>
				</tr>
			</table>
		</div>
	</form>

@endsection