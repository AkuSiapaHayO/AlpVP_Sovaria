<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Appetizers', 'category_image' => 'http://10.0.2.2:8000/categories/appetizer_image.jpeg'],
            ['name' => 'Main Dishes', 'category_image' => 'http://10.0.2.2:8000/categories/main_dish_image.jpg'],
            ['name' => 'Desserts', 'category_image' => 'http://10.0.2.2:8000/categories/dessert_image.jpg'],
            ['name' => 'Beverages', 'category_image' => 'http://10.0.2.2:8000/categories/beverage_image.jpg'],
            ['name' => 'Salads', 'category_image' => 'http://10.0.2.2:8000/categories/salad_image.jpg'],
            ['name' => 'Pasta', 'category_image' => 'http://10.0.2.2:8000/categories/pasta_image.jpeg'],
            ['name' => 'Soups', 'category_image' => 'http://10.0.2.2:8000/categories/soup_image.jpg'],
            ['name' => 'Breakfast', 'category_image' => 'http://10.0.2.2:8000/categories/breakfast_image.jpg'],
            ['name' => 'Snacks', 'category_image' => 'http://10.0.2.2:8000/categories/snack_image.jpg'],
            ['name' => 'Seafood', 'category_image' => 'http://10.0.2.2:8000/categories/seafood_image.jpg'],
            ['name' => 'Vegetarian', 'category_image' => 'http://10.0.2.2:8000/categories/vegetarian_image.jpg'],
            ['name' => 'Grilling', 'category_image' => 'http://10.0.2.2:8000/categories/grilling_image.jpeg'],
            ['name' => 'Asian Cuisine', 'category_image' => 'http://10.0.2.2:8000/categories/asian_cuisine_image.jpg'],
            ['name' => 'Healthy Choices', 'category_image' => 'http://10.0.2.2:8000/categories/healthy_choices_image.jpeg'],
            ['name' => 'High-Protein', 'category_image' => 'http://10.0.2.2:8000/categories/high_protein_image.jpg'],
            ['name' => 'Low-Carb', 'category_image' => 'http://10.0.2.2:8000/categories/low_carb_image.jpeg'],
            ['name' => 'Vegetable-Based', 'category_image' => 'http://10.0.2.2:8000/categories/vegetable_based_image.jpg'],
        ];

        Category::insert($categories);
    }
}
