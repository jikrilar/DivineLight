<?php

namespace Database\Seeders;

use App\Models\Relay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Relay::create([
            'state' => 1
        ]);
    }
}
