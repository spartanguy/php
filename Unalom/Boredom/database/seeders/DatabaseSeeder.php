<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\category;
use App\Models\activity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $categories = category::factory(10)->create();

        foreach ($categories as $category) {
            activity::factory(rand(0, 5))->create(['category_id' => $category->id]);
        }
    }
}
