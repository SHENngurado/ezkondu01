<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proveedor;

class adminController extends Controller
{
    public function verproveedores()
    {
        $proveedores = Proveedor::all();

        return view('admin.empresas.proveedores')->with([
            'proveedores'=>$proveedores
        ]);
    }

    public function infoproveedor($proveedor_id)
    {
        $proveedor=Proveedor::find($proveedor_id);
        //$multimedia=Multimedia::where('proveedor_id', $proveedor_id)->get();
        return view('admin.empresas.infoproveedor')->with([
            //'multimedia'=>$multimedia,
            'proveedor'=>$proveedor,
        ]);
    }

    public function editproveedor($proveedor_id)
    {
        $proveedor=Proveedor::find($proveedor_id);
        return view('admin.empresas.editproveedor')->with([
            'proveedor'=>$proveedor
        ]);
    }
    public function editproveedorguardar(Request $req)
    {

        Proveedor::where('id', $req->id)->update(['nombre' => $req->nombre, 'cifdni' => $req->cifdni, 'telefono' => $req->telefono, 'correo' => $req->correo, 'direccion' => $req->direccion, 'cod_postal' => $req->cod_postal,'poblacion' => $req->poblacion, 'contacto_correo' => $req->contacto_correo, 'contacto_nombre' => $req->contacto_nombre, 'contacto_telefono' => $req->contacto_telefono, 'desc_01' => $req->desc_01, 'desc_02' => $req->desc_02, 'desc_03' => $req->desc_03, 'tipo' => $req->tipo, 'google_api_url' => $req->googleapi]);

        $proveedor=Proveedor::find($req->id);
        return view('admin.empresas.infoproveedor')->with([
            //'facturas'=>$facturas,
            'proveedor'=>$proveedor,
        ]);
    }
}
