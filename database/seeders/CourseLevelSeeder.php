<?php

namespace Database\Seeders;

use App\Models\CourseLevel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = ['Beginner', 'Intermediate', 'Advanced'];

        foreach ($levels as $level) {
            CourseLevel::create(['name' => $level]);
        }
    }
}
