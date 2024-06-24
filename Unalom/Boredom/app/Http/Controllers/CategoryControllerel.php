<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\activity;
use Illuminate\Http\Request;

class CategoryControllerel extends Controller
{
    public function index(){
        $activity = activity::all()->random();

        return view('index', compact('activity'));
    }

    public function show($categoryId){
        $pass = Category::findOrFail($categoryId);
        return view('show', compact('pass'));
    }
}
