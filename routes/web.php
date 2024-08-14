<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


//Display data on home page
Route::get('/',[TaskController::class ,'index'])->name('index');
// create Route
Route::get('/create',[TaskController::class, 'create'])->name('create');
//store Route
Route::post('/task', [TaskController::class,'store'])->name('store');
//show Route
Route::get('/task/{id}',[TaskController::class,'show'])->name('task.show');
//edit Route
Route::get('/task/{id}/edit', [TaskController::class,'edit'])->name('edit');
//update Route
Route::patch('/task/{id}', [TaskController::class,'update'])->name('update');
//delete Route
Route::delete('/task/{id}', [TaskController::class,'destroy'])->name('delete');




