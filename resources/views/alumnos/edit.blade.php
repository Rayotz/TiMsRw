@extends('alumnos/form')
    @section('form head')
        <h3 class="col-lg-offset-1">Editar Alumno</h3><br>
        {!! Form::model($alumno,['route'=>['alumno.update',$alumno],'method'=> 'PUT','class'=>'form-horizontal']) !!}
    @endsection
