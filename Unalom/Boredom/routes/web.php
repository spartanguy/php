<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryControllerel;

Route::get('/', [CategoryControllerel::class, 'index']);
Route::get('/categories/{activities}', [CategoryControllerel::class, 'show']);
