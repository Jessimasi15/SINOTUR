<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Reporte Movimiento de Inventario</title>
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
	        	<h2>Reporte de Movimiento Inventario</h2>
	        	<strong>Desde: {{ $start_date }}</strong><br>
	        	<strong>Hasta: {{ $end_date }}</strong>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-xs-12">
	        	<table class="table table-bordered">
					<thead>
						<tr class="thead">
							<th>N° Reporte</th>
							<th>Fecha Movimiento</th>
							<th>Almacén</th>
							<th>Tipo de Insumo</th>
							<th>Marca</th>
							<th>Detalle de Insumo</th>
							<th>Presentación</th>
							<th>Cantidad</th>
						</tr>
					</thead>
					<tbody>
						@foreach($insumos as $insumo)
							<tr>
								<td>{{ $insumo->numero_orden}}</td>
								<td>{{ $insumo->created_at}}</td>
								<td>{{ $insumo->almacen->nom_almacen}}</td>
								<td>{{ $insumo->tipo_insumo->nom_tipo_insumo}}</td>
								<td>{{ $insumo->marca_insumo->nom_marca_insumo}}</td>
								<td>{{ $insumo->detalle_insumo->nom_detalle_insumo}}</td>
								<td>{{ $insumo->unidad_medida->nom_medida}}</td>
								<td>{{ $insumo->cantidad_movida}}</td>
							</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td colspan="6"></td>
							<td class="thead"><strong>TOTAL</strong></td>
							<td>{{ $total }}</td>
						</tr>
					</tfoot>
				</table>
	        </div>
	    </div>
	</div>
</body>
</html>