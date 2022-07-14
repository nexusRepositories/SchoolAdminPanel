<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::exists()) return false;

        User::updateOrCreate([
            'url' => 'assets/admin-logo.png',
            'first_name' => 'Admin',
            'last_name' => 'Adminovich',
            'birthday' => '01.01.2000',
            'phone' => '+990001112233',
            'email' => 'admin@admin.test',
            'email_verified_at' => now(),
            'password' => Hash::make('111'),
        ]);
    }
}
