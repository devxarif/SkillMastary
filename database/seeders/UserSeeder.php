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
            'user_id' => $student_user->id
        ]);
    }
}
