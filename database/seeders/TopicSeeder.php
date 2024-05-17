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
            ['name' => 'python', 'description' => 'coming soon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'django', 'description' => 'coming soon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'numpy', 'description' => 'coming soon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'pandas', 'description' => 'coming soon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'matplotlib', 'description' => 'coming soon', 'created_at' => now(), 'updated_at' => now()],
        ];
        Topic::insert($topics);
    }
}
