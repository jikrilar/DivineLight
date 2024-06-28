<?php

namespace Database\Seeders;

use App\Models\PowerConsumption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PowerConsumptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PowerConsumption::create([
            'power' => 1,
            'current' => 1,
            'voltage' => 1,
            'energy' => 1
        ]);
    }
}
