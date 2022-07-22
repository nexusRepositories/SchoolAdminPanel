<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name' => '1A',
        ]);
        Group::create([
            'name' => '1B',
        ]);
        Group::create([
            'name' => '1C',
        ]);

        Group::create([
            'name' => '2A',
        ]);
        Group::create([
            'name' => '2B',
        ]);
        Group::create([
            'name' => '2C',
        ]);

        Group::create([
            'name' => '3A',
        ]);
        Group::create([
            'name' => '3B',
        ]);
        Group::create([
            'name' => '3C',
        ]);

        Group::create([
            'name' => '4A',
        ]);
        Group::create([
            'name' => '4B',
        ]);
        Group::create([
            'name' => '4C',
        ]);

        Group::create([
            'name' => '5A',
        ]);
        Group::create([
            'name' => '5B',
        ]);
        Group::create([
            'name' => '5C',
        ]);
    }
}
