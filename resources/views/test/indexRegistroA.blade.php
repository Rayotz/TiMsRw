@extends('layouts.masterRegistroA')

@section('titulo')
    SAGGAP
@stop

@section('formulario_alumno')
    <form>
        <h2>Registro Alumnos</h2>
        <input type="text" name="Nombre" placeholder="Nombre">
        <input type="email" name="Correo" placeholder="Correo">
        <input type="text" name="Rut" placeholder="Rut">
        <input type="password" name="pass" placeholder="Ingrese clave">
        <input type="password" name="pass" placeholder="Repita su clave">
        <input type="button" value="ACEPTAR" id="boton" >
        <input type="button" value="CANCELAR" id="boton2" onclick="javascript:cambia_de_pagina();"value="Volver a inicio"/>


        <script>
            function cambia_de_pagina(){
                alert("Será ud redireccionado a la pagina de inicio.")
                location.href="http://sitio-uno.dev"
            }
        </script>


    </form>



    @stop