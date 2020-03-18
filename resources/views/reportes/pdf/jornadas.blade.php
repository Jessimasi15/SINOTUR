<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Reporte Jornadas</title>
	<style type="text/css">
		* {
			font-family: Arial;
		}
		.encabezado {
			margin: 10px 10px 20px 10px;
			display: inline-block;
		}
		.image{
			position: static;
			float: left;
			width: 150px;
			height: 150px;
		}
		.page {
			text-align: center;
		}
		.image2{
			position: static;
			float: right;
			width: 150px;
			height: 125px;
		}
		table {
			margin-top: 40px;
			width: 100%;
		    max-width: 100%;
		    margin-bottom: 20px;
		    border-spacing: 0;
    		border-collapse: collapse;
			text-align: center;
			display: table;
		}
		.thead {
			background-color: darkgrey;
		}
		thead {
			border: 1px solid #212121;
			font-size: 15px;
		}
		th, td {
			border-right: 1px solid #212121;
			border-bottom: 1px solid #212121;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		tbody {
			border: 1px solid #212121;
			font-size: 13px;
		}
		tfoot {
			border: 1px solid #212121;
			font-size: 13px;
		}
	</style>
</head>
<body>
	<div class="container">
	    <div class="encabezado">
	    	<div>
	    		<img class="image" src="./images/logo_fontur.png"/>	
	        	<img class="image2" src="./images/granmisiontransporte.png"/>	
	    	</div>
	        <div class="page">
	        	<h2>Reporte de Jornadas</h2>
	        	<strong>Desde: {{ $start_date }}</strong><br>
	        	<strong>Hasta: {{ $end_date }}</strong>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-xs-12">
	        	<table class="table table-bordered">
					<thead>
						<tr class="thead">
							<th colspan="6">Información Jornada</th>
							<th colspan="3">Responsable de Jornada</th>
						</tr>
						<tr class="thead">
							<th>Fecha</th>
							<th>Nombre</th>
							<th>Estado</th>
							<th>Almacén</th>
							<th>Dirección</th>
							<th>Estatus</th>
							<th>Rif Empresa</th>
							<th>C.I</th>
							<th>Nombre y Apellido</th>
						</tr>
					</thead>
					<tbody>
						@foreach($jornadas as $jornada)
							<tr>
								<td>{{ $jornada->fecha_jornada}}</td>
								<td>{{ $jornada->nom_jornada}}</td>
								<td>{{ $jornada->estado->nom_estado}}</td>
								<td>{{ $jornada->almacen->nom_almacen}}</td>
								<td>{{ $jornada->direc_jornada}}</td>
								<td>{{ $jornada->estatus}}</td>
								<td>{{ $jornada->rif_empresa}}</td>
								<td>{{ $jornada->ci_resp_jorn}}</td>
								<td>{{ $jornada->nom_apell_resp}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
	        </div>
	    </div>
	</div>
</body>
</html>