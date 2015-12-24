@extends('master')
@section('contenido')
    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Afp: </h3>
            </div>
            <div class="panel-body">
                <h4>Nombre</h4><h5>{!! $afp->nombre_afp !!}</h5>
                <h4>Rut:</h4><h5> {!! $afp->rut_afp!!}</h5>
                <h4>Plan de Ahorro:</h4><h5> {!! $afp->plan_ahorro!!}</h5>
                <h4>Direccion: </h4><h5> {!! $afp->direccion_afp !!}</h5>
                <h4>Porcentaje de Ahorro: </h4><h5> {!! $afp->porcentaje_ahorro !!}</h5>

            </div>
            {!! Form::open(['action' => ['AfpController@destroy', $afp->id], 'method' => 'delete']) !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-mini']) !!}
            {!! Form::close() !!}
        </div>

    </div>
@endsection

