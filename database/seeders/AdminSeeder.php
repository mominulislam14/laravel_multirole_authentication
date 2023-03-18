<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        //test user
        User::create([
            'name' => 'Test',
            'email' => 'test@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
        ]);
    }
}
