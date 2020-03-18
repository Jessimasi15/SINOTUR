@extends('layouts.app')

@section('title', 'Registro de Empresa de Transporte')

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

@section('content')
	<h2>REGISTRO DE EMPRESA DE TRANSPORTE</h2>
	@if(session()->has('flash'))
        <div class="alert alert-success" role="alert">{{ session('flash') }}</div>
    @endif
    <br><br>
		<form class="form-group" action="{{ action('OrganizacionController@store')}}" method="POST">
			@csrf
			<div class="form-group">
				<table class="table table-borderless">
					<tr>
						<th>Tipo de Empresa: </th>
						<th>Público</th>
						<td><input type="radio" name="tipo_empresa" value="privado"class="radio"></td>
						<th>Privado</th>
						<td><input type="radio" name="tipo_empresa" value="publico" class="radio" checked></td>
					</tr>
					<tr>
						<th>Prestadora de Servicio: </th>
						<th>SI</th>
						<td><input type="radio" name="servicio" value="si" class="radio" checked></td>
						<th>NO</th>
						<td><input type="radio" name="servicio" value="no"class="radio"></td>
					</tr>
					<tr>
						<th>Institucional: </th>
						<th>SI</th>
						<td><input type="radio" name="institucional" value="si" class="radio"></td>
						<th>NO</th>
						<td><input type="radio" name="institucional" value="no"class="radio" checked></td>
					</tr>
				</table>
				<table align="center" border=0 width=100%>
					<tr>
						<td>RIF</td>
						<td>Nombre</td>
						<td>Tipo de Empresa</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="rif_org" placeholder="JXXXXXXXXXX" value="{{old('rif_org')}}" required>
						</td>
						<td>
							<input type="text" name="nom_org" placeholder="Ingrese la Empresa" value="{{old('nom_org')}}" required>
						</td>
						<td>
							<select name="tipo_organ">
								<option value="0" disabled="true" selected="true">-Seleccione Tipo de Empresa-</option>
									@foreach($torganizaciones as $torganizacion)
                    					<option value="{{$torganizacion->id_tipo_organ}}">{{$torganizacion->nom_tipo_organ}}</option>
                					@endforeach
							</select>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('rif_org'))
								<small class="form-text text-danger">{{ $errors->first('rif_org') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('nom_org'))
								<small class="form-text text-danger">{{ $errors->first('nom_org') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('tipo_organ'))
								<small class="form-text text-danger">{{ $errors->first('tipo_organ') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Cedula Presidente</td>
						<td>Nombre Presidente</td>
						<td>Apellido Presidente</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="ci_presi" placeholder="12345678" value="{{old('ci_presi')}}" required>
						</td>
						<td>
							<input type="text" name="nom_presi" placeholder="Ingrese el Nombre" value="{{old('nom_presi')}}" required>
						</td>
						<td>
							<input type="text" name="apell_presi" placeholder="Ingrese el Apellido" value="{{old('apell_presi')}}" required>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('ci_presi'))
								<small class="form-text text-danger">{{ $errors->first('ci_presi') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('nom_presi'))
								<small class="form-text text-danger">{{ $errors->first('nom_presi') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('apell_presi'))
								<small class="form-text text-danger">{{ $errors->first('apell_presi') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Correo Electronico</td>
						<td>Telefono Local</td>
						<td>Telefono Celular</td>
					</tr>
					<tr>
						<td>
							<input type="email" name="email_org" placeholder="xxxxxx@mail.com" value="{{old('email_org')}}" required>
						</td>
						<td>
							<input type="text" name="telf_local" placeholder="0212-0000000" value="{{old('telf_local')}}" required>
						</td>
						<td>
							<input type="text" name="telf_cel" placeholder="0416-0000000" value="{{old('telf_cel')}}" required>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('email_org'))
								<small class="form-text text-danger">{{ $errors->first('email_org') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('telf_local'))
								<small class="form-text text-danger">{{ $errors->first('telf_local') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('telf_cel'))
								<small class="form-text text-danger">{{ $errors->first('telf_cel') }}</small>
							@endif
						</td>
					</tr>
					<tr>
						<td>Estado</td>
						<td>Municipio</td>
						<td>Parroquia</td>
					</tr>
					<tr>
						<td>
							<select class="estados" id="estado" name="estado">
        						<option value="0" disabled="true" selected="true">-Seleccciona Estado-</option>
                					@foreach($estados as $estado)
                    					<option value="{{$estado->id_estado}}">{{$estado->nom_estado}}</option>
                					@endforeach
							</select>
						</td>
						<td>
							<select class="municipios" id="municipio" name="municipio">
								<option value="0" disabled="true" selected="true">-Municipio-</option>
							</select>
						</td>
						<td>
							<select class="parroquias" id="parroquia" name="parroquia">
								<option value="0" disabled="true" selected="true">-Parroquia-</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('estado'))
								<small class="form-text text-danger">{{ $errors->first('estado') }}</small>
							@endif
						</td>
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
					</tr>
					<tr>
						<td>Bloque</td>
						<td>Ruta(s)</td>
						<td>Dirección de la Empresa</td>
					</tr>
					<tr>
						<td>
							<select name="bloque">
								<option value="0" disabled="true" selected="true">-Seleccione Bloque-</option>
								@foreach($bloques as $bloque)
									<option value="{{$bloque->id_bloque}}">{{$bloque->nom_bloque}}</option>
								@endforeach
							</select>
						</td>
						<td>
							<textarea name="ruta_org" placeholder="Ingrese la(s) Ruta(s)" class="text" value="{{old('ruta_org')}}" required></textarea>
						</td>
						<td>
							<textarea name="direc_org" placeholder="Ingrese la Dirección" class="text" value="{{old('direc_org')}}" required></textarea>
						</td>
					</tr>
					<tr>
						<td>
							@if($errors->has('bloque'))
								<small class="form-text text-danger">{{ $errors->first('bloque') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('ruta_org'))
								<small class="form-text text-danger">{{ $errors->first('ruta_org') }}</small>
							@endif
						</td>
						<td>
							@if($errors->has('direc_org'))
								<small class="form-text text-danger">{{ $errors->first('direc_org') }}</small>
							@endif
						</td>
					</tr>

					<tr align="center">
						<td height=30>
							<br><button type="submit" class="btn btn-primary principal">REGISTRAR</button>
						</td>
						<td>
							<br><button type="button" onclick="window.location.href='{{action('OrganizacionController@create')}}'" class="btn btn-dark nuevo">NUEVO REGISTRO</button>
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