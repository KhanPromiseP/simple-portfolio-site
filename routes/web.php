<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/experience', ExperienceController::class)->name('experience');
Route::get('/projects', [ProjectController::class, 'index'])->name('project');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('project.show');
