<?php

namespace Database\Seeders;

use App\Models\TopicCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topicCategories = [
            ['category_id' => 4, 'topic_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 5, 'topic_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 2, 'topic_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 3, 'topic_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 4, 'topic_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 4, 'topic_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 4, 'topic_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ];
        TopicCategories::insert($topicCategories);
    }
}
