<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sorteo;

class sorteosController extends Controller
{
    public function fechainiciosorteo(Request $req)
    {
        $fechainicio = date('Y-m-d', strtotime($req->fechainicio));

        return view('admin.sorteos.sorteosegundopaso')->with([
            'fechainicio'=>$fechainicio,
        ]);
    }
    public function fechafinsorteo(Request $req)
    {
        $fechainiciopublic = date('d-m-Y', strtotime($req->fechainicio));
        $fechafinpublic = date('d-m-Y', strtotime($req->fechafin));
        $fechainicio = date('Y-m-d', strtotime($req->fechainicio));
        $fechafin = date('Y-m-d', strtotime($req->fechafin));
        $participantes = Sorteo::whereBetween('fecha_boda', [$fechainicio, $fechafin])->get();

        return view('admin.sorteos.participantes')->with([
            'participantes'=>$participantes,
            'fechainicio'=>$fechainicio,
            'fechafin'=>$fechafin,
            'fechainiciopublic'=>$fechainiciopublic,
            'fechafinpublic'=>$fechafinpublic,
        ]);
    }
}
