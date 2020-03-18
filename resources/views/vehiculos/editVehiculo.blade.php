@extends('layouts.app')

@section('title', 'Editar Vehiculo')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>EDITAR VEHICULO: {{ $vehiculo->placa}}</h2>
	@if(session()->has('alert'))
        <div class="alert alert-danger" role="alert">{{ session('alert') }}</div>
    @endif
    <br><br>
		<form class="form-group" action="{{route('vehiculo.update', $vehiculo->placa)}}" method="POST">
			@csrf
			@method('PUT')
			<div class="form-group">
				<table align="center" border=0 width=100%>
					<tr>
						<td>Placa del Vehiculo:</td>
						<td>RIF de la Organización:</td>
						<td>Cedula del Beneficiario:</td>
					</tr>
					<tr>
						<td><span>{{ $vehiculo->placa}}</span></td>
						<td><input type="text" name="rif_org" value="{{ $vehiculo->organizacion_rif}}" required></td>
						<td><input type="text" name="ci_benef" value="{{ $vehiculo->benef_ci}}" required></td>
					</tr>
					<tr>
						<td>
							@if($errors->has('placa'))
								<small class="form-text text-danger">{{ $errors->first('placa') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('rif_org'))
								<small class="form-text text-danger">{{ $errors->first('rif_org') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('ci_benef'))
								<small class="form-text text-danger">{{ $errors->first('ci_benef') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Marca del Vehiculo:</td>
						<td>Modelo del Vehiculo:</td>
						<td>Serial Carroceria:</td>
					</tr>
					<tr>
						<td><span>{{$vehiculo->marca_vehiculo->nom_marca}}</span></td>
						<td><span>{{ $vehiculo->modelo_vehiculo->nom_modelo}}</span></td>
						<td><span>{{ $vehiculo->serial_carroceria}}</span></td>
					</tr>
					<tr>
						<td>
							@if($errors->has('marca'))
								<small class="form-text text-danger">{{ $errors->first('marca') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('modelo'))
								<small class="form-text text-danger">{{ $errors->first('modelo') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('serial_carr'))
								<small class="form-text text-danger">{{ $errors->first('serial_carr') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Serial Motor:</td>
						<td>Color:</td>
						<td>Año:</td>
					</tr>
					<tr>
						<td><span>{{ $vehiculo->serial_motor}}</span></td>
						<td>
							<select name="color" required>
								<option selected value="0">Seleccione el Color</option>
								@foreach($colores as $color)
									<option value="{{ $color['id_color']}}">{{ $color['nom_color']}}</option>
								@endforeach
							</select>
						</td>
						<td><span>{{$vehiculo->año_carro}}</span></td>
					</tr>
					<tr>
						<td>
							@if($errors->has('serial_motor'))
								<small class="form-text text-danger">{{ $errors->first('serial_motor') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('color'))
								<small class="form-text text-danger">{{ $errors->first('color') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('año'))
								<small class="form-text text-danger">{{ $errors->first('año') }}</small>
							@endif
						</td>
					</tr>


					<tr align="center">
						<td height=30>
							<br><button type="submit" class="btn btn-primary principal">ACTUALIZAR</button>
						</td>
					</tr>
				</table>
			</div>
		</form>

<!-- REFORMULAR JAVASCRIPT -->
<script type="text/javascript">
// MARCA - MODELO
    $(document).ready(function(){

        $(document).on('change','.marcas',function(){
            var marca=$(this).val();
            console.log(marca);
            var div=$(this).parents();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('modelos')!!}',
                data:{'id_modelo':marca},
                success:function(data){

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>-Seleccione Modelo-</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id_modelo+'">'+data[i].nom_modelo+'</option>';
                   }

                   div.find('.modelos').html(" ");
                   div.find('.modelos').append(op);

                },
                error:function(){

                }
            });

        });


    });
</script>
@endsection