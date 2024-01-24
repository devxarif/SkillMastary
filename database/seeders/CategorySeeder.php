<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = \File::json(resource_path('content/categories.json'));

        foreach ($categories as $category) {
            $category = Category::create([
                'name' => $category['name'],
                'image' => $category['image'],
            ]);

            foreach ($category['subcategories'] as $subcategory) {
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => $subcategory
                ]);
            }
        }
    }
}
