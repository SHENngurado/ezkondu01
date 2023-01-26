<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(proveedores_seeder::class);
        $this->call(multimedias_seeder::class);
        $this->call(preguntas_seeder::class);
        $this->call(servicios_seeder::class);
        $this->call(anunciantes_seeder::class);
    }
}
