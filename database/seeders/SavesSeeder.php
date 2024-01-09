<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SavesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('saves')->insert([
            'user_id' => 1,
            'recipe_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 3,
            'recipe_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 4,
            'recipe_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 5,
            'recipe_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 6,
            'recipe_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 7,
            'recipe_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 8,
            'recipe_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 9,
            'recipe_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 10,
            'recipe_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 11,
            'recipe_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 1,
            'recipe_id' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 3,
            'recipe_id' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 4,
            'recipe_id' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 5,
            'recipe_id' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 6,
            'recipe_id' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 7,
            'recipe_id' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 8,
            'recipe_id' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 9,
            'recipe_id' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 1,
            'recipe_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 3,
            'recipe_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 4,
            'recipe_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 5,
            'recipe_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 6,
            'recipe_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 7,
            'recipe_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 1,
            'recipe_id' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 9,
            'recipe_id' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 10,
            'recipe_id' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 11,
            'recipe_id' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 1,
            'recipe_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('saves')->insert([
            'user_id' => 2,
            'recipe_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
