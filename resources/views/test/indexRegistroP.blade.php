@extends('layouts.masterRegistroP')

@section('titulo')
    SAGGAP
@stop

@section('formulario_profesor')
    <form>
        <h2>Registro Profesor</h2>
        <input type="text" name="Nombre" placeholder="Nombre">
        <input type="email" name="Correo" placeholder="Correo">
        <input type="text" name="Rut" placeholder="Rut">
        <input type="password" name="pass" placeholder="Ingrese clave">
        <input type="password" name="pass" placeholder="Repita su clave">
        <input type="button" value="ACEPTAR" id="boton" >
        <input type="button" value="CANCELAR" id="boton2" onclick="javascript:cambia_de_pagina2();"value="Volver a inicio"/>


        <script>
            function cambia_de_pagina2(){
                alert("Será ud redireccionado a la pagina de inicio.")
                location.href="http://sitio-dos.dev"
            }
        </script>


    </form>



    @stop