@extends('layouts.app')

@section('title', 'Cierre de Operativo')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>CIERRE DE OPERATIVO</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
		<form class="form-group" action="{{route('cierre.store')}}" method="POST">
			@csrf
			<div class="form-group">
				<table align="center" border=0 width=100%>
					<tr>
						<td>Nombre de la Jornada</td>
					</tr>
					<tr>
						<td>
							<select name="nom_jorn" required>
								<option value="0" disabled="true" selected="true">-Seleccione el Operativo-</option>
								@foreach($operativos as $operativo)
									<option value="{{ $operativo['id_jornada']}}">{{ $operativo['nom_jornada']}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('nom_jorn'))
								<small class="form-text text-danger">{{ $errors->first('nom_jorn') }}</small>
							@endif
						</td>					
					</tr>
					
					<tr align="center">
						<td height=30>
							<br><button type="submit" class="btn btn-primary principal">CERRAR JORNADA</button>
						</td>
					</tr>
				</table>
			</div>
		</form>

@endsection