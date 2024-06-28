<?php

namespace Database\Seeders;

use App\Models\Lamp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lamp::create([
            'codename' => 'Benteng Streep Lamp',
            'status' => 'operate'
        ]);

        Lamp::create([
            'codename' => 'Sukaraja Street Lamp',
            'status' => 'operate'
        ]);
    }
}
