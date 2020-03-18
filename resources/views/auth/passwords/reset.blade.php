<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EInSum - Restablecer Contraseña</title>
     <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/estilos.css") }}">
    <!-- JavaScript -->
    <script type='text/javascript' src='//code.jquery.com/jquery-1.11.1.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style type="text/css">
        .panel-title {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Encabezado de Página -->
     <table width=100%>
        <td>
            <img src="{{asset('../images/ministerio_transporte.jpg')}}" height="125px" style="float:left;">
        </td>
        <td align="center">
            <img src="{{asset('../images/encabezado.png')}}" height="125px">
        </td>
        <td>
            <img src="{{asset('../images/granmisiontransporte.png')}}" height="125px" style="float:right;">
        </td> 
    </table>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <br><br><br>
    
    <!-- Restablecimiento de Contraseña -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-lg-3"></div>
            <div class="col-lg-7 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 align="center">RESTABLECIMIENTO DE CONTRASEÑA</h2>
                    </div>
                    <div class="panel-body">
                        <div class="card">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <center>
                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf

                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de Email') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback alert-danger" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Restablecer Contraseña') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-lg-3"></div>
        </div>
    </div>
    
</body>
</html>
