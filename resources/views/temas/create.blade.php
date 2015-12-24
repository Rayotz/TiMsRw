@extends('master')
@section('contenido')

    @if($errors->has())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{!! $error !!}</p>
            @endforeach
        </div>
    @endif

    <h3 class="col-lg-offset-1">Ingresar Afp</h3><br>
    {!! Form::open(['route'=>['afp.store'],'class'=>'form-horizontal']) !!}
    <div class="form-group">
        {!! Form::label('nombre_afp', 'Nombre',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('nombre_afp', null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        {!! Form::label('rut_afp', 'Rut',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('rut_afp', null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        {!! Form::label('plan_ahorro', 'Plan De Ahorro',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('plan_ahorro', null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        {!! Form::label('direccion_afp', 'Direccion',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('direccion_afp', null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        {!! Form::label('porcentaje_ahorro', 'Porcentaje de Ahorro',['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('porcentaje_ahorro', null,['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {!! Form::submit('Guardar',['class'=>'btn btn-default','type'=>'submit']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@stop('contenido')
