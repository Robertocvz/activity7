<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'administrative'
        ]);

        // Teacher user
        User::create([
            'name' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'teacher'
        ]);

        // Student user
        User::create([
            'name' => 'Student',
            'email' => 'student@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'student'
        ]);
    }
}
