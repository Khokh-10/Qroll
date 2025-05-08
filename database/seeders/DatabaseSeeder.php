<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // Role::factory(4)->create();
        // User::factory(100)->create();
        // Role::create(['name' => 'admin']);
        // Role::create(['name' => 'doctor']);
        // Role::create(['name' => 'student']);
        // Role::create(['name' => 'engineer']);
        User::create([
            'name' => 'Dr Wael',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'role' => 'admin', 
        ]);
    }
}
