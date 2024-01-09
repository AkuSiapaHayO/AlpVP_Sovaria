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
            'username' => 'JohnDo3',
            'email' => 'johndoe@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'John Doe',
            'birthdate' => '1990-01-01',
            'description' => 'A simple person passionate about creating delicious and wholesome meals. Join me on my culinary journey as I share my favorite recipes and cooking tips!',
            'phone' => '1234567890',
            'gender' => 'male',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_1.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'CookingMaster',
            'email' => 'cookingmaster@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Alice Johnson',
            'birthdate' => '1988-05-12',
            'description' => 'Passionate home cook on a culinary journey. Join me as I explore the world of flavors and share my favorite recipes with you!',
            'phone' => '9876543210',
            'gender' => 'female',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_2.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'HealthyChef123',
            'email' => 'healthychef@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Emma Wilson',
            'birthdate' => '1992-08-21',
            'description' => 'Exploring the world of healthy and delicious recipes. Join me on a journey to better living through nutritious and tasty meals!',
            'phone' => '8765432109',
            'gender' => 'female',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_3.jpeg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'FoodieExplorer',
            'email' => 'foodieexplorer@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'James Smith',
            'birthdate' => '1985-11-30',
            'description' => 'Embarking on a culinary adventure to discover unique flavors and share delightful recipes from around the globe!',
            'phone' => '7654321098',
            'gender' => 'male',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_4.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'BakingEnthusiast',
            'email' => 'bakingenthusiast@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Sophia Davis',
            'birthdate' => '1989-04-15',
            'description' => 'Passionate about baking and creating sweet treats. Join me in the kitchen as we whip up delicious desserts and pastries!',
            'phone' => '6543210987',
            'gender' => 'female',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_5.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'GrillingPro',
            'email' => 'grillingpro@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Michael Brown',
            'birthdate' => '1983-06-07',
            'description' => 'Mastering the art of grilling and BBQ. Join me for sizzling recipes and tips to elevate your outdoor cooking game!',
            'phone' => '5432109876',
            'gender' => 'male',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_6.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'VeggieDelight',
            'email' => 'veggiedelight@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Olivia Green',
            'birthdate' => '1993-12-12',
            'description' => 'Sharing my love for vegetarian cuisine. Join me in exploring tasty and nutritious plant-based recipes!',
            'phone' => '9876543210',
            'gender' => 'female',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_7.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'SmoothieLover',
            'email' => 'smoothielover@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Daniel Taylor',
            'birthdate' => '1987-09-28',
            'description' => 'Passionate about creating refreshing and nutritious smoothies. Join me for tasty and healthy blended delights!',
            'phone' => '8765432109',
            'gender' => 'male',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_8.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'FamilyChef',
            'email' => 'familychef@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Ella Johnson',
            'birthdate' => '1995-05-20',
            'description' => 'Creating delightful meals for the whole family. Join me on a culinary journey filled with family-friendly recipes!',
            'phone' => '7654321098',
            'gender' => 'female',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_9.jpeg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'FitKitchen',
            'email' => 'fitkitchen@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Christopher White',
            'birthdate' => '1984-04-03',
            'description' => 'Dedicated to fitness-inspired recipes. Join me in the kitchen for healthy and delicious meals that fuel an active lifestyle!',
            'phone' => '6543210987',
            'gender' => 'male',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_10.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'SweetsExplorer',
            'email' => 'sweetsexplorer@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Ava Miller',
            'birthdate' => '1991-02-15',
            'description' => 'Indulging in the world of sweet creations. Join me for delightful desserts and sugary adventures!',
            'phone' => '5432109876',
            'gender' => 'female',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_11.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('users')->insert([
            'username' => 'HealthyCravings',
            'email' => 'healthycravings@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Sophia Turner',
            'birthdate' => '1988-07-24',
            'description' => 'Exploring the world of healthy and flavorful cravings. Join me for nutritious and delicious recipes!',
            'phone' => '8765432101',
            'gender' => 'female',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_12.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'GourmetAdventures',
            'email' => 'gourmetadventures@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Nathan Davis',
            'birthdate' => '1993-03-11',
            'description' => 'Embarking on gourmet adventures in my kitchen. Join me for unique and exquisite culinary experiences!',
            'phone' => '7654321092',
            'gender' => 'male',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_13.jpeg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'BakingMaestro',
            'email' => 'bakingmaestro@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Emma Robinson',
            'birthdate' => '1985-12-08',
            'description' => 'Mastering the art of baking. Join me for delightful treats and baking secrets!',
            'phone' => '6543210983',
            'gender' => 'female',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_14.jpeg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'GrillMaster',
            'email' => 'grillmaster@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'William Adams',
            'birthdate' => '1990-09-17',
            'description' => 'Passionate about grilling perfection. Join me for sizzling recipes straight from the grill!',
            'phone' => '5432109874',
            'gender' => 'male',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_15.jpeg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'FoodExplorerX',
            'email' => 'foodexplorerx@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Aiden Garcia',
            'birthdate' => '1989-04-29',
            'description' => 'Exploring diverse cuisines and flavors. Join me on a culinary journey around the world!',
            'phone' => '4321098765',
            'gender' => 'male',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_16.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'FitFoodieJourney',
            'email' => 'fitfoodiejourney@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Harper Mitchell',
            'birthdate' => '1992-11-14',
            'description' => 'Documenting my fitness and food journey. Join me for nutritious meals and wellness tips!',
            'phone' => '3210987654',
            'gender' => 'female',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_17.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'TastyTreats',
            'email' => 'tastytreats@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Evelyn Adams',
            'birthdate' => '1986-06-23',
            'description' => 'Indulging in the world of tasty treats. Join me for sweet and savory delights!',
            'phone' => '2109876543',
            'gender' => 'female',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_18.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'GreenEats',
            'email' => 'greeneats@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Henry Wilson',
            'birthdate' => '1994-08-05',
            'description' => 'Promoting a green and healthy lifestyle through delicious plant-based recipes. Join me on the green journey!',
            'phone' => '1098765432',
            'gender' => 'male',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_19.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'CulinaryExplorer',
            'email' => 'culinaryexplorer@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password123!'),
            'name' => 'Madison Clark',
            'birthdate' => '1987-02-19',
            'description' => 'Embarking on a culinary adventure. Join me in exploring unique and delightful recipes from around the globe!',
            'phone' => '9876543210',
            'gender' => 'female',
            'profile_picture' => 'http://10.0.2.2:8000/photos/profile_image_20.jpeg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
