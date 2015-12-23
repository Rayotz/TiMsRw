@extends('layouts.masterRegistroA')

@section('titulo')
    SAGGAP
@stop

@section('formulario')
    <form>
        <h2>Registro</h2>
        <input type="text" name="Rut" placeholder="Ingrese aquí el rut">
        <input type="text" name="Nombre" placeholder="Ingrese aquí los nombres">
        <input type="text" name="Apellido" placeholder="Ingres aquí los apellidos">
        <input type="email" name="Correo" placeholder="Ingrese correo">
        <input type="password" name="pass" placeholder="Ingrese clave">
        <input type="text" name="tipo" placeholder="Ingrese aquí el tipo de usuario">
        <input type="submit" value="ACEPTAR" id="boton" >
        <input type="button" value="CANCELAR" id="boton2" onclick="javascript:cambia_de_pagina();"value="Volver a inicio"/>


        <script>
            function cambia_de_pagina(){
                alert("Ud será redireccionado a la pagina de inicio.")
                location.href="http://sitio-dos.dev"
            }
        </script>


    </form>



    @stop