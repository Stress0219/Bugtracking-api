<?php

use App\Http\Controllers\BugController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RelationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(BugController::class)->group(function(){
    Route::get('/bugs', 'index');
    Route::post('/bug', 'store');
    Route::get('/bug/{id}', 'show');
    Route::put('/bug/{id}', 'update');
    Route::delete('/bug/{id}', 'destroy');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/users', 'index');
    Route::post('/user', 'store');
    Route::get('/user/{id}', 'show');
    Route::put('/user/{id}', 'update');
    Route::delete('/user/{id}', 'destroy');
});

Route::controller(ProjectController::class)->group(function(){
    Route::get('/projects', 'index');
    Route::post('/project', 'store');
    Route::get('/project/{id}', 'show');
    Route::put('/project/{id}', 'update');
    Route::delete('/project/{id}', 'destroy');
});