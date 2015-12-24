@extends('alumnos/form')
@section('form head')
    <h2 class="col-lg-offset-1">Crear Alumno</h2>
    {!! Form::open(['route'=>['alumno.store'],'class'=>'form-horizontal']) !!}
@endsection

