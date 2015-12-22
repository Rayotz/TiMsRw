@foreach($alumnos as $alumno )
    {!! $alumno->nombre !!}
    {!! $alumno->username !!}
    {!! $alumno->rut !!}


    @endforeach