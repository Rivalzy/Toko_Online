<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John',
            'email' => 'john@example.com',
            'role' => '1',
            'status' => '1',
            'hp' => '1234567890',
            'password' => bcrypt('P@55word'),
        ]);
        User::create([
            'name' => 'Doe',
            'email' => 'Doe@example.com',
            'role' => '0',
            'status' => '1',
            'hp' => '0891234567',
            'password' => bcrypt('P4$$w0rd'),
        ]);
    }
}
