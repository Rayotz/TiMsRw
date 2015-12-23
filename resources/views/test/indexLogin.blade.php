@extends('layouts.masterLogin')

@section('titulo')
    SAGGAP
@stop

@section('formulario')
<form>
    <h2>Bienvenido a SAGGAP</h2>
    <input type="text" name="Rut" placeholder="Rut">
    <input type="password" name="pass" placeholder="Ingrese clave">
    <input type="button" value="ACEPTAR" id="boton" >
    <input type="button" value="CANCELAR" id="boton2" onclick="javascript:RegistroA();"value=""/>


    <script>
        function RegistroA(){

            location.href="http://sitio-dos.dev/registrarAlumno"
        }
    </script>

    <script>
        function Registrop(){

            location.href="http://sitio-dos.dev/registrarProfe"
        }
    </script>
</form>
@stop
