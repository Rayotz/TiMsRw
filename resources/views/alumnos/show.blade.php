@extends('master1')
@section('contenido')
    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Alumno: </h3>
            </div>
            <div class="panel-body">
                <h4>Nombre:</h4><h5>{!! $alumno->nombre !!}</h5>
                <h4>Apellido:</h4><h5> {!! $alumno->apellido_p!!}</h5>
                <h4>Email: </h4><h5> {!! $alumno->email !!}</h5>
                <h4>Rol: </h4><h5> {!! \App\Alumnos::$rol{substr($alumno->rol,'a','p','o')} !!}</h5>

            {!! Form::open(['action' => ['AlumnosController@destroy', $alumno->id], 'method' => 'delete']) !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-mini']) !!}
            {!! Form::close() !!}
        </div>

    </div>
@endsection

