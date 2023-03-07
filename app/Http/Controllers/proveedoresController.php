<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proveedor;
use App\Models\Anunciante;

class proveedoresController extends Controller
{

	public function proveedores()
    {
        $proveedores = Proveedor::all();
        $anunciantest1=Anunciante::where('tier', "1")->get();
        $anunciantest2=Anunciante::where('tier', "2")->get();
        $anunciantest3=Anunciante::where('tier', "3")->get();

        return view('proveedores')->with([
            'proveedores'=>$proveedores,
            'anunciantest1'=>$anunciantest1,
            'anunciantest2'=>$anunciantest2,
            'anunciantest3'=>$anunciantest3
        ]);
    }
}
