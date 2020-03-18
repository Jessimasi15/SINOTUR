@extends('layouts.app')

@section('title', 'Usuarios')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>USUARIOS</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-warning" role="alert">{{ session('flash') }}</div>
    @endif
    <div class="row">
    	<div class="col-md-12">
			<div class="page-header">	
				<div class="form-group pull-left">
	                <a href="{{ route('users.create')}}" class="btn btn-info" role="button">
	                	<span class="glyphicon glyphicon-plus"></span>
	                	<span>Agregar Usuario</span>
	                </a>
	            </div>
				<form class="form-inline pull-right" action="{{ action('SeguridadController@index')}}" method="GET">
					@csrf
					<div class="form-group">
		                <input type="text" class="form-control" name="username" placeholder="Usuario">
		            </div>
		            <div class="form-group">
		                <input type="text" class="form-control" name="usuarios" placeholder="Tipo de Usuario">
		            </div>
		            <div class="form-group">
		                <button type="submit" class="btn btn-default">
		                    <span class="glyphicon glyphicon-search"></span>
		                </button>
		            </div>
				</form>
			</div>
		</div>
	    <div class="col-md-12">
			<table class="table table-striped">
				<thead>
					<tr class="info">
						<th>Nombre de Usuario</th>
						<th>Email</th>
						<th>Tipo de Usuario</th>
						<th>ACCIÓN</th>
					</tr>
				</thead>
				<tbody>
					@foreach($usuarios as $user)
						<tr>
							<td>{{ $user->name}}</td>
							<td>{{ $user->email}}</td>
							<td>
								@foreach($user->roles as $role)
									<p>{{ $role->name}}</p>
								@endforeach
							</td>
							<td>
								<!--<a href="{{ action('SeguridadController@show', $user->id)}}" class="btn btn-info">Ver más</a>-->
								<a href="{{ action('SeguridadController@edit', $user->id)}}" class="btn btn-info">
									<span class="glyphicon glyphicon-pencil"></span>
									<span>Editar</span>
								</a><br><br>
								<form action="{{route('users.destroy', $user->id)}}" method="POST">
									@csrf
									@method('DELETE')
									<button class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')">
										<span class="glyphicon glyphicon-trash"></span>
										<span>Eliminar</span>
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!! $usuarios->render() !!}
			</div>
		</div>
	</div>

@endsection