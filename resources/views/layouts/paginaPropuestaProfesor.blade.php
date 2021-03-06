<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet">
    <title>
        @yield('titulo')
    </title>
    @yield('css')

@if(Session::has('mensaje'))
        <div class="alert-box success">
            <h2>{{\Illuminate\Support\Facades\Session::get('mensaje')}}</h2>
        </div>
    @endif

</head>
    <body>
        <div class="container">
            <form action="profesor"  method="post" enctype="multipart/form-data" name="Enviar_propuesta_profesor">
                <h2>Propuesta de Proyecto profesor</h2>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p>{{$errors->first("titulo") }}
                    <input type="text" name="titulo" id="titulo" placeholder="Titulo del Proyecto">
                </p>
                Ingrese el archivo del proyecto:
                <input type="file" name="archivo" accept="application/pdf" />
                {{$errors->first("archivo") }}

                <input type="submit" value="ENVIAR" id="boton"  >

            </form>
        </div>
    </body>
</html>
