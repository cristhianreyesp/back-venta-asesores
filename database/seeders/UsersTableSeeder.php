<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        User::create([
            'dni' => '71397671',
            'name' => 'Cristhian',
            'lastname' => 'Reyes Puma',
            'email' => 'usuario@example.com',
            'password' => Hash::make('koko123456'),
            'team_id' => 1, // Asegúrate de que exista un equipo con ID 1 en la tabla teams
        ]);
        User::create([
            'dni' => '12345678',
            'name' => 'Jorge',
            'lastname' => 'Moreno',
            'email' => 'usuario1@example.com',
            'password' => Hash::make('koko123456'),
            'team_id' => 1, // Asegúrate de que exista un equipo con ID 1 en la tabla teams
        ]);
    }
}
