<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
User::firstOrCreate(
    ['email' => 'admin@demo.com'],
    [
        'name' => 'Admin',
        'password' => Hash::make('password'),
        'role' => 'admin',
    ]
);    }
}
