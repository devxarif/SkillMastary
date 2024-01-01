<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            [
                'name' => 'English',
                'code' => 'en',
                'direction' => 'ltr',
                'created_at' => now(),
            ],
            [
                'name' => 'Arabic',
                'code' => 'ar',
                'direction' => 'rtl',
                'created_at' => now(),
            ],
            [
                'name' => 'French',
                'code' => 'fr',
                'direction' => 'ltr',
                'created_at' => now(),
            ],
        ];

        foreach ($languages as $language) {
            Language::create($language);
        }
    }
}
