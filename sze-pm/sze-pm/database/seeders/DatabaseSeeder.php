<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Project::factory(10)->create();

        $projects = Project::all();

        foreach($projects as $project){
            Task::factory(rand(0, 5))->create(['project_id' => $project->id]);
        }
    }
}
