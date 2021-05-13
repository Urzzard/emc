<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;

class DireccionController extends Controller
{
    public function guardar(Request $dato){

        $dato->validate([
            'id_cliente' => 'required',
            'direccion' => 'required',
            'd_provincia' => 'required',
            'd_ciudad' => 'required',
            'c_postal' => 'required'

        ]);

        $direccion = new Direccion();
        $direccion->id_cliente = $dato["id_cliente"];
        $direccion->direccion = $dato["direccion"];
        $direccion->d_provincia = $dato["d_provincia"];
        $direccion->d_ciudad = $dato["d_ciudad"];
        $direccion->c_postal = $dato["c_postal"];
        $direccion->save();
        return "Direccion Guardado";
    }
    public function mostrar(){
        $verdireccion = Direccion::get();
        return view("mostrardireccion", ["verdireccion"=>$verdireccion]);
    }
}
