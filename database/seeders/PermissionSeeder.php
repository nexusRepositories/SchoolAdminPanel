<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::updateOrCreate([
            'name' => 'Manage Users',
            'slug' => 'manage-users',
        ]);

        Permission::updateOrCreate([
            'name' => 'Manage Teachers',
            'slug' => 'manage-teachers',
        ]);

        Permission::updateOrCreate([
            'name' => 'Manage Students',
            'slug' => 'manage-students',
        ]);
    }
}
