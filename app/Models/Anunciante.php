<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anunciante extends Model
{
        use HasFactory;
    protected $fillable = [
        'tier','proveedor_id'
    ];

    public function proveedor(){
                return $this->belongsTo('App\Models\Proveedor','proveedor_id','id');
                //
    }
}
