@extends('layouts.app')

@section('title', 'Beneficiarios')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>BENEFICIARIO: {{ $beneficiario->nom_benef}} {{ $beneficiario->apell_benef}}</h2><br><br>
	@if(session()->has('alert'))
    	<div class="alert alert-danger" role="alert">{{ session('alert') }}</div>
    @endif
	<form class="form-group" name="form" action="{{ action('BeneficiarioController@update', $beneficiario->ci_beneficiario)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<table align="center" border=0 width=100%>
				<tr>
					<td>Cedula del Beneficiario:</td>
					<td>RIF de la Organización:</td>
					<td>Nombre del Beneficiario:</td>
				</tr>
				<tr>
					<td><span>{{ $beneficiario->ci_beneficiario}}</span></td>
					<td><input type="text" name="rif_org" value="{{ $beneficiario->organizacion->rif_organizacion}}" required></td>
					<td><span>{{ $beneficiario->nom_benef}}</span></td>
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
					<td>Apellido del Beneficiario:</td>
					<td>Tipo Beneficiario:</td>
					<td>Estado:</td>
				</tr>
				<tr>
					<td><span>{{ $beneficiario->apell_benef}}</span></td>
					<td>
						<select name="tipo_benef" required>
							<option selected value="0">Seleccione Tipo de Beneficiario</option>
							@foreach($t_beneficiarios as $t_benef)
								<option value="{{ $t_benef['id_tipo_benef']}}">{{ $t_benef['nom_tipo_benef']}}</option>
							@endforeach
						</select>
					</td>
					<td>
						<select class="estados" name="estado" required>
							<option selected value="0">Seleccione el Estado</option>
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
				<tr>
					<td>Municipio:</td>
					<td>Parroquia:</td>
					<td>Telefono:</td>
				</tr>
				<tr>
					<td>
						<select class="municipios" name="municipio" required>
								<option>Municipio</option>
						</select>
					</td>
					<td>
						<select class="parroquias" name="parroquia" required>
								<option>Parroquia</option>
						</select>
					</td>
					<td><input type="text" name="telf" value="{{ $beneficiario->telef_benef}}" required></td>
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
					<td>Correo:</td>
					<td>Direccion:</td>
				</tr>
				<tr>
					<td><input type="text" name="email_benef" value="{{ $beneficiario->correo_benef}}" required></td>
					<td><textarea name="direc_benef" value="{{ $beneficiario->direc_benef}}" class="text" required>{{ $beneficiario->direc_benef}}</textarea></td>
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
						<br><button type="submit" class="btn btn-primary principal">ACTUALIZAR</button>
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