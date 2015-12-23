@extends('layouts.masterRegistroA')

@section('titulo')
    SAGGAP
@stop

@section('formulario')
    <h2>Registro</h2>
    <input type="email" name="Correo" placeholder="Correo">
    <input type="text" name="Rut" placeholder="Rut">
    <input type="password" name="pass" placeholder="Ingrese clave">
    <input type="password" name="pass" placeholder="Repita su clave">

    <input type="submit" value="Aceptar" id="boton">
    <input type="button" value="CANCELAR" id="boton2" onclick="javascript:cambia_de_pagina();"value="Volver a inicio"/>


    <script>
        function cambia_de_pagina(){
            alert("Ud será redireccionado a la pagina de inicio.")
            location.href="http://sitio-dos.dev"
        }
    </script>
@stop