<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [
            ['name' => 'python', 'heading' => 'coming soon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'django', 'heading' => 'coming soon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'numpy', 'heading' => 'coming soon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'pandas', 'heading' => 'coming soon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'matplotlib', 'heading' => 'coming soon', 'created_at' => now(), 'updated_at' => now()],
        ];
        Topic::insert($topics);
    }
}