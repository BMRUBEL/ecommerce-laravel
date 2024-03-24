<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Carbon\Factory;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 200; $i++) {
            Employee::create([
                'em_id' => $faker->unique()->randomNumber(),
                'images' => $faker->imageUrl(),
                'name' => $faker->name,
                'designation' => $faker->jobTitle,
                'address' => $faker->address,
                'phone' => $faker->unique()->phoneNumber,
                'email' => $faker->unique()->safeEmail,
            ]);
        }
    }
}
