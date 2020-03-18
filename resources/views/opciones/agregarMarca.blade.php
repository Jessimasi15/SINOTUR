@extends('layouts.app')

@section('title', 'Agregar Marca')
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>AGREGAR MARCA DEL VEHICULO</h2>
	@if(session()->has('flash'))
        <div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
	<form class="form-group" action="/agregarMarca" method="POST">
		@csrf
		<div class="form-group">
			<table align="center" border=0 width=100%>
				<tr>
					<td>Marca del Vehiculo</td>
				</tr>
				<tr>
					<td><input type="text" name="nom_marca" placeholder="Ingrese la Marca del vehiculo" required></td>
				</tr>
				<tr>
					<td>
						@if($errors->has('nom_marca'))
							<small class="form-text text-danger">{{ $errors->first('nom_marca') }}</small>
						@endif
					</td>
				</tr>

				<tr>
					<td height=30>
						<br><button type="submit" class="btn btn-primary principal">AGREGAR MARCA</button>
					</td>
					<td>
						<a href="{{ route('modelo')}}" class="btn btn-dark"  role="button">AGREGAR MODELO</a>
					</td>
				</tr>
			</table>
		</div>
	</form>

@endsection