<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'frontend-technologies', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'backend-technologies', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'web-development', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'machine-learning', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'programming-languages', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'computer-science-fundamentals', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
        ];
        Category::insert($categories);
    }
}