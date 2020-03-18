@extends('layouts.app')

@section('title', 'Bienvenidos')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
	

@section('content')
		<h2>BIENVENID@ {{ auth()->user()->name }}</h2>
		<img id="img1_bienv" src="{{asset('../images/logo_fontur.png')}}">
		<img id="img2_bienv" src="{{asset('../images/repuestos1.png')}}">
		<div class="panel-footer" align="center">
			<form method="POST" action="{{ route('logout') }}">
				{{ csrf_field() }}
				<button class="btn btn-danger btn-lg">
					<span class="glyphicon glyphicon-log-out"></span>
					<span>CERRAR SESIÓN</span>
				</button>
						
			</form>
		</div>

@endsection