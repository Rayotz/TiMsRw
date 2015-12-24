<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8/">
    <link rel="stylesheet">
   <title>
        @yield('titulo')
    </title>
    @yield('css')
    @yield('javascript')

    @if(Session::has('mensaje'))
        <h2> {{Session::get('mensaje')}} </h2>
    @endif

</head>
<body>
    <div class="container">
        <form action="registrarAlumno" method="POST" name="enviar_registro_alumno">

            <h2>Registro Alumno</h2>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            {{$errors->first("rut") }}
            <input type="text" name="rut" placeholder="Ingrese rut" id="rut">
            {{$errors->first("nombre") }}
            <input type="text" name="nombre" placeholder="Ingrese nombres">
            {{$errors->first("apellido") }}
            <input type="text" name="apellido" placeholder="Ingrese apellidos">
            {{$errors->first("correo") }}
            <input type="email" name="correo" placeholder="Ingrese correo">
            {{$errors->first("clave") }}
            <input type="password" name="clave" placeholder="Ingrese clave">


            Tipo Usuario: <select tipo="Tipo_Usuario" name="tipo">
                <option value="1">Alumno</option>
            </select><br><br>


            <input type="submit" value="Registrar Alumno" id="boton">

            <input type="button" value="CANCELAR" id="boton2" onclick="javascript:cambia_de_pagina();"value="Volver a inicio"/>


            <script>
                function cambia_de_pagina(){
                    alert("Será ud redireccionado a la pagina de inicio.")
                    location.href="http://sitio-dos.dev/"
                }
            </script>
        </form>
    </div>
</body>
</html>