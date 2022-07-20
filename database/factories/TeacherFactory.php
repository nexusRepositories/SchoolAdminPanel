<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeacherFactory extends Factory
{
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $yearFrom = Carbon::now()->year - 60;
        $yearTo = Carbon::now()->year - 23;
        // echo(Carbon::now()->year($yearFrom)->format('Y') . ' - ' . Carbon::now()->year($yearTo)->format('Y') . "\n");

        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'birthday' => $this->faker->dateTimeBetween("01.01.{$yearFrom}", "31.12.{$yearTo}"),
            'email_verified_at' => now(),
            'password' => Hash::make('111'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
