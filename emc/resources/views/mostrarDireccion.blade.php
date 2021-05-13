@extends('layout')
@section('tabla')

<table border="2px">
    <tr>
        <th>ID Direccion</th>
        <th>ID Cliente</th>
        <th>Direccion</th>
        <th>Provincia</th>
        <th>Ciudad</th>
        <th>Codigo Postal</th>
    </tr>
    @foreach ($verdireccion as $direccion)
    <tr>
        <th>{{$direccion["id_direccion"]}}</th>
        <th>{{$direccion["id_cliente"]}}</th>
        <th>{{$direccion["direccion"]}}</th>
        <th>{{$direccion["d_provincia"]}}</th>
        <th>{{$direccion["d_ciudad"]}}</th>
        <th>{{$direccion["c_postal"]}}</th>
        
    </tr>
    @endforeach
</table>

@endsection