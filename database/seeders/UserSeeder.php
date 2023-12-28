<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user = \App\Models\User::factory()->create([
            'name' => 'Student',
            'email' => '
}
