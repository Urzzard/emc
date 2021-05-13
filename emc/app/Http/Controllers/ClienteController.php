<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function guardar(Request $dato){

        $dato->validate([
            'nombre_cliente' => 'required',
            'correo_cliente' => 'required',
            'usuario_cliente' => 'required',
            'pass_cliente' => 'required'
        ]);

        $cliente = new Cliente();
        $cliente->nombre_cliente = $dato["nombre_cliente"];
        $cliente->correo_cliente = $dato["correo_cliente"];
        $cliente->usuario_cliente = $dato["usuario_cliente"];
        $cliente->pass_cliente = $dato["pass_cliente"];
        $cliente->save();
        return "Cliente Guardado";
    }
    public function mostrar(){
        $vercliente = Cliente::get();
        return view("mostrarCliente", ["vercliente"=>$vercliente]);
    }
}
