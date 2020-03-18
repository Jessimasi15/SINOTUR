@extends('layouts.app')

@section('title', 'Crear Jornada')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>CREAR JORNADA</h2>
	@if(session()->has('flash'))
    	<div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
		<br><br>
		<form class="form-group" action="{{route('jornadas.store')}}" method="POST">
			@csrf
			<div class="form-group">
				<table align="center" border=0 width=100%>
					<tr>
						<td>Fecha de la Jornada</td>
						<td>Nombre de la Jornada</td>
						<td>Estado</td>
					</tr>
					<tr>
						<td>
							<input type="date" name="fecha_jorn" value="{{old('fecha_jorn')}}" required>
						</td>
						<td>
							<input type="text" name="nom_jorn" placeholder="Ingrese el Nombre de la Jornada" value="{{old('nom_jorn')}}" required>
						</td>
						<td>
							<select name="estado" class="estados" required>
								<option value="0" disabled="true" selected="true">-Seleccione el Estado-</option>
								@foreach($estados as $estado)
									<option value="{{ $estado['id_estado']}}">{{ $estado['nom_estado']}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('fecha_jorn'))
								<small class="form-text text-danger">{{ $errors->first('fecha_jorn') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('nom_jorn'))
								<small class="form-text text-danger">{{ $errors->first('nom_jorn') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('estado'))
								<small class="form-text text-danger">{{ $errors->first('estado') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Almacén</td>
						<td>Dirección</td>
					</tr>
					<tr>
						<td>
							<select name="almacen" class="almacen" required>
								<option value="0" disabled="true" selected="true">-Seleccione el Almacén-</option>
							</select>
						</td>
						<td>
							<textarea name="direc_jorn" placeholder="Ingrese la Dirección de la Jornada" value="{{old('direc_jorn')}}" class="text" required></textarea>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('almacen'))
								<small class="form-text text-danger">{{ $errors->first('almacen') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('direc_jorn'))
								<small class="form-text text-danger">{{ $errors->first('direc_jorn') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td class="text-center" colspan="3">RESPONSABLE DE LA JORNADA</td>
					</tr><br>
					<tr>
						<td>RIF Empresa</td>
						<td>C.I.</td>
						<td>Nombre y Apellido</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="rif_empresa" placeholder="J-XXXXXXXXX-X" value="{{old('rif_empresa')}}" required>
						</td>
						<td>
							<input type="text" name="ci_resp_jorn" placeholder="12345678" value="{{old('ci_resp_jorn')}}" required>
						</td>
						<td>
							<input type="text" name="nom_apell_resp" placeholder="Ingrese el Nombre y el Apellido" value="{{old('nom_apell_resp')}}" required>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('rif_empresa'))
								<small class="form-text text-danger">{{ $errors->first('rif_empresa') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('ci_resp_jorn'))
								<small class="form-text text-danger">{{ $errors->first('ci_resp_jorn') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('nom_apell_resp'))
								<small class="form-text text-danger">{{ $errors->first('nom_apell_resp') }}</small>
							@endif
						</td>
					</tr>
					

					<tr align="center">
						<td height=30>
							<br><button type="submit" class="btn btn-primary principal">CREAR JORNADA</button>
						</td>
						<td>
							<br><button type="button" onclick="window.location.href='{{action('OperativoController@create')}}'" class="btn btn-dark nuevo">NUEVO REGISTRO</button>
						</td>
					</tr>
				</table>
			</div>
		</form>

<script type="text/javascript">
// ESTADO - ALMACEN
    $(document).ready(function(){

        $(document).on('change','.estados',function(){
            var est_id=$(this).val();
            //console.log(est_id);
            var div=$(this).parents();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('almacen')!!}',
                data:{'id_almacen':est_id},
                success:function(data){

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>-Seleccione Almacén-</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id_almacen+'">'+data[i].nom_almacen+'</option>';
                   }

                   div.find('.almacen').html(" ");
                   div.find('.almacen').append(op);

                },
                error:function(){

                }
            });

        });
    });
</script>

@endsection