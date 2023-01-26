<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Megusta extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','proveedor_id','megusta','fav','reservado'
    ];

    public function proveedor(){
                return $this->belongsTo('App\Models\Proveedor','proveedor_id','id');
                //
    }
    public function usuario(){
                return $this->belongsTo('App\Models\User','user_id','id');
                //
    }
}
