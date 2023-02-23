<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','url','proveedor_id','tipo'
    ];

    public function proveedor(){
                return $this->belongsTo('App\Models\Proveedor','proveedor_id','id');
                //
    }
}
