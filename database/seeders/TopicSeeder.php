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
            ['name' => 'python', 'heading' => 'coming soon', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'django', 'heading' => 'coming soon', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'numpy', 'heading' => 'coming soon', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'pandas', 'heading' => 'coming soon', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'matplotlib', 'heading' => 'coming soon', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
        ];
        Topic::insert($topics);
    }
}