@extends('layouts.app')

@section('title', 'Registro de Beneficiario')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>REGISTRO DE BENEFICIARIO</h2>
	@if(session()->has('flash'))
        <div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
	<form class="form-group" action="{{action('BeneficiarioController@store')}}" method="POST">
		@csrf
		<div class="form-group">
			<table align="center" border=0 width=100%>
				<tr>
					<td>Cedula del Beneficiario</td>
					<td>Organización</td>
					<td>Nombre del Beneficiario</td>
				</tr>
				<tr>
					<td><input type="text" name="ci_benef" placeholder="12345678" value="{{old('ci_benef')}}" required></td>
					<td><input type="text" name="rif_org" placeholder="JXXXXXXXXXX" value="{{old('rif_org')}}" required></td>
					<td><input type="text" name="nom_benef" placeholder="Ingrese el Nombre" value="{{old('nom_benef')}}" required></td>
				</tr>
				<tr>
					<td>
						@if($errors->has('ci_benef'))
							<small class="form-text text-danger">{{ $errors->first('ci_benef') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('rif_org'))
							<small class="form-text text-danger">{{ $errors->first('rif_org') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('nom_benef'))
							<small class="form-text text-danger">{{ $errors->first('nom_benef') }}</small>
						@endif
					</td>
				</tr>
				<tr>
					<td>Apellido del Beneficiario</td>
					<td>Tipo Beneficiario</td>
					<td>Estado</td>
				</tr>
				<tr>
					<td><input type="text" name="apell_benef" placeholder="Ingrese el Apellido" value="{{old('apell_benef')}}" required></td>
					<td>
						<select name="tipo_benef" required>
							<option value="0" disabled="true" selected="true">-Seleccione Tipo de Beneficiario-</option>
							@foreach($t_beneficiarios as $t_benef)
								<option value="{{ $t_benef['id_tipo_benef']}}">{{ $t_benef['nom_tipo_benef']}}</option>
							@endforeach
						</select>
					</td>
					<td>
						<select class="estados" name="estado" required>
							<option value="0" disabled="true" selected="true">-Seleccione el Estado-</option>
							@foreach($estados as $estado)
								<option value="{{ $estado['id_estado']}}">{{ $estado['nom_estado']}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td>
						@if($errors->has('apell_benef'))
							<small class="form-text text-danger">{{ $errors->first('apell_benef') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('tipo_benef'))
							<small class="form-text text-danger">{{ $errors->first('tipo_benef') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('estado'))
							<small class="form-text text-danger">{{ $errors->first('estado') }}</small>
						@endif
					</td>
				</tr>
				<tr>
					<td>Municipio</td>
					<td>Parroquia</td>
					<td>Telefono</td>
				</tr>
				<tr>
					<td>
						<select class="municipios" name="municipio" required>
							<option value="0" disabled="true" selected="true">-Municipio-</option>
						</select>
					</td>
					<td>
						<select class="parroquias" name="parroquia" required>
							<option value="0" disabled="true" selected="true">-Parroquia-</option>
						</select>
					</td>
					<td><input type="text" name="telf" placeholder="0416-0000000" value="{{old('telf')}}" required></td>
				</tr>
				<tr>
					<td>
						@if($errors->has('municipio'))
							<small class="form-text text-danger">{{ $errors->first('municipio') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('parroquia'))
							<small class="form-text text-danger">{{ $errors->first('parroquia') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('telf'))
							<small class="form-text text-danger">{{ $errors->first('telf') }}</small>
						@endif
					</td>
				</tr>
				<tr>
					<td>Correo</td>
					<td>Direccion</td>
				</tr>
				<tr>
					<td><input type="text" name="email_benef" placeholder="xxxx@mail.com" value="{{old('email_benef')}}" required></td>
					<td><textarea name="direc_benef" placeholder="Ingrese la Dirección del Beneficiario" class="text" required></textarea></td>
				</tr>
				<tr>
					<td>
						@if($errors->has('email_benef'))
							<small class="form-text text-danger">{{ $errors->first('email_benef') }}</small>
						@endif
					</td>
					<td>
						@if($errors->has('direc_benef'))
							<small class="form-text text-danger">{{ $errors->first('direc_benef') }}</small>
						@endif
					</td>
				</tr>


				<tr align="center">
					<td height=30>
						<br><button type="submit" class="btn btn-primary principal">REGISTRAR</button>
					</td>
					<td>
						<br><button type="button" onclick="window.location.href='{{action('BeneficiarioController@create')}}'" class="btn btn-dark nuevo">NUEVO REGISTRO</button>
					</td>
					<td>
						<br><button type="button" onclick="window.location.href='{{action('VehiculoController@create')}}'" class="btn btn-primary nuevo glyphicon glyphicon-plus"> VEHICULO</button>
					</td>
				</tr>
			</table>
		</div>
	</form>

<script type="text/javascript">
// ESTADO - MUNICIPIO -PARROQUIA
    $(document).ready(function(){

        $(document).on('change','.estados',function(){
            var est_id=$(this).val();
            //console.log(est_id);
            var div=$(this).parents();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('municipio')!!}',
                data:{'id_munic':est_id},
                success:function(data){

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>-Seleccione Municipio-</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id_munic+'">'+data[i].nom_munic+'</option>';
                   }

                   div.find('.municipios').html(" ");
                   div.find('.municipios').append(op);

                },
                error:function(){

                }
            });

        });
        $(document).on('change', '.municipios', function(){
            var mun_id=$(this).val();
            //console.log(mun_id);
            var div=$(this).parents();

            var opt=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('parroquia')!!}',
                data:{'id_parroq':mun_id},
                success:function(data){
                    //console.log(data);

                    //console.log(data.length);
                    opt+='<option value="0" selected disabled>-Seleccione Parroquia-</option>';
                    for(var i=0;i<data.length;i++){
                    opt+='<option value="'+data[i].id_parroq+'">'+data[i].nom_parroq+'</option>';
                   }

                   div.find('.parroquias').html(" ");
                   div.find('.parroquias').append(opt);

                },
                error:function(){
                }
            });
        
        });

        $(document).on('change', '.parroquias', function(){
            var parr_id=$(this).val();
            //console.log(parr_id);
        });


    });
</script>
@endsection