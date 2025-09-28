<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {

        $adminRole = Role::where('name', 'admin')->first();
        $instructorRole = Role::where('name', 'instructor')->first();
        $studentRole = Role::where('name', 'student')->first();
        // Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345'),
            'role' => 'admin',
            'role_id'=> $adminRole->id,
        ]);

        // Instructor
        User::create([
            'name' => 'John Instructor',
            'email' => 'instructor@example.com',
            'password' => Hash::make('12345'),
            'role' => 'instructor',
            'role_id'=> $instructorRole->id,
        ]);

        // Student
        User::create([
            'name' => 'Jane Student',
            'email' => 'student@example.com',
            'password' => Hash::make('12345'),
            'role' => 'student',
            'role_id'=> $studentRole->id,
        ]);
    }
}
