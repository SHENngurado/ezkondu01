<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Anunciante;

class anunciantesController extends Controller
{
    public function anunciantes()
    {
        $anunciantest1=Anunciante::where('tier', "1")->get();
        $anunciantest2=Anunciante::where('tier', "2")->get();
        $anunciantest3=Anunciante::where('tier', "3")->get();

        return view('admin.anunciantes')->with([
            'anunciantest1'=>$anunciantest1,
            'anunciantest2'=>$anunciantest2,
            'anunciantest3'=>$anunciantest3,
        ]);
    }

    public function annadiranunciante(Request $req)
    {
        $proveedor=Proveedor::where('nombre', $req->nombre)->first();

        $anunciante = new Anunciante;
        $anunciante->tier = $req->tier;
        $anunciante->proveedor_id = $proveedor->id;
        $anunciante->save();

        return $this->anunciantes();
    }

    public function deleteanunciante($anunciante_id)
    {
        Anunciante::where('id', $anunciante_id)->delete();

        return $this->anunciantes();
    }
}
