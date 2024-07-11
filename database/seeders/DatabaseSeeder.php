<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        $faker = Faker::create();
        foreach(range(1, 100) as $index) {
            DB::table('emp')->insert([
                'emp_name' => $faker->sentence(5),
                'emp_details' => $faker->sentence(5)
            ]);
    }
    }
}
