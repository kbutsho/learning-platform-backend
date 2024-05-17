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
            ['name' => 'frontend'],
            ['name' => 'backend'],
            ['name' => 'web-development'],
            ['name' => 'machine-learning'],
            ['name' => 'computer-science-fundamentals'],
        ];
        Category::insert($categories);
    }
}
