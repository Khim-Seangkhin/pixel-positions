<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

Route::resource('register', RegisteredUserController::class);

Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

Route::resource('login', SessionController::class);

Route::delete('/logout', [SessionController::class, 'logout']);