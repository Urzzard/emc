@extends('layout')
@section('tabla')
<table>
    <form method="post" action="/guardar-producto">
        @csrf
        
        Nombre del producto<br>
        <input type="text" name="nombre_producto"/><br>
        @error('nombre_producto')
            <span style="color: red">{{$message}}</span>
        @enderror
    
    <tr><td colspan="5"><input type="submit" name="submit" value="Guardar"/></td></tr>
    </form>
</table>
@endsection