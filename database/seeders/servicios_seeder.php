<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class servicios_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            'nombre' => 'Terraza de 150m2',
            'proveedor_id' => '1'
        ]);
        DB::table('servicios')->insert([
            'nombre' => 'Ceremonia',
            'proveedor_id' => '1'
        ]);
        DB::table('servicios')->insert([
            'nombre' => 'Salones de banquetes',
            'proveedor_id' => '1'
        ]);
    }
}
