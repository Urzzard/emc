@extends('layout')
@section('tabla')

<table>
    <form method="post" action="/guardar-direccion">
        @csrf
        
        ID CLIENTE<br>
        <input type="text" name="id_cliente"/><br><br>
        @error('id_cliente')
            <span style="color: red">{{$message}}</span>
        @enderror
        Direccion<br>
        <input type="text" name="direccion"/><br><br>
        @error('direccion')
            <span style="color: red">{{$message}}</span>
        @enderror
        Provincia<br>
        <input type="text" name="d_provincia"/><br><br>
        @error('d_provincia')
            <span style="color: red">{{$message}}</span>
        @enderror
        Ciudad<br>
        <input type="text" name="d_ciudad"/><br><br>
        @error('d_ciudad')
            <span style="color: red">{{$message}}</span>
        @enderror
        Codigo Postal<br>
        <input type="text" name="c_postal"/><br><br>
        @error('c_postal')
            <span style="color: red">{{$message}}</span>
        @enderror
    
    <tr><td colspan="5"><input type="submit" name="submit" value="Guardar"/></td></tr>
    </form>
</table>

@endsection