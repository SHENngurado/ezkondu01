<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Proveedor;
use App\Models\Pregunta;
use App\Models\Servicio;
use App\Models\Foto;


class adminController extends Controller
{
    public function verproveedores()
    {
        $proveedores = Proveedor::all();

        return view('admin.empresas.proveedores')->with([
            'proveedores'=>$proveedores
        ]);
    }

    public function newclienteguardar(Request $req)
    {
        $req->validate([
            'fotoperfil' => 'required|image|max:2048',
        ]);

        $path = $req->file('fotoperfil')->store('public/img/proveedores');

        $Proveedor = new Proveedor;
        $Proveedor->nombre = $req->nombre;
        $Proveedor->cifdni = $req->cifdni;
        $Proveedor->correo = $req->correo;
        $Proveedor->cod_postal = $req->cod_postal;
        $Proveedor->telefono = $req->telefono;
        $Proveedor->direccion = $req->direccion;
        $Proveedor->poblacion = $req->poblacion;
        $Proveedor->cod_postal = $req->cod_postal;
        $Proveedor->contacto_correo = $req->contacto_correo;
        $Proveedor->contacto_nombre = $req->contacto_nombre;
        $Proveedor->contacto_telefono = $req->contacto_telefono;
        $Proveedor->desc_01 = $req->desc_01;
        $Proveedor->desc_02 = $req->desc_02;
        $Proveedor->desc_03 = $req->desc_03;
        $Proveedor->tipo = $req->tipo;
        $Proveedor->google_api_url = $req->googleapi;
        $Proveedor->fotoperfil = $path;
        $Proveedor->save();

        $proveedorsacado=Proveedor::where('id', $Proveedor->id)->first();
        
        return $this->infoproveedor($Proveedor->id);
    }

    public function infoproveedor($proveedor_id)
    {
        $proveedor=Proveedor::find($proveedor_id);
        $preguntas=Pregunta::where('proveedor_id', $proveedor_id)->get();
        $servicios=Servicio::where('proveedor_id', $proveedor_id)->get();
        $fotos=Foto::where('proveedor_id', $proveedor_id)->get();
        return view('admin.empresas.infoproveedor')->with([
            //'multimedia'=>$multimedia,
            'proveedor'=>$proveedor,
            'preguntas'=>$preguntas,
            'servicios'=>$servicios,
            'fotos'=>$fotos,
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
        $proveedor=Proveedor::find($req->id);

        if ($req->hasFile('fotoperfil')) {

        // Delete the previous image file
        //Storage::disk('public')->delete($proveedor->fotoperfil);
            Storage::delete($proveedor->fotoperfil);

            $req->validate([
                'fotoperfil' => 'required|image|max:2048',
            ]);

            $path = $req->file('fotoperfil')->store('public/img/proveedores');
            Proveedor::where('id', $req->id)->update(['fotoperfil' => $path]);
        }

        Proveedor::where('id', $req->id)->update(['nombre' => $req->nombre, 'cifdni' => $req->cifdni, 'telefono' => $req->telefono, 'correo' => $req->correo, 'direccion' => $req->direccion, 'cod_postal' => $req->cod_postal,'poblacion' => $req->poblacion, 'contacto_correo' => $req->contacto_correo, 'contacto_nombre' => $req->contacto_nombre, 'contacto_telefono' => $req->contacto_telefono, 'desc_01' => $req->desc_01, 'desc_02' => $req->desc_02, 'desc_03' => $req->desc_03, 'tipo' => $req->tipo, 'google_api_url' => $req->googleapi]);

        $proveedor=Proveedor::find($req->id);
        return $this->infoproveedor($req->id);
    }

    //EDIT Y DELETE PREGUNTAS
    public function editpregunta(Request $req)
    {
        Pregunta::where('id', $req->pregunta_id)->update(['pregunta' => $req->pregunta, 'respuesta' => $req->respuesta]);
        return $this->infoproveedor($req->proveedor_id);
    }

    public function deletepregunta($proveedor_id,$pregunta_id)
    {

        $proveedor= Proveedor::where(['id'=>$proveedor_id])->first();
        Pregunta::where('id', $pregunta_id)->delete();

        return $this->infoproveedor($proveedor_id);
    }

    //EDIT Y DELETE SERVICIOS
    public function editservicio(Request $req)
    {
        Servicio::where('id', $req->servicio_id)->update(['nombre' => $req->nombre]);
        return $this->infoproveedor($req->proveedor_id);
    }

    public function deleteservicio($proveedor_id,$servicio_id)
    {

        $proveedor= Proveedor::where(['id'=>$proveedor_id])->first();
        Servicio::where('id', $servicio_id)->delete();

        return $this->infoproveedor($proveedor_id);
    }

    public function annadirpregunta(Request $req)
    {
        $pregunta = new Pregunta;
        $pregunta->pregunta = $req->pregunta;
        $pregunta->respuesta = $req->respuesta;
        $pregunta->proveedor_id = $req->proveedor_id;
        $pregunta->save();

        return $this->infoproveedor($req->proveedor_id);
    }

    public function annadirservicio(Request $req)
    {

        $servicio = new Servicio;
        $servicio->nombre = $req->nombre;
        $servicio->proveedor_id = $req->proveedor_id;
        $servicio->save();

        return $this->infoproveedor($req->proveedor_id);
    }

    public function multimediaproveedor($proveedor_id)
    {

        $proveedor=Proveedor::find($proveedor_id);
        $fotos=Foto::where('proveedor_id', $proveedor_id)->where('tipo', "foto")->get();
        return view('admin.empresas.multimediaproveedores')->with([
            //'multimedia'=>$multimedia,
            'proveedor'=>$proveedor,
            'fotos'=>$fotos
        ]);
    }

    public function annadirfoto(Request $req)
    {
        $req->validate([
            'foto' => 'required|image|max:2048',
        ]);

        $path = $req->file('foto')->store('public/img/multimedia');

        $foto = new Foto;
        $foto->nombre = $req->nombre;
        $foto->tipo = "foto";
        $foto->url = $path;
        $foto->proveedor_id = $req->proveedor_id;
        $foto->save();

        $proveedor=Proveedor::where('id', $req->proveedor_id)->first();

        
        return $this->multimediaproveedor($req->proveedor_id);
    }

        public function deletefoto($proveedor_id,$foto_id)
    {
        $proveedor=Proveedor::find($proveedor_id);

        Storage::delete($foto_id);
        Foto::where('id', $foto_id)->delete();


        return $this->multimediaproveedor($proveedor_id);
    }

}
