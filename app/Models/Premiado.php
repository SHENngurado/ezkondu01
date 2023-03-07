<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premiado extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_boda','user_id','nombre','telefono','contacto2_nombre','contacto2_telefono','descripcion','lugar_boda','horario_boda',
    ];

    public function usuario(){
                return $this->belongsTo('App\Models\User','user_id','id');
                //
    }


    public function notas(){
                return $this->hasMany('App\Models\Notasboda', 'premiado_id');
    }
}
