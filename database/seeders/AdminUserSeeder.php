<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{

    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@newrubber.com'],
            [
                'name' => 'Administrador',
                'empresa' => 'New Rubber EIRL',
                'ruc' => '20605638041',
                'telefono' => '999999999',
                'rol' => 'admin',
                'password' => Hash::make('admin123'), 
            ]
        );

        User::updateOrCreate(
            ['email' => 'hlasoyalguien@gmail.com'],
            [
                'name' => 'Aragon Chunga Apaza',
                'empresa' => 'New Rubber EIRL',
                'ruc' => '20605638041',
                'telefono' => '999999999',
                'rol' => 'usuario_empresa',
                'password' => Hash::make('user1234'),
            ]
        );
    }
};
