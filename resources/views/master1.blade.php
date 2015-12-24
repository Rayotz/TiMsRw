<!DOCTYPE html>{{--<!DOCTYPE html>
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
<div class="container">
    @yield('formulario_profesor')
</div>
</body>
</html>--}}

<<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="container-fluid">
                @yield('contenido')
            </div>
        </div>
    </div>
</div>

</body>
</html>