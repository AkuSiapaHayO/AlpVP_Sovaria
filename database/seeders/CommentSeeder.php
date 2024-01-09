<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Comment for recipe 1
        DB::table('comments')->insert([
            'user_id' => 1,
            'recipe_id' => 1,
            'comment' => 'This recipe is amazing!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 2
        DB::table('comments')->insert([
            'user_id' => 1,
            'recipe_id' => 2,
            'comment' => 'I love this dish!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 3
        DB::table('comments')->insert([
            'user_id' => 1,
            'recipe_id' => 3,
            'comment' => 'Delicious cookies!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 2 comments
        $userId2 = 2;

        // Comment for recipe 4
        DB::table('comments')->insert([
            'user_id' => $userId2,
            'recipe_id' => 4,
            'comment' => 'Grilled salmon is my favorite!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 5
        DB::table('comments')->insert([
            'user_id' => $userId2,
            'recipe_id' => 5,
            'comment' => 'Delicious Buddha Bowl!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 6
        DB::table('comments')->insert([
            'user_id' => $userId2,
            'recipe_id' => 6,
            'comment' => 'Mango Salsa Chicken is a must-try!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 3 comments
        $userId3 = 3;

        // Comment for recipe 7
        DB::table('comments')->insert([
            'user_id' => $userId3,
            'recipe_id' => 7,
            'comment' => 'Healthy and tasty!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 8
        DB::table('comments')->insert([
            'user_id' => $userId3,
            'recipe_id' => 8,
            'comment' => 'Amazing flavors in this dish!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 9
        DB::table('comments')->insert([
            'user_id' => $userId3,
            'recipe_id' => 9,
            'comment' => 'I enjoyed making this recipe!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 4 comments
        $userId4 = 4;

        // Comment for recipe 10
        DB::table('comments')->insert([
            'user_id' => $userId4,
            'recipe_id' => 10,
            'comment' => 'Delicious and easy to make!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 11
        DB::table('comments')->insert([
            'user_id' => $userId4,
            'recipe_id' => 11,
            'comment' => 'One of my favorites!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 12
        DB::table('comments')->insert([
            'user_id' => $userId4,
            'recipe_id' => 12,
            'comment' => 'Great taste and presentation!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 5 comments
        $userId5 = 5;

        // Comment for recipe 13
        DB::table('comments')->insert([
            'user_id' => $userId5,
            'recipe_id' => 13,
            'comment' => 'Perfectly cooked and seasoned!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 14
        DB::table('comments')->insert([
            'user_id' => $userId5,
            'recipe_id' => 14,
            'comment' => 'These cookies are a hit!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 15
        DB::table('comments')->insert([
            'user_id' => $userId5,
            'recipe_id' => 15,
            'comment' => 'Lovely flavors in every bite!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 6 comments
        $userId6 = 6;

        // Comment for recipe 16
        DB::table('comments')->insert([
            'user_id' => $userId6,
            'recipe_id' => 16,
            'comment' => 'Grilled salmon with a unique twist!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 17
        DB::table('comments')->insert([
            'user_id' => $userId6,
            'recipe_id' => 17,
            'comment' => 'Vegetarian Buddha Bowl is so colorful!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 18
        DB::table('comments')->insert([
            'user_id' => $userId6,
            'recipe_id' => 18,
            'comment' => 'Mango Salsa Chicken is a tropical delight!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 7 comments
        $userId7 = 7;

        // Comment for recipe 19
        DB::table('comments')->insert([
            'user_id' => $userId7,
            'recipe_id' => 19,
            'comment' => 'Healthy and delicious combination!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 20
        DB::table('comments')->insert([
            'user_id' => $userId7,
            'recipe_id' => 20,
            'comment' => 'Tenderloin Steak is a must-try!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 21
        DB::table('comments')->insert([
            'user_id' => $userId7,
            'recipe_id' => 21,
            'comment' => 'Chocolate Chip Cookies are my favorite!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 8 comments
        $userId8 = 8;

        // Comment for recipe 22
        DB::table('comments')->insert([
            'user_id' => $userId8,
            'recipe_id' => 22,
            'comment' => 'Grilled Salmon is a healthy choice!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 23
        DB::table('comments')->insert([
            'user_id' => $userId8,
            'recipe_id' => 23,
            'comment' => 'Vegetarian Buddha Bowl is my go-to recipe!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 24
        DB::table('comments')->insert([
            'user_id' => $userId8,
            'recipe_id' => 24,
            'comment' => 'Mango Salsa Chicken is a flavorful dish!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 9 comments
        $userId9 = 9;

        // Comment for recipe 25
        DB::table('comments')->insert([
            'user_id' => $userId9,
            'recipe_id' => 25,
            'comment' => 'Grilled Salmon with lemon is a game-changer!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 26
        DB::table('comments')->insert([
            'user_id' => $userId9,
            'recipe_id' => 26,
            'comment' => 'Vegetarian Buddha Bowl is packed with nutrients!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 27
        DB::table('comments')->insert([
            'user_id' => $userId9,
            'recipe_id' => 27,
            'comment' => 'Mango Salsa Chicken is a crowd-pleaser!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 10 comments
        $userId10 = 10;

        // Comment for recipe 28
        DB::table('comments')->insert([
            'user_id' => $userId10,
            'recipe_id' => 28,
            'comment' => 'Grilled Salmon is my favorite dish!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 29
        DB::table('comments')->insert([
            'user_id' => $userId10,
            'recipe_id' => 29,
            'comment' => 'Tenderloin Steak is perfect for a special occasion!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 30
        DB::table('comments')->insert([
            'user_id' => $userId10,
            'recipe_id' => 30,
            'comment' => 'Chocolate Chip Cookies are a classic treat!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 11 comments
        $userId11 = 11;

        // Comment for recipe 31
        DB::table('comments')->insert([
            'user_id' => $userId11,
            'recipe_id' => 31,
            'comment' => 'Grilled Salmon is a healthy choice!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 32
        DB::table('comments')->insert([
            'user_id' => $userId11,
            'recipe_id' => 32,
            'comment' => 'Vegetarian Buddha Bowl is my go-to recipe!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 33
        DB::table('comments')->insert([
            'user_id' => $userId11,
            'recipe_id' => 33,
            'comment' => 'Mango Salsa Chicken is a flavorful dish!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 12 comments
        $userId12 = 12;

        // Comment for recipe 34
        DB::table('comments')->insert([
            'user_id' => $userId12,
            'recipe_id' => 34,
            'comment' => 'Grilled Salmon with lemon is a game-changer!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 35
        DB::table('comments')->insert([
            'user_id' => $userId12,
            'recipe_id' => 35,
            'comment' => 'Vegetarian Buddha Bowl is packed with nutrients!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 36
        DB::table('comments')->insert([
            'user_id' => $userId12,
            'recipe_id' => 36,
            'comment' => 'Mango Salsa Chicken is a crowd-pleaser!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 13 comments
        $userId13 = 13;

        // Comment for recipe 37
        DB::table('comments')->insert([
            'user_id' => $userId13,
            'recipe_id' => 37,
            'comment' => 'Grilled Salmon is my favorite dish!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 38
        DB::table('comments')->insert([
            'user_id' => $userId13,
            'recipe_id' => 38,
            'comment' => 'Tenderloin Steak is perfect for a special occasion!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 39
        DB::table('comments')->insert([
            'user_id' => $userId13,
            'recipe_id' => 39,
            'comment' => 'Chocolate Chip Cookies are a classic treat!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 14 comments
        $userId14 = 14;

        // Comment for recipe 40
        DB::table('comments')->insert([
            'user_id' => $userId14,
            'recipe_id' => 40,
            'comment' => 'Grilled Salmon is a healthy choice!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 41
        DB::table('comments')->insert([
            'user_id' => $userId14,
            'recipe_id' => 41,
            'comment' => 'Vegetarian Buddha Bowl is my go-to recipe!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 42
        DB::table('comments')->insert([
            'user_id' => $userId14,
            'recipe_id' => 42,
            'comment' => 'Mango Salsa Chicken is a flavorful dish!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 15 comments
        $userId15 = 15;

        // Comment for recipe 43
        DB::table('comments')->insert([
            'user_id' => $userId15,
            'recipe_id' => 43,
            'comment' => 'Grilled Salmon with lemon is a game-changer!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 44
        DB::table('comments')->insert([
            'user_id' => $userId15,
            'recipe_id' => 44,
            'comment' => 'Vegetarian Buddha Bowl is packed with nutrients!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 45
        DB::table('comments')->insert([
            'user_id' => $userId15,
            'recipe_id' => 45,
            'comment' => 'Mango Salsa Chicken is a crowd-pleaser!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 16 comments
        $userId16 = 16;

        // Comment for recipe 46
        DB::table('comments')->insert([
            'user_id' => $userId16,
            'recipe_id' => 46,
            'comment' => 'Grilled Salmon is amazing!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 47
        DB::table('comments')->insert([
            'user_id' => $userId16,
            'recipe_id' => 47,
            'comment' => 'Tenderloin Steak is a delicious choice!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 48
        DB::table('comments')->insert([
            'user_id' => $userId16,
            'recipe_id' => 48,
            'comment' => 'Chocolate Chip Cookies are my favorite treat!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 17 comments
        $userId17 = 17;

        // Comment for recipe 49
        DB::table('comments')->insert([
            'user_id' => $userId17,
            'recipe_id' => 49,
            'comment' => 'Grilled Salmon is a healthy and tasty dish!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 50
        DB::table('comments')->insert([
            'user_id' => $userId17,
            'recipe_id' => 50,
            'comment' => 'Vegetarian Buddha Bowl is a colorful delight!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 51
        DB::table('comments')->insert([
            'user_id' => $userId17,
            'recipe_id' => 51,
            'comment' => 'Mango Salsa Chicken is perfect for summer!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 18 comments
        $userId18 = 18;

        // Comment for recipe 52
        DB::table('comments')->insert([
            'user_id' => $userId18,
            'recipe_id' => 52,
            'comment' => 'Grilled Salmon with lemon is a must-try!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 53
        DB::table('comments')->insert([
            'user_id' => $userId18,
            'recipe_id' => 53,
            'comment' => 'Tenderloin Steak is so juicy and flavorful!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 54
        DB::table('comments')->insert([
            'user_id' => $userId18,
            'recipe_id' => 54,
            'comment' => 'Chocolate Chip Cookies are the best!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 19 comments
        $userId19 = 19;

        // Comment for recipe 55
        DB::table('comments')->insert([
            'user_id' => $userId19,
            'recipe_id' => 55,
            'comment' => 'Grilled Salmon is a family favorite!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 56
        DB::table('comments')->insert([
            'user_id' => $userId19,
            'recipe_id' => 56,
            'comment' => 'Vegetarian Buddha Bowl is a wholesome meal!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 57
        DB::table('comments')->insert([
            'user_id' => $userId19,
            'recipe_id' => 57,
            'comment' => 'Mango Salsa Chicken is a tropical delight!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder for user 20 comments
        $userId20 = 20;

        // Comment for recipe 58
        DB::table('comments')->insert([
            'user_id' => $userId20,
            'recipe_id' => 58,
            'comment' => 'Grilled Salmon is perfect for summer grilling!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 59
        DB::table('comments')->insert([
            'user_id' => $userId20,
            'recipe_id' => 59,
            'comment' => 'Tenderloin Steak is a special treat!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Comment for recipe 60
        DB::table('comments')->insert([
            'user_id' => $userId20,
            'recipe_id' => 60,
            'comment' => 'Chocolate Chip Cookies are my guilty pleasure!',
            'date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
