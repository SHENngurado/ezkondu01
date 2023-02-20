<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;


protected $fillable = [
        'nombre','correo','direccion','telefono','desc_01','desc_02','desc_03','tipo','google_api_url','poblacion'
    ];

    public function preguntas(){
                return $this->hasMany('App\Models\Pregunta', 'proveedor_id');
    }
    public function megustas(){
                return $this->hasMany('App\Models\Megusta', 'proveedor_id');
    }
    public function multimedias(){
                return $this->hasMany('App\Models\Multimedia', 'proveedor_id');
    }
    public function servicios(){
                return $this->hasMany('App\Models\Servicio', 'proveedor_id');
    }
}