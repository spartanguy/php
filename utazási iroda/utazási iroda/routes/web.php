<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

Route::get('/', [TravelController::class, 'index']);
Route::get('/countries/{country}', [TravelController::class, 'show']);
