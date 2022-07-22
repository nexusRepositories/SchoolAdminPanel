<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::exists()) return false;

        $this->faker = Faker::create();
        
        // Admin
        $roleAdmin = Role::where('slug', 'admin')->first(); 
        User::updateOrCreate([
            'first_name' => 'Admin',
            'last_name' => 'Adminovich',
            'birthday' => '01.01.2000',
            'email' => 'admin@adp.test',
            'email_verified_at' => now(),
            'password' => Hash::make('111'),
        ])->roles()->attach($roleAdmin);
            
        // Head Teacher
        $roleHeadTeacher = Role::where('slug', 'head-teacher')->first();
        User::create([
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'birthday' => '01.01.1980',
            'email' => 'head-teacher@adp.test',
            'email_verified_at' => now(),
            'password' => Hash::make('111'),
        ])->roles()->attach($roleHeadTeacher);

        // Teachers
        $this->role = Role::where('slug', 'teacher')->first();
        User::factory()->count(15)->create()->map(function($user) {

            $yearFrom = Carbon::now()->year - 60;
            $yearTo = Carbon::now()->year - 23;

            $user->update([
                'birthday' => $this->faker->dateTimeBetween("01.01.{$yearFrom}", "31.12.{$yearTo}"),
            ]);

            $user->roles()->attach($this->role);
        });

        // Make Students
        $this->role = Role::where('slug', 'student')->first();
        for ($i=7; $i<12 ; $i++) { 
            $this->year = Carbon::now()->year - $i;

            User::factory()->count(90)->create()->map(function($user) {
                $user->update([
                    'birthday' => Carbon::createFromDate($this->faker->dateTime())->year($this->year),
                ]);

                $user->roles()->attach($this->role);
            });
        }
    }
}
