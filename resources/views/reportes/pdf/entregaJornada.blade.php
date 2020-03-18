<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Reporte de Entrega a Beneficirios</title>
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
	        	<h2>Entrega a Beneficiarios</h2>
	        	<strong>Fecha de la Jornada: {{ $jornada->fecha_jornada }}</strong><br>
	        	<strong>Nombre de la Jornada: {{ $jornada->nom_jornada }}</strong>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-xs-12">
	        	<table class="table table-bordered">
					<thead>
						<tr class="thead">
							<th>Placa</th>
							<th>Beneficiario</th>
							<th>Organización</th>
							<th>Tipo de Insumo</th>
							<th>Detalle de Insumo</th>
							<th>Presentación</th>
							<th>Estatus</th>
							<th>Cantidad</th>
						</tr>
					</thead>
					<tbody>
						@foreach($beneficiarios as $beneficiario)
							<tr>
								<td>{{ $beneficiario->placa}}</td>
								<td>
									{{ $beneficiario->vehiculo->beneficiario->ci_beneficiario}}<br>
									{{ $beneficiario->vehiculo->beneficiario->nom_benef}} {{ $beneficiario->vehiculo->beneficiario->apell_benef}}
								</td>
								<td>
									{{ $beneficiario->vehiculo->organizacion->rif_organizacion}}<br>
									{{ $beneficiario->vehiculo->organizacion->nom_organizacion}}
								</td>
								<td>{{ $beneficiario->tipo_insumo->nom_tipo_insumo}}</td>
								<td>{{ $beneficiario->detalle_insumo->nom_detalle_insumo}}</td>
								<td>{{ $beneficiario->unidad_medida->nom_medida}}</td>
								<td>{{ $beneficiario->estatus }}</td>
								<td>{{ $beneficiario->cantidad_entregada}}</td>
							</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"></td>
							<td class="thead" colspan="2"><strong>TOTAL ENTREGADO</strong></td>
							<td>{{ $total }}</td>
						</tr>
					</tfoot>
				</table>
	        </div>
	    </div>
	</div>
</body>
</html>