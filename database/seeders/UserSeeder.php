<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('users')->insert([
            'username' => 'example',
            'email' => 'example@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'John Doe',
            'birthdate' => '1990-01-01',
            'description' => 'A sample user description.',
            'phone' => '1234567890',
            'gender' => 'male',
            // 'profile_picture' => 'path/to/profile_picture.jpg', // uncomment and provide the actual path if needed
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
