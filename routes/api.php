<?php

// use App\Http\Controllers\PostController;
// use Illuminate\Support\Facades\Route;

// Route::apiResource('posts', PostController::class);
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WorldCupController;

Route::get('/worldcup', [WorldCupController::class, 'index']);
