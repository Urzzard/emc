<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function guardar(Request $dato){

        $dato->validate([
            'nombre_producto' => 'required | alpha'
        ]);

        $producto = new Producto();
        $producto->nombre_producto = $dato["nombre_producto"];
        $producto->save();
        return "Producto Guardado";
    }
    public function mostrar(){
        $verproducto = Producto::get();
        return view("mostrarProducto", ["verproducto"=>$verproducto]);
    }
}
