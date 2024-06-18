<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/about_me', [AboutMeController::class, 'index']);

Route::get('/skills', [SkillsController::class, 'index']);

Route::get('/hobbies', [HobbiesController::class, 'index']);
