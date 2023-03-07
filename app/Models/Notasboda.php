<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notasboda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre','premiado_id'
    ];

    public function premiado(){
                return $this->belongsTo('App\Models\Premiado','premiado_id','id');
                //
    }
}
