@extends('layouts.app')

@section('title', 'Agregar Vehiculo')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>AGREGAR VEHICULO</h2>
	@if(session()->has('flash'))
        <div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
		<form class="form-group" action="{{action('VehiculoController@store')}}" method="POST">
			@csrf
			<div class="form-group">
				<table align="center" border=0 width=100%>
					<tr>
						<td>Placa del Vehiculo</td>
						<td>RIF de la Organización</td>
						<td>Cedula del Beneficiario</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="placa" placeholder="Ingrese la Placa" value="{{old('placa')}}" required>
						</td>
						<td>
							<input type="text" name="rif_org" placeholder="JXXXXXXXXXX" value="{{old('rif_org')}}" required>
						</td>
						<td>
							<input type="text" name="ci_benef" placeholder="12345678" value="{{old('ci_benef')}}" required>
						</td>
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
						<td>Marca del Vehiculo</td>
						<td>Modelo del Vehiculo</td>
						<td>Serial Carroceria</td>
					</tr>
					<tr>
						<td>
							<select class="marcas" name="marca" required>
								<option value="0" disabled="true" selected="true">-Seleccione la Marca del Vehiculo-</option>
								@foreach($marcas as $marca)
									<option value="{{ $marca['id_marca']}}">{{ $marca['nom_marca']}}</option>
								@endforeach
							</select>
						<td>
							<select class="modelos" name="modelo" required>
								<option value="0" disabled="true" selected="true">-Seleccione el modelo del Vehiculo-</option>
							</select>
						</td>
						<td>
							<input type="text" name="serial_carr" placeholder="Ingrese el Serial Carroceria" value="{{old('serial_carr')}}" required>
						</td>
						</td>
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
						<td>Serial Motor</td>
						<td>Color</td>
						<td>Año</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="serial_motor" placeholder="Ingrese el Serial Motor" value="{{old('serial_motor')}}" required>
						</td>
						<td>
							<select name="color" required>
								<option value="0" disabled="true" selected="true">-Seleccione el Color-</option>
								@foreach($colores as $color)
									<option value="{{ $color['id_color']}}">{{ $color['nom_color']}}</option>
								@endforeach
							</select>
						</td>
						<td>
							<input type="year" name="año" placeholder="XXXX" value="{{old('año')}}" required>
						</td>
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

					<tr align="center">
						<td height=30>
							<br><button type="submit" class="btn btn-primary principal">AGREGAR VEHICULO</button>
						</td>
						<td>
							<br><button type="button" onclick="window.location.href='{{action('VehiculoController@create')}}'" class="btn btn-dark nuevo">NUEVO REGISTRO</button>
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