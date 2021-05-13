@extends('layout')
@section('tabla')

<table border="2px">
    <tr>
        <th>ID PRODUCTO</th>
        <th>PRODUCTO</th>
    </tr>
    @foreach ($verproducto as $producto)
    <tr>
        
        <th>{{$producto["id_producto"]}}</th>
        <th>{{$producto["nombre_producto"]}}</th>
        
    </tr>
    @endforeach
</table>

@endsection