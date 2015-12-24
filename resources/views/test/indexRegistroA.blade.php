@extends('layouts.masterRegistroA')

@section('titulo')
    SAGGAP
@stop

@section('formulario_alumno')
    <form  method="POST">

        <h2>Registro Alumno</h2>

        <input type="hidden" name="_token" value="{{ csrf_token()}}">

        <input type="text" name="rut" placeholder="Ingrese rut">
        <input type="text" name="nombre" placeholder="Ingrese nombres">
        <input type="text" name="apellido" placeholder="Ingrese apellidos">
        <input type="email" name="correo" placeholder="Ingrese correo">
        <input type="password" name="clave" placeholder="Ingrese clave">

        Tipo Usuario: <select tipo="Tipo_Usuario">
            <option value="1">Alumno</option>
        </select><br><br>


        <input type="submit" value="Registrar Alumno" id="boton">

        <input type="button" value="CANCELAR" id="boton2" onclick="javascript:cambia_de_pagina();"value="Volver a inicio"/>


        <script>
            function cambia_de_pagina(){
                alert("Será ud redireccionado a la pagina de inicio.")
                location.href="http://sitio-dos.dev"
            }
        </script>
    </form>
@stop