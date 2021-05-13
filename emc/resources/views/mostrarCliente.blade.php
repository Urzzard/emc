@extends('layout')
@section('tabla')

<table border="2px">
    <tr>
        <th>ID Cliente</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Usuario</th>
        <th>Password</th>
    </tr>
    @foreach ($vercliente as $cliente)
    <tr>
        
        <th>{{$cliente["id_cliente"]}}</th>
        <th>{{$cliente["nombre_cliente"]}}</th>
        <th>{{$cliente["correo_cliente"]}}</th>
        <th>{{$cliente["usuario_cliente"]}}</th>
        <th>{{$cliente["pass_cliente"]}}</th>
        
    </tr>
    @endforeach
</table>

@endsection