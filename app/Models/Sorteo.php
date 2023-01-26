<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteo extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_boda','user_id'
    ];

    public function usuario(){
                return $this->belongsTo('App\Models\User','user_id','id');
                //
    }
}
