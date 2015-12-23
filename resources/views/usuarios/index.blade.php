@foreach($usuarios as $usuario )
    {!! $usuario->usu_rut !!}
    {!! $usuario->usu_nombre !!}
    {!! $usuario->usu_apellido !!}
    {!! $usuario->usu_correo!!}
    {!! $usuario->usu_clave !!}
    {!! $usuario->usu_tipo !!}
$usuario


@endforeach