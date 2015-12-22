<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8/">
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
   <title>
        @yield('titulo')
    </title>
    <link href="{{ asset('css/reg_alum_estilo.css') }}" rel="stylesheet">
    @yield('css')
    @yield('javascript')
</head>
<body>
<div class="wrapper">



    <!--si el formulario contiene errores de validación-->
    @if($errors->has())
        <div class="errors">
            <!--si el usuario falla la validación mostramos el error-->
            @if($errors->has('nombre'))

                <p>{{ $errors->first('nombre') }}</p>

                @endif

                        <!--si el password falla la validación mostramos el error-->
                @if ($errors->has('clave'))

                    <p>{{ $errors->first('clave') }}</p>

                    @endif

                            <!--si el email falla la validación mostramos el error-->
                    @if ($errors->has('correo'))

                        <p>{{ $errors->first('correo') }}</p>

                    @endif

        </div>
    @endif


    <div class="container">
        @yield('formulario')
    </div>
</div>
</body>
</html>