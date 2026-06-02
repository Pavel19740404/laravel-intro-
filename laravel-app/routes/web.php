<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('groups', GroupController::class)->only(['index', 'create', 'store', 'show']);
Route::get('groups/{group}/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('groups/{group}/students', [StudentController::class, 'store'])->name('students.store');
Route::get('groups/{group}/students/{student}', [StudentController::class, 'show'])->name('students.show');