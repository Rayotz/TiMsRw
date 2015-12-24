@extends('master1')
@section('contenido')
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

@section('css')
    {!! Html::style('css/estilo_propuestas.css') !!}
@stop    <table align="center">
    <tr align="center"><td><a href="{!! URL::to('alumno/') !!}">Alumno</a>

            <a href="{!! URL::to('alumno/create') !!}">Agregar Nuevo Alumno</a>

            <a href="{!! URL::to('alumno/') !!}">Ver Lista de Alumnos</a>


            <h1>Alumnos</h1>
            <table class="table table-bordered">
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Rut</th>
                <th>Correo</th>
                @foreach($alumnos as $alumno)
                    <>
                    <td>{!! $alumno->nombre !!}</td>
                    <td>{!! $alumno->apellido !!}</td>
                    <td>{!! $alumno->rut !!}</td>
                    <td>{!! $alumno->email !!}</td>
                    <a>{!! Form::open(['action' => ['AlumnosController@destroy', $alumno->id], 'method' => 'delete']) !!}
                        {!! Form::submit('eliminar', ['class'=>'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}</a>
                    <a href="{!! URL::to('alumno/'.$alumno->id) !!}" data-method="delete"data-token="{{csrf_token()}}"></a>

                    <a>{!! Form::open(['action' => ['AlumnosController@edit', $alumno->id], 'method' => 'find']) !!}
                        {!! Form::submit('editar', ['class'=>'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}</a>

                    <a href="{!! URL::to('alumno/'.$alumno->id) !!}" data-method="find"data-token="{{csrf_token()}}"></a>

                       <a class="btn btn-xs btn-success" href="{!! URL::to('alumno/'.$alumno->id.'/edit') !!}"><span class="glyphicon glyphicon-edit"></span></a>

                    </li>

                    </ul>

            </table>
        </td>
    </tr>
    @endforeach
</table>
