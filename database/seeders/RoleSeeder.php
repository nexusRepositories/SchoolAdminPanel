<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);

        Role::updateOrCreate([
            'name' => 'Head Teacher',
            'slug' => 'head-teacher',
        ]);

        Role::updateOrCreate([
            'name' => 'Teacher',
            'slug' => 'teacher',
        ]);

        Role::updateOrCreate([
            'name' => 'Student',
            'slug' => 'student',
        ]);
    }
}
