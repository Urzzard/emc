<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMC</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    
</head>
<body class="bg-light">
    <h1 class="text-center text-primary">EXAMEN DE MEDIO CURSO</h1>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="/ingreso-producto">Ingresar Producto</a>
            <a href="/mostrar-producto">Mostrar Producto</a>
        </div>
        <div class="container">
            <a href="/ingreso-cliente">Ingresar CLiente</a>
            <a href="/mostrar-cliente">Mostrar CLiente</a>
        </div>
        <div class="container">
            <a href="/ingreso-direccion">Ingresar Direccion</a>
            <a href="/mostrar-direccion">Mostrar Direccion</a>
        </div>
        <div class="container">
            <a href="/ingreso-compra">Ingresar Compra</a>
            <a href="/mostrar-compra">Mostrar Compra</a>
        </div>
    </nav>
        
    <section class="container">
        @yield('tabla')
    </section>
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>