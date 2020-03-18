<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SINOTUR</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/estilos.css") }}">
    <!-- JavaScript -->
    <script type='text/javascript' src='//code.jquery.com/jquery-1.11.1.min.js'></script>
    <!-- CSS -->
    <style type="text/css">
        .panel-title {
            font-weight: bold;
        }

        #img1_bienv {
            height: 150px;
            margin: 20px 240px;
        }
    </style>
</head>


    <body>
        <!-- Encabezado de Página -->
        <table width=100%>
             <td>
                <img src="{{asset('../images/ministerio_transporte.png')}}" height="105px" width="390px" style="float:left;">
            </td>
            <td align="center">
                <img src="{{asset('../images/sinotur.png')}}" height="105px">
            </td>
            <td>
                <img src="{{asset('../images/granmisiontransporte.png')}}" height="105px" style="float:right;">
            </td> 
        </table>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <br><br><br>
        <!-- Acceso a la aplicación -->
        <table width=100%>
            <div class="container">
                @if(session()->has('flash'))
                    <div class="alert alert-info">{{ session('flash') }}</div>
                @endif
                <div class="row">
                    <div class="col-lg-3 col-lg-3"></div>
                    <div class="col-lg-7 col-lg-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <img id="img1_bienv" src="{{asset('../images/logo_fontur.png')}}">
                                <h2 align="center">BIENVENIDO AL SISTEMA SINOTUR</h2>
                                <h5 align="center">Indique sus credenciales de acceso</h5>
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="{{ route('login')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label for="name">Nombre de Usuario</label>
                                        <input class="form-control"
                                        type="text"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="Ingresa tu usuario">
                                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                        <label for="password">Contraseña</label>
                                        <input class="form-control"
                                        type="password"
                                        name="password"
                                        placeholder="Ingresa tu contraseña"> 
                                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                    </div>
                                    <button class="btn btn-primary btn-block">Acceder</button>
                                    @if (Route::has('password.request'))
                                        <center>
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('¿Olvidaste tu contraseña?') }}
                                            </a>
                                        </center>
                                @endif
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-lg-3"></div>
                </div>
            </div>
        </table>

    </div>
</body>
</html>
