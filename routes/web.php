<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [\App\http\Controllers\WorkerController::class,'index']);
Route::get('/show', [\App\http\Controllers\WorkerController::class,'show']);