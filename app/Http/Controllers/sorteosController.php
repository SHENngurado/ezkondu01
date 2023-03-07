<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sorteo;
use App\Models\Premiado;
use App\Models\Notasboda;

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
        $totalparticipantes = Sorteo::whereBetween('fecha_boda', [$fechainicio, $fechafin])->count();

        return view('admin.sorteos.participantes')->with([
            'participantes'=>$participantes,
            'fechainicio'=>$fechainicio,
            'fechafin'=>$fechafin,
            'fechainiciopublic'=>$fechainiciopublic,
            'fechafinpublic'=>$fechafinpublic,
            'totalparticipantes'=>$totalparticipantes,
        ]);
    }

    public function premiado(Request $req)
    {

        $Premiado = new Premiado;
        $Premiado->user_id = $req->user_id;
        $Premiado->fecha_boda = $req->fecha_boda;
        $Premiado->save();
        
        return $this->mostrarpremiados();
    }

    public function mostrarpremiados()
    {
        $premiados = Premiado::all();

        return view('admin.sorteos.premiados')->with([
            'premiados'=>$premiados,
        ]);
    }

    public function infopremiado($premiado_id)
    {
        $premiado=Premiado::find($premiado_id);
        $notasboda=Notasboda::where('premiado_id', $premiado_id)->get();
        return view('admin.sorteos.infopremiado')->with([
            'premiado'=>$premiado,
            'notasboda'=>$notasboda
        ]);
    }

    public function editpremiadoguardar(Request $req)
    {
        $premiado=Premiado::find($req->id);

        Premiado::where('id', $req->id)->update(['nombre' => $req->nombre, 'telefono' => $req->telefono, 'contacto2_nombre' => $req->contacto2_nombre, 'contacto2_telefono' => $req->contacto2_telefono, 'lugar_boda' => $req->lugar_boda, 'horario_boda' => $req->horario_boda]);

        $premiado=Premiado::find($req->id);
        return $this->infopremiado($req->id);
    }


    //EDIT Y DELETE notabodas
    public function editnotaboda(Request $req)
    {
        Notasboda::where('id', $req->notaboda_id)->update(['nota' => $req->nota]);
        return $this->infopremiado($req->premiado_id);
    }

    public function deletenotaboda($premiado_id,$notaboda_id)
    {

        $premiado= Premiado::where(['id'=>$premiado_id])->first();
        Notasboda::where('id', $notaboda_id)->delete();

        return $this->infopremiado($premiado_id);
    }

    public function annadirnota(Request $req)
    {
        $nota = new Notasboda;
        $nota->nota = $req->nota;
        $nota->premiado_id = $req->premiado_id;
        $nota->save();

        return $this->infopremiado($req->premiado_id);
    }


}
