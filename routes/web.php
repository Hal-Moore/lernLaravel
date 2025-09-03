<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [\App\http\Controllers\WorkerController::class,'index']);
Route::get('/show', [\App\http\Controllers\WorkerController::class,'show']);
Route::get('/create', [\App\http\Controllers\WorkerController::class,'create']);
Route::get('/update', [\App\Http\Controllers\WorkerController::class,'update']);
Route::get('/delete',[\App\Http\Controllers\WorkerController::class,'delete']);