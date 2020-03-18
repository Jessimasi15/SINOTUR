@extends('layouts.app')

@section('title', 'Editar Organización ')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>EDITAR</h2><br><br>
	@if(session()->has('alert'))
    	<div class="alert alert-danger" role="alert">{{ session('alert') }}</div>
    @endif
	<form class="form-group" action="{{ route('organizaciones.update', $organizacion->rif_organizacion)}}" method="POST">
		@method('PUT')
		@csrf
		<div class="form-group">
			<table align="center" border=0 width=100%>
				<tr>
					<td>RIF:</td>
					<td>Nombre:</td>
					<td>Tipo de Empresa:</td>
				</tr>
				<tr>
					<td><span>{{ $organizacion->rif_organizacion}}</span></td>
					<td><span>{{ $organizacion->nom_organizacion}}</span></td>
					<td>
						<select required name="tipo_organ">
							<option selected value="0">Seleccione Tipo de Organización</option>
								@foreach($torganizaciones as $torganizacion)
                					<option value="{{$torganizacion->id_tipo_organ}}">{{$torganizacion->nom_tipo_organ}}</option>
            					@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td>
						@if($errors->has('rif_org'))
							<small class="form-text text-danger">{{ $errors->first('rif_org') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('nom_org'))
							<small class="form-text text-danger">{{ $errors->first('nom_org') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('tipo_organ'))
							<small class="form-text text-danger">{{ $errors->first('tipo_organ') }}</small>
						@endif
					</td>
				</tr>
				<tr>
					<td>Cedula Presidente:</td>
					<td>Nombre Presidente:</td>
					<td>Apellido Presidente:</td>
				</tr>
				<tr>
					<td><input type="text" name="ci_presi" value="{{ $organizacion->ci_presidente}}" required></td>
					<td><input type="text" name="nom_presi" value="{{ $organizacion->nom_presidente}}" required></td>
					<td><input type="text" name="apell_presi" value="{{ $organizacion->apell_presidente}}" required></td>
				</tr>
				<tr>
					<td>
						@if($errors->has('ci_presi'))
							<small class="form-text text-danger">{{ $errors->first('ci_presi') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('nom_presi'))
							<small class="form-text text-danger">{{ $errors->first('nom_presi') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('apell_presi'))
							<small class="form-text text-danger">{{ $errors->first('apell_presi') }}</small>
						@endif
					</td>
				</tr>
				<tr>
					<td>Correo Electronico:</td>
					<td>Telefono Local:</td>
					<td>Telefono Celular:</td>
				</tr>
				<tr>
					<td><input type="text" name="email_org" value="{{ $organizacion->correo_organ}}" required></td>
					<td><input type="text" name="telf_local" value="{{ $organizacion->telef_local}}" required></td>
					<td><input type="text" name="telf_cel" value="{{ $organizacion->telef_celular}}" required></td>
				</tr>
				<tr>
					<td>
						@if($errors->has('email_org'))
							<small class="form-text text-danger">{{ $errors->first('email_org') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('telf_local'))
							<small class="form-text text-danger">{{ $errors->first('telf_local') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('telf_cel'))
							<small class="form-text text-danger">{{ $errors->first('telf_cel') }}</small>
						@endif
					</td>
				</tr>
				<tr>
					<td>Bloque</td>
					<td>Ruta de Organización</td>
					<td>Dirección de la Organización</td>
				</tr>
				<tr>
					<td>
						<select name="bloque" required>
							<option selected value="0">Seleccione Bloque</option>
							@foreach($bloques as $bloque)
								<option value="{{$bloque->id_bloque}}">{{$bloque->nom_bloque}}</option>
							@endforeach
						</select>
					</td>
					<td><textarea name="ruta_org" value="{{ $organizacion->ruta_organ}}" class="text" required>{{ $organizacion->ruta_organ}}</textarea></td>
					<td><textarea name="direc_org" value="{{ $organizacion->direc_organ}}" class="text" required>{{ $organizacion->direc_organ}}</textarea></td>
				</tr>
				<tr>
					<td>
						@if($errors->has('bloque'))
							<small class="form-text text-danger">{{ $errors->first('bloque') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('ruta_org'))
							<small class="form-text text-danger">{{ $errors->first('ruta_org') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('direc_org'))
							<small class="form-text text-danger">{{ $errors->first('direc_org') }}</small>
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