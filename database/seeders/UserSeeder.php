<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhamad Jikril Aryanda',
            'email' => 'jikrilar2903@gmail.com',
            'password' => bcrypt('123'),
            'mobile_number' => '081996947657',
            'address' => 'Jl. Benteng Tengah',
            'role' => 'society'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'mobile_number' => '087879197929',
            'address' => 'Jl. Benteng Tengah',
            'role' => 'admin'
        ]);
    }
}
