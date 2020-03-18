@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h1 align="center">Esta acción no está autorizada</h1>
	<br><br>
	<center>
		<a href="{{ URL::previous() }}" class="btn btn-success" role="button">Volver</a>
	</center>
@endsection