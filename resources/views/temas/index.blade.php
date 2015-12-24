@extends('master')


@section('contenido')
    <div class="table-responsive">
        <table class="table table-bordered">
            <th>Nombre</th>
            <th>Rut</th>
            <th>Plan de Ahorro</th>
            <th>Direccion</th>
            <th>Porcentaje de Ahorro</th>
            @foreach($afps as $afp)
                <tr>
                    <td>{!! $afp->nombre_afp!!}</td>
                    <td>{!! $afp->rut_afp !!}</td>
                    <td>{!! $afp->plan_ahorro !!}</td>
                    <td>{!! $afp->direccion_afp!!}</td>
                    <td>{!! $afp->porcentaje_ahorro!!}</td>

                    <td>
                        <a class="btn btn-xs btn-primary" href="{!! URL::to('afp/'.$afp->id) !!}">Ver</a>
                        <a class="btn btn-xs btn-success" href="{!! URL::to('afp/'.$afp->id.'/edit') !!}">Editar</a>
                        <a>{!! Form::open(['action' => ['AfpController@destroy', $afp->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Eliminar', ['class'=>'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection('contenido')
