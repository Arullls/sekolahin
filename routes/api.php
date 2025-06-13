<?php

// routes/api.php
Route::middleware('auth:sanctum')->get('/dashboard', [DashboardController::class, 'index']);
