<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre','proveedor_id'
    ];

    public function proveedors(){
                return $this->belongsTo('App\Models\Proveedor','proveedor_id','id');
                //
    }
}
