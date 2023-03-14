<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoboticsKitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoboticsKit::create([
            'name' => 'StarterKit'
        ]);

        RoboticsKit::create([
            'name' => 'Educational Robotics Kit'
        ]);

        RoboticsKit::create([
            'name' => 'Kit5'
        ]);
    }
}
