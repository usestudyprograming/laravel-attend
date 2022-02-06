<?php

use App\Http\Controllers\AttendController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('attends/index', [AttendController::class, 'index'])->name('attends.index');

Route::post('attends/form', [AttendController::class, 'attend']);

Route::resource('tasks', TaskController::class);
