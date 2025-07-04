<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proyecto;
class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proyecto::create([
            'titulo' => 'Revestimiento de Tolva en Planta Concentradora',
            'descripcion' => 'Se realizó el revestimiento interno con caucho antiabrasivo de alta densidad en una tolva de carga para reducir el desgaste por impacto de minerales en una planta concentradora de cobre.',
            'empresa_contratante' => 'Southern Peru Copper Corporation',
            'servicios_empleados' => 'Revestimiento con caucho antiabrasivo, corte a medida, instalación en planta',
            'imagen_1' => 'proyectos/proyecto1.jpg',
            'imagen_2' => 'proyectos/proyecto1.jpg',
            'imagen_3' => 'proyectos/proyecto1.jpg',
        ]);

        Proyecto::create([
            'titulo' => 'Recubrimiento de Poleas en Banda Transportadora',
            'descripcion' => 'Recubrimiento con poliuretano para aumentar la fricción y mejorar la tracción en el sistema transportador de minerales, extendiendo la vida útil del sistema.',
            'empresa_contratante' => 'Compañía Minera Antapaccay',
            'servicios_empleados' => 'Aplicación de poliuretano, limpieza industrial, vulcanizado en caliente',
            'imagen_1' => 'proyectos/proyecto2.jpg',
            'imagen_2' => 'proyectos/proyecto2.jpg',
            'imagen_3' => 'proyectos/proyecto2.jpg',
        ]);

        Proyecto::create([
            'titulo' => 'Protección de Codos en Tuberías de Alta Presión',
            'descripcion' => 'Revestimiento interno de codos de tuberías con cerámica industrial para reducir la abrasión generada por el flujo constante de concentrado.',
            'empresa_contratante' => 'Minera Las Bambas',
            'servicios_empleados' => 'Revestimiento cerámico, desmontaje de codos, ensamblado y pruebas de presión',
            'imagen_1' => 'proyectos/proyecto3.jpg',
            'imagen_2' => 'proyectos/proyecto3.jpg',
            'imagen_3' => 'proyectos/proyecto3.jpg',
        ]);

        Proyecto::create([
            'titulo' => 'Reparación de Chute de Descarga con Poliuretano',
            'descripcion' => 'Se aplicó poliuretano líquido de alta resistencia para revestir un chute de descarga de mineral y evitar futuras fracturas por impacto.',
            'empresa_contratante' => 'Shougang Hierro Perú',
            'servicios_empleados' => 'Limpieza del chute, aplicación de poliuretano líquido, curado acelerado',
            'imagen_1' => 'proyectos/proyecto4.jpg',
            'imagen_2' => 'proyectos/proyecto4.jpg',
            'imagen_3' => 'proyectos/proyecto4.jpg',
        ]);

        Proyecto::create([
            'titulo' => 'Fabricación de Plancha Antidesgaste para Faja Transportadora',
            'descripcion' => 'Se fabricaron e instalaron planchas de caucho antidesgaste para proteger las paredes laterales del sistema de faja transportadora en zona de carga.',
            'empresa_contratante' => 'Cementos Yura S.A.',
            'servicios_empleados' => 'Diseño y corte de planchas, instalación, pruebas operativas',
            'imagen_1' => 'proyectos/proyecto5.jpg',
            'imagen_2' => 'proyectos/proyecto5.jpg',
            'imagen_3' => 'proyectos/proyecto5.jpg',
        ]);
    }
}
