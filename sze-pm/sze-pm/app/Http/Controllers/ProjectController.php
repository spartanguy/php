<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;


class ProjectController extends Controller     
{
    public function index()
    {
        $projects = Project::all();

        return view('index', compact('projects'));
    }

    public function show($projectId)
    {
        $project = Project::findOrFail($projectId);

        return view('show', compact('project'));
    }
}
