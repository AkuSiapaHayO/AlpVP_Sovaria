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
        ];
    
        Category::insert($categories);
    }
}
