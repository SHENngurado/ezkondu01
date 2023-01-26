<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class multimedias_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('multimedias')->insert([
            'nombre' => 'paisaje restaurante erreka',
            'url' => 'errekapaisaje.jpg', 
            'proveedor_id' => '1',
            'tipo' => 'foto'  
        ]);
    }
}
