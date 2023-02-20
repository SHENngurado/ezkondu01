<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proveedor;
use App\Models\Multimedia;

class proveedoresController extends Controller
{
    public function newclienteguardar(Request $req)
    {
        $Proveedor = new Proveedor;
        $Proveedor->nombre = $req->nombre;
        //$Proveedor->cifdni = $req->cifdni;
        $Proveedor->correo = $req->correo;
        $Proveedor->telefono = $req->telefono;
        $Proveedor->direccion = $req->direccion;
        $Proveedor->poblacion = $req->poblacion;
        //$Proveedor->cod_postal = $req->cod_postal;
        //$Proveedor->contacto_correo = $req->contacto_correo;
        //$Proveedor->contacto_nombre = $req->contacto_nombre;
        //$Proveedor->contacto_telefono = $req->contacto_telefono;
        $Proveedor->desc_01 = $req->desc_01;
        $Proveedor->desc_02 = $req->desc_02;
        $Proveedor->desc_03 = $req->desc_03;
        $Proveedor->tipo = $req->tipo;
        $Proveedor->google_api_url = $req->googleapi;
        $Proveedor->save();

        $proveedorsacado=Proveedor::where('id', $Proveedor->id)->first();

        $req->validate([
            'fotoperfil' => 'required|image|max:2048',
        ]);

        // Store the image in the "public" disk
        $path = $req->file('fotoperfil')->store('public/img/proveedores');

        // Save the image path to the database
        $Multimedia = new Multimedia;
        $Multimedia->nombre = "fotoperfil ".$proveedorsacado->nombre;
        $Multimedia->proveedor_id = $proveedorsacado->id;
        $Multimedia->tipo = "foto";
        $Multimedia->url = $path;
        $Multimedia->save();

        
        return view('infoproveedor')->with([
            'proveedor'=>$proveedorsacado
        ]);
    }
}
