<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class proveedores_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedors')->insert([
            'nombre' => 'Restaurante Erreka',
            'correo' => 'errekapaisaje@jpg.com', 
            'direccion' => 'Calle pescaderia n12',
            'telefono' => '616379241',
            'desc_01' => 'En la localidad de Los Alcazares este restaurante puede ser el marco perfecto para celebrar vuestro banquete nupcial junto a vuestros familiares y amigos. Es un entorno privilegiado rodeado de naturaleza con exclusivas instalaciones y donde recibiréis un servicio y trato totalmente profesional y comprometido.',
            'desc_02' => 'Una de las zonas a destacar es la espectacular terraza con vistas al increíble campo de golf. También podréis hacer uso del mismo campo, que se ha utilizado ya previamente en otras bodas para la celebración o el cóctel de bienvenida. Y si queréis un banquete en el interior, cuentan con un salón de celebraciones.',
            'desc_03' => 'La empresa elabora cocina tradicional y artesana, servida con cariño. Además, todos los servicios que recibiréis están en continua evolución, adaptándonos así a cualquier tipo de evento y cliente.',
            'tipo' => 'Restaurante',
            'google_api_url' => '1',
            'poblacion' => 'San Pedro',
        ]);
    }
}
