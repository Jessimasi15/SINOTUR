@extends('layouts.app')

@section('title', 'Usuario')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>USUARIO: {{ $user->name}}</h2><br><br>
	<p>{{ $user->email}}</p>
	<p>{{ $user->type}}</p>
@endsection