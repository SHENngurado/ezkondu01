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
        DB::table('users')->insert([
            'name' => 'segu admin',
            'role' => 'admin',
            'email' => 'segu_86@hotmail.com', 
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),  
        ]);
        DB::table('multimedias')->insert([
            'nombre' => 'paisaje restaurante erreka',
            'url' => 'errekapaisaje.jpg', 
            'proveedor_id' => '1',
            'tipo' => 'foto'  
        ]);
    }
}