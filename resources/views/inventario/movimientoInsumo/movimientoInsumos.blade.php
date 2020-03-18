@extends('layouts.app')

@section('title', 'Movimiento de inventario')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>MOVIMIENTO DE INVENTARIO</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-danger" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
			<form class="form-group" action="{{route('movimientoInventario.store')}}" method="POST">
				@csrf
				<div class="form-group">
					<table align="center" border=0 width=100%>
						<tr>
							<td>Almacén</td>
							<td>Tipo de Insumo</td>
							<td>Marca</td>
						</tr>
						<tr>
							<td>
								<select name="almacen" required>
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
								@if($errors->has('almacen'))
									<small class="form-text text-danger">{{ $errors->first('almacen') }}</small>
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
									<option value="0" disabled="true" selected="true">-Seleccione el Insumo-</option>
								</select>
							</td>
							<td>
								<select name="medida" class="medidas" required>
									<option value="0" disabled="true" selected="true">-Seleccione el Tipo de Presentación-</option>
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
							<td>Número de orden</td>
						</tr>
						<tr>
							<td><input type="text" name="num_orden" placeholder="123456" value="{{old('num_orden')}}" required></td>
						</tr>
						<tr>
							<td>
								@if($errors->has('num_orden'))
									<small class="form-text text-danger">{{ $errors->first('num_orden') }}</small>
								@endif
							</td>
						</tr>


						<tr align="center">
							<td height=30>
								<br><button type="submit" class="btn btn-primary principal">AGREGAR INVENTARIO</button>
							</td>
							<td>
								<br><button type="button" onclick="window.location.href='{{action('MovimientoInsumoController@create')}}'" class="btn btn-dark nuevo">NUEVO REGISTRO</button>
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
                url:'{!!URL::to('marcasInsumo')!!}',
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
	                url:'{!!URL::to('cauchos')!!}',
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
	                url:'{!!URL::to('baterias')!!}',
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
	                url:'{!!URL::to('aceites')!!}',
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