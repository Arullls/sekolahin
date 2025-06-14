<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DashboardController;

// routes/api.php
Route::middleware('auth:sanctum')->get('/dashboard', [DashboardController::class, 'index']);
