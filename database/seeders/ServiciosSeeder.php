<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicio;
class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servicio::create([
            'nombre_servicio' => 'Revestimiento de Tolvas',
            'descripcion' => 'Aplicación de caucho antiabrasivo en tolvas industriales para prolongar su vida útil y reducir el desgaste por impacto de material.',
            'precio' => 150,
            'tiempo_estimado' => '3 días',
            'imagen' => 'servicios/servicio1.png'
        ]);
        
        Servicio::create([
            'nombre_servicio' => 'Recubrimiento de Poleas',
            'descripcion' => 'Recubrimos poleas de bandas transportadoras con poliuretano para mejorar la tracción y evitar el desgaste prematuro.',
            'precio' => 95,
            'tiempo_estimado' => '2 días',
            'imagen' => 'servicios/servicio2.png'
        ]);
        
        Servicio::create([
            'nombre_servicio' => 'Protección de Tuberías',
            'descripcion' => 'Instalación de recubrimiento cerámico en codos de tuberías de alta presión para prevenir la erosión interna causada por el flujo de minerales.',
            'precio' => 120,
            'tiempo_estimado' => '4 días',
            'imagen' => 'servicios/servicio3.png'
        ]);
        
        Servicio::create([
            'nombre_servicio' => 'Reparación de Chutes',
            'descripcion' => 'Aplicación de poliuretano líquido en chutes de descarga para reforzar su resistencia al impacto y desgaste constante.',
            'precio' => 180,
            'tiempo_estimado' => '2 días',
            'imagen' => 'servicios/servicio4.png'
        ]);
        
        Servicio::create([
            'nombre_servicio' => 'Fabricación de Planchas Antidesgaste',
            'descripcion' => 'Diseñamos e instalamos planchas de caucho antidesgaste para la protección de estructuras en contacto constante con minerales abrasivos.',
            'precio' => 210,
            'tiempo_estimado' => '5 días',
            'imagen' => 'servicios/servicio5.png'
        ]);
    }
}
