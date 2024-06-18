<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

//Welcome Page
Route::get('/', [AboutMeController::class, 'index']);

//About Me Route
Route::get('/about_me', [AboutMeController::class, 'index']);

//Skills Route
Route::get('/skills', [SkillsController::class, 'index']);

//Hobbies Route
Route::get('/hobbies', [HobbiesController::class, 'index']);
