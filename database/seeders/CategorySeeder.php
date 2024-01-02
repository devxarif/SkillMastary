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
            "Development",
            "Business",
            "Finance & Accounting",
            "IT & Software",
            "Office Productivity",
            "Personal Development",
            "Design",
            "Marketing",
            "Lifestyle",
            "Photography & Video",
            "Health & Fitness",
            "Music",
            "Teaching & Academics",
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,

            ]);
        }
    }
}
