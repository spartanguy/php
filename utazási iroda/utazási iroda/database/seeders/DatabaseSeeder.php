<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Travel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Country::factory(10)->create();

        $countries = Country::all();

        foreach ($countries as $country) {
            Travel::factory(rand(0, 5))->create(['country_id' => $country->id]);
        }

        Country::factory()->create();
    }
}
