<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'avatar' => 'frontend/images/avatar.png',
        ]);

        // // Admin
        // $role = Role::first();
        // $admin = new Admin();
        // $admin->name = 'Zakir Soft';
        // $admin->email = 'developer@mail.com';
        // $admin->image = 'backend/image/default.png';
        // $admin->password = bcrypt('password');
        // $admin->email_verified_at = Carbon::now();
        // $admin->remember_token = Str::random(10);
        // $admin->save();
        // $admin->assignRole($role);

        // $admin = new Admin();
        // $admin->name = 'Admin';
        // $admin->email = 'admin@mail.com';
        // $admin->image = 'backend/image/default.png';
        // $admin->password = bcrypt('password');
        // $admin->email_verified_at = Carbon::now();
        // $admin->remember_token = Str::random(10);
        // $admin->save();
        // $admin->assignRole($role);
    }
}
