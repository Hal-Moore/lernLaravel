<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [\App\http\Controllers\WorkerController::class,'index'])->name('worker.index');
Route::get('/create', [\App\http\Controllers\WorkerController::class,'create'])->name('worker.create');
Route::get('/show/{worker}', [\App\http\Controllers\WorkerController::class,'show'])->name('worker.show');
Route::post('/workers', [\App\Http\Controllers\WorkerController::class,'store'])->name('worker.store');
Route::get('/workers/{worker}/edit', [\App\Http\Controllers\WorkerController::class,'edit'])->name('worker.edit');
Route::patch('/update/{worker}', [\App\Http\Controllers\WorkerController::class,'update'])->name('worker.update');
Route::get('/delete',[\App\Http\Controllers\WorkerController::class,'delete'])->name('worker.delete');