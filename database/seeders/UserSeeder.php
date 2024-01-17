<?php

namespace Database\Seeders;

use App\Models\Instructor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createStudent();
        $this->createInstructor();

        // Student creation
        User::factory(10)->create(['role' => 'student'])->each(function ($user) {
            Student::factory()->create(['user_id' => $user->id]);
        });

        // Instructor creation
        User::factory(10)->create(['role' => 'instructor'])->each(function ($user) {
            Instructor::factory()->create([
                'user_id' => $user->id
            ]);
        });
    }

    private function createStudent(): void
    {
        $student_user = User::create([
            "name" => "Mr. Student",
            "email" => "student@mail.com",
            "username" => "student",
            "password" => bcrypt("password"),
            "role" => 'student',
            "avatar" => 'frontend/images/avatar.png',
            "phone_number" => "+880123456789",
            "title" => "This is Student Title !",
            "bio" => "Sometimes you may wish to stop running validation rules on an attribute after the first validation  failure. To do so, assign the bail rule to the attribute:",
            "address" => "Dhaka, Bangladesh",
        ]);

        Student::create([
            'user_id' => $student_user->id
        ]);
    }

    private function createInstructor(): void
    {
        $student_user = User::create([
            "name" => "Mr. Instructor",
            "email" => "instructor@mail.com",
            "username" => "instructor",
            "password" => bcrypt("password"),
            "role" => 'instructor',
            "avatar" => 'frontend/images/avatar.png',
            "phone_number" => "+880123456789",
            "title" => "This is Student Title !",
            "bio" => "Sometimes you may wish to stop running validation rules on an attribute after the first validation  failure. To do so, assign the bail rule to the attribute:",
            "address" => "Dhaka, Bangladesh",
        ]);

        Instructor::create([
            'user_id' => $student_user->id,
            'total_enrolled' => 1000,
            'total_stars' => 100,
            'total_reviews' => 30,
            'is_featured' => 1,
            'featured_at' => now(),
            'is_popular' => 1,
            'popular_at' => now(),
        ]);
    }
}
