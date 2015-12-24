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
    <div class="container">

        @yield('formulario_alumno')
    </div>


</body>
</html>