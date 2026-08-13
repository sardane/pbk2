<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index'])->name('students.index');

Route::get('/insert', [StudentController::class, 'create'])->name('students.create');
Route::post('/insert', [StudentController::class, 'store'])->name('students.store');

Route::get('/update/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/update/{id}', [StudentController::class, 'update'])->name('students.update');

Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->name('students.destroy');