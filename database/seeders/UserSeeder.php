<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Make Teachers
        User::TeacherFactory()->count(16)->create();

        // Make Students
        // Class 1
        User::StudentFactory()->count(90)->create()->map(function($user) {
            $year = Carbon::now()->year - 7;
            $user->update([
                'birthday' => Carbon::createFromDate($user->birthday)->year($year),
            ]);
        });
        // // Class 2
        User::StudentFactory()->count(90)->create([
            ])->each(function($user) {
                $year = Carbon::now()->year - 8;
                $user->update([
                    'birthday' => Carbon::createFromDate($user->birthday)->year($year),
                ]);
        });
        // // Class 3
        User::StudentFactory()->count(90)->create([
            ])->each(function($user) {
                $year = Carbon::now()->year - 9;
                $user->update([
                    'birthday' => Carbon::createFromDate($user->birthday)->year($year),
                ]);
        });
        // // Class 4
        User::StudentFactory()->count(90)->create([
            ])->each(function($user) {
                $year = Carbon::now()->year - 10;
                $user->update([
                    'birthday' => Carbon::createFromDate($user->birthday)->year($year),
                ]);
        });
        // // Class 5
        User::StudentFactory()->count(90)->create([
            ])->each(function($user) {
                $year = Carbon::now()->year - 11;
                $user->update([
                    'birthday' => Carbon::createFromDate($user->birthday)->year($year),
                ]);
        });
    }
}
