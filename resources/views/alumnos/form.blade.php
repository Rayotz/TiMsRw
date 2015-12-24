@extends('master1')
@section('contenido')
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('form head')
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre',['class'=>'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('nombre', null,['class'=>'form-control']) !!}</div>
    </div>

    <div class="form-group">
        {!! Form::label('apellido', 'Apellido',['class'=>'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('apellido', null,['class'=>'form-control']) !!}</div>
    </div>


    <div class="form-group">
        {!! Form::label('rut', 'RUT',['class'=>'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('rut', null,['class'=>'form-control']) !!}</div>
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email',['class'=>'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('email', null,['class'=>'form-control']) !!}</div>
    </div>


    <div class="form-group">
        {!! Form::label('rol', 'Rol',['class'=>'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('rol', \App\Alumno::$rol,'a',['class'=>'form-control']) !!}</div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {!! Form::button('Guardar',['class'=>'btn btn-default','type'=>'submit']) !!}</div>
    </div>

    {!! Form::close() !!}
@endsection