<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345'),
            'role' => 'admin',
        ]);

        // Instructor
        User::create([
            'name' => 'John Instructor',
            'email' => 'instructor@example.com',
            'password' => Hash::make('12344'),
            'role' => 'instructor',
        ]);

        // Student
        User::create([
            'name' => 'Jane Student',
            'email' => 'student@example.com',
            'password' => Hash::make('12345'),
            'role' => 'student',
        ]);
    }
}
