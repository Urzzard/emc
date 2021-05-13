@extends('layout')
@section('tabla')

<table>
    <form method="post" action="/guardar-cliente">
        @csrf
        
        Nombre del cliente<br>
        <input type="text" name="nombre_cliente"/><br><br>
        @error('nombre_cliente')
            <span style="color: red">{{$message}}</span>
        @enderror
        Correo<br>
        <input type="text" name="correo_cliente"/><br><br>
        @error('correo_cliente')
            <span style="color: red">{{$message}}</span>
        @enderror
        Usuario<br>
        <input type="text" name="usuario_cliente"/><br><br>
        @error('usuario_cliente')
            <span style="color: red">{{$message}}</span>
        @enderror
        Password<br>
        <input type="text" name="pass_cliente"/><br><br>
        @error('pass_cliente')
            <span style="color: red">{{$message}}</span>
        @enderror
    
    <tr><td colspan="5"><input type="submit" name="submit" value="Guardar"/></td></tr>
    </form>
</table>

@endsection