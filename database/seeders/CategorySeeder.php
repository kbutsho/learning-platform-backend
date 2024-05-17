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
            ['name' => 'frontend-technologies', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'backend-technologies', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'web-development', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'machine-learning', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'programming-languages', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'computer-science-fundamentals', 'created_at' => now(), 'updated_at' => now()],
        ];
        Category::insert($categories);
    }
}
