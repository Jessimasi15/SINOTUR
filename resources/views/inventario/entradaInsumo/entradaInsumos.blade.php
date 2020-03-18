@extends('layouts.app')

@section('title', 'Agregar Inventario')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

	<script>
		function calcular(){
			var P = document.formulario.monto_compra.value;  // Obtenemos la primera variable del formulario
			var P = eval(P);
			var calculo = P*30;
			var porcentaje = calculo/100; //Aqui nos da el porcentaje calculado
			document.formulario.ganancia.value = (porcentaje);
			var total = P + porcentaje; // Aqui se suma el porcentaje con el valor que se lleno
			document.formulario.monto_venta.value = (total); //Y con esto, lo mostramos en un formulario
		}
	</script>

@section('content')
	<h2>AGREGAR INVENTARIO</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
			<form class="form-group" action="{{route('entradaInventario.store')}}" method="POST" name="formulario">
				@csrf
				<div class="form-group">
					<table align="center" border=0 width=100%>
						<tr>
							<td>Número de orden</td>
							<td>Fecha de despacho</td>
							<td>Fecha de entrada</td>
						</tr>
						<tr>
							<td><input type="text" name="num_orden" placeholder="123456" value="{{old('num_orden')}}" required></td>
							<td><input type="date" name="fecha_desp" value="{{old('fecha_desp')}}" required></td>
							<td><input type="date" name="fecha_inven" value="{{old('fecha_inven')}}" required></td>
						</tr>
						<tr>
							<td>
								@if($errors->has('num_orden'))
									<small class="form-text text-danger">{{ $errors->first('num_orden') }}</small>
								@endif
							</td>
							<td>
								@if($errors->has('fecha_desp'))
									<small class="form-text text-danger">{{ $errors->first('fecha_desp') }}</small>
								@endif
							</td>
							<td>
								@if($errors->has('fecha_inven'))
									<small class="form-text text-danger">{{ $errors->first('fecha_inven') }}</small>
								@endif
							</td>
						</tr>
						<tr>
							<td>Almacén</td>
							<td>Tipo de Insumo</td>
							<td>Marca</td>
						</tr>
						<tr>
							<td>
								<select name="nom_almacen" required>
									<option value="0" disabled="true" selected="true">-Seleccione el Almacén-</option>
									@foreach($almacenes as $almacen)
										<option value="{{ $almacen['id_almacen']}}">{{ $almacen['nom_almacen']}}</option>
									@endforeach
								</select>
							</td>
							<td>
								<select name="tipo_insumo" class="tinsumos" required>
									<option value="0" disabled="true" selected="true">-Seleccione el Tipo-</option>
									@foreach($tinsumos as $tinsumo)
										<option value="{{ $tinsumo['id_tipo_insumo']}}">{{ $tinsumo['nom_tipo_insumo']}}</option>
									@endforeach
								</select>
							</td>
							<td>
								<select name="marca_insumos" class="marca_insumos" required>
									<option value="0" disabled="true" selected="true">-Marca de Insumo-</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								@if($errors->has('nom_almacen'))
									<small class="form-text text-danger">{{ $errors->first('nom_almacen') }}</small>
								@endif
							</td>
							<td>
								@if($errors->has('tipo_insumo'))
									<small class="form-text text-danger">{{ $errors->first('tipo_insumo') }}</small>
								@endif
							</td>
							<td>
								@if($errors->has('marca_insumos'))
									<small class="form-text text-danger">{{ $errors->first('marca_insumos') }}</small>
								@endif
							</td>
						</tr>
						<tr>
							<td>Detalle de Insumo</td>
							<td>Tipo de Presentación</td>
							<td>Cantidad</td>
						</tr>
						<tr>
							<td>
								<select name="det_insumo" class="insumos" required>
									<option value="0" disabled="true" selected="true">-Detalle de Insumo-</option>
								</select>
							</td>
							<td>
								<select name="medida" class="medidas" required>
									<option value="0" disabled="true" selected="true">-Tipo de Presentación-</option>
								</select>
							</td>
							<td>
			                    <input type="text" name="cantidad" placeholder="100" value="{{old('cantidad')}}" required>
							</td>
						</tr>
						<tr>
							<td>
								@if($errors->has('det_insumo'))
									<small class="form-text text-danger">{{ $errors->first('det_insumo') }}</small>
								@endif
							</td>
							<td>
								@if($errors->has('medida'))
									<small class="form-text text-danger">{{ $errors->first('medida') }}</small>
								@endif
							</td>
							<td>
								@if($errors->has('cantidad'))
									<small class="form-text text-danger">{{ $errors->first('cantidad') }}</small>
								@endif
							</td>
						</tr>
						<tr>
							<td>Precio de Compra</td>
							<td>Precio con ganancia 30%</td>
							<td>Precio de Venta</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="monto_compra" placeholder="100.00" onChange="calcular();" value="{{old('monto_compra')}}" required>
							</td>
							<td><input type="text" name="ganancia" placeholder="30.00" value="{{old('ganancia')}}" required></td>
							<td>
                    			<input type="text" name="monto_venta" placeholder="130.00" value="{{old('monto_venta')}}" required>
							</td>
						</tr>
						<tr>
							<td>
								@if($errors->has('monto_compra'))
									<small class="form-text text-danger">{{ $errors->first('monto_compra') }}</small>
								@endif
							</td>
							<td>
								@if($errors->has('ganancia'))
									<small class="form-text text-danger">{{ $errors->first('ganancia') }}</small>
								@endif
							</td>
							<td>
								@if($errors->has('monto_venta'))
									<small class="form-text text-danger">{{ $errors->first('monto_venta') }}</small>
								@endif
							</td>
						</tr>


						<tr align="center">
							<td height=30>
								<br><button type="submit" class="btn btn-primary principal">AGREGAR INVENTARIO</button>
							</td>
							<td>
								<br><button type="button" onclick="window.location.href='{{action('EntradaInsumoController@create')}}'" class="btn btn-dark nuevo">NUEVO REGISTRO</button>
							</td>
						</tr>
					</table>
				</div>
			</form>


<script type="text/javascript">
	$(document).ready(function(){

		// TIPO DE INSUMO - MARCA
		$(document).on('change', '.tinsumos', function(){
			var tins=$(this).val();
			//console.log(tins);
			var div=$(this).parents();
			var op=" ";

			$.ajax({
                type:'get',
                url:'{!!URL::to('marcas')!!}',
                data:{'id_marca_insumo':tins},
                success:function(data){
                	//console.log(data);
                	op+='<option value="0" selected disabled>-Seleccione Marca de Insumo-</option>';
                	for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id_marca_insumo+'">'+data[i].nom_marca_insumo+'</option>';
                   	}
                	div.find('.marca_insumos').html(" ");
                   	div.find('.marca_insumos').append(op);
                }
            });
		});
		 $(document).on('change', '.marca_insumos', function(){
            var marca=$(this).val();
            //console.log(marca);
        });
		
		// TIPO DE INSUMO - DETALLE INSUMO
		$(document).on('change', '.tinsumos', function(){
			var tins=$(this).val();
			var tinsumo=tins;
			//console.log(tinsumo);
			var div=$(this).parents();
			var op=" ";

			if (tinsumo == "1") {
				$.ajax({
					type:'get',
	                url:'{!!URL::to('insumosCaucho')!!}',
	                data:{'id_detalle_insumo':tins},
	                success:function(data){
	                	//console.log(data);
	                	op+='<option value="0" selected disabled>-Seleccione Caucho-</option>';
	                	for(var i=0;i<data.length;i++){
	                    op+='<option value="'+data[i].id_detalle_insumo+'">'+data[i].nom_detalle_insumo+'</option>';
	                   	}
	                   	div.find('.insumos').html(" ");
	                   	div.find('.insumos').append(op);
	                }
				});
			};

			if (tinsumo == "2") {
				$.ajax({
					type:'get',
	                url:'{!!URL::to('insumosBateria')!!}',
	                data:{'id_detalle_insumo':tins},
	                success:function(data){
	                	//console.log(data);
	                	op+='<option value="0" selected disabled>-Seleccione Bateria-</option>';
	                	for(var i=0;i<data.length;i++){
	                    op+='<option value="'+data[i].id_detalle_insumo+'">'+data[i].nom_detalle_insumo+'</option>';
	                   	}
	                   	div.find('.insumos').html(" ");
	                   	div.find('.insumos').append(op);
	                }
				});
			};

			if (tinsumo == "3") {
				$.ajax({
					type:'get',
	                url:'{!!URL::to('insumosAceite')!!}',
	                data:{'id_detalle_insumo':tins},
	                success:function(data){
	                	//console.log(data);
	                	op+='<option value="0" selected disabled>-Seleccione Aceite-</option>';
	                	for(var i=0;i<data.length;i++){
	                    op+='<option value="'+data[i].id_detalle_insumo+'">'+data[i].nom_detalle_insumo+'</option>';
	                   	}
	                   	div.find('.insumos').html(" ");
	                   	div.find('.insumos').append(op);
	                }
				});
			};
		});

		// TIPO DE INSUMO - UNIDAD DE MEDIDA
		$(document).on('change', '.tinsumos', function(){
			var tins=$(this).val();
			//console.log(tins);
			var div=$(this).parents();
			var op=" ";

			$.ajax({
                type:'get',
                url:'{!!URL::to('medida')!!}',
                data:{'id_medida':tins},
                success:function(data){
                	//console.log(data);
                	op+='<option value="0" selected disabled>-Seleccione Tipo de Presentación-</option>';
                	for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id_medida+'">'+data[i].nom_medida+'</option>';
                   	}
                	div.find('.medidas').html(" ");
                   	div.find('.medidas').append(op);
                }
            });
		});
		 $(document).on('change', '.medidas', function(){
            var medid=$(this).val();
            //console.log(medid);
        });
		
	});
</script>

@endsection
