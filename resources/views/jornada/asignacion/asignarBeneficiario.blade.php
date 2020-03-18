@extends('layouts.app')

@section('title', 'Asignación de Beneficiarios')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>ASIGNAR BENEFICIARIOS</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    @if(session()->has('alert'))
    	<div class="alert alert-danger" role="alert">{{ session('alert') }}</div>
    @endif
    <br><br>
		<form class="form-group" action="{{route('asignacion.store')}}" method="POST">
			@csrf
			<div class="form-group">
				<table align="center" border=0 width=100%>
					<tr>
						<td>Nombre de la Jornada</td>
						<td>Placa del Vehiculo</td>
						<td>Tipo de Insumo</td>
					</tr>
					<tr>
						<td>
							<select name="jornada" required>
								<option value="0" disabled="true" selected="true">-Seleccione Jornada-</option>
								@foreach($jornadas as $jornada)
									<option value="{{ $jornada['id_jornada']}}">{{ $jornada['nom_jornada']}}</option>
								@endforeach
							</select>
						</td>
						<td><input type="text" name="placa" placeholder="Ingrese la Placa del Vehiculo" value="{{old('placa')}}" required></td>
						<td>
							<select name="tipo_insumo" class="tinsumos" required>
								<option value="0" disabled="true" selected="true">-Seleccione Tipo de Insumo-</option>
								@foreach($tinsumos as $tinsumo)
									<option value="{{ $tinsumo['id_tipo_insumo']}}">{{ $tinsumo['nom_tipo_insumo']}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('jornada'))
								<small class="form-text text-danger">{{ $errors->first('jornada') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('placa'))
								<small class="form-text text-danger">{{ $errors->first('placa') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('tipo_insumo'))
								<small class="form-text text-danger">{{ $errors->first('tipo_insumo') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Detalle de Insumo</td>
						<td>Tipo de Presentación</td>
						<td>Cantidad a entregar</td>
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
						<td><input type="text" name="cantidad" placeholder="Ingrese la Cantidad a entregar" value="{{old('cantidad')}}" required></td>
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

					<tr align="center">
						<td height=30>
							<br><button type="submit" class="btn btn-primary principal">ASIGNAR BENEFICIARIO</button>
						</td>
						<td>
							<br><button type="button" onclick="window.location.href='{{action('OperativoBeneficiarioController@create')}}'" class="btn btn-dark nuevo">NUEVA ASIGNACIÓN</button>
						</td>
					</tr>
				</table>
			</div>
		</form>
		
<script type="text/javascript">
	$(document).ready(function(){

		// TIPO DE INSUMO - DETALLE INSUMO
		$(document).on('change', '.tinsumos', function(){
			var jornada=document.getElementsByName("jornada")[0].value;
			//console.log(jornada);
			var tins=$(this).val();
			var tinsumo=tins;
			//console.log(tinsumo);
			var div=$(this).parents();
			var op=" ";

			if (tinsumo == "1") {
				$.ajax({
					type:'get',
	                url:'{!!URL::to('caucho')!!}',
	                data:{'id_detalle_insumo':tins, 'jornada':jornada},
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
	                url:'{!!URL::to('bateria')!!}',
	                data:{'id_detalle_insumo':tins, 'jornada':jornada},
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
	                url:'{!!URL::to('aceite')!!}',
	                data:{'id_detalle_insumo':tins, 'jornada':jornada},
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
                	op+='<option value="0" selected disabled>-Seleccione Unidad de Medida-</option>';
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