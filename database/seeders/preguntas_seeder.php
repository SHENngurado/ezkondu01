<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class preguntas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->insert([
            'pregunta' => '¿Hay menu infantil?',
            'respuesta' => 'Disponemos de varios menus para nuestros pequeños con fritos, carnes, pescados y helados', 
            'proveedor_id' => '1'
        ]);
    }
}
