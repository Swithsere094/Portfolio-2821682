<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', MessageController::class)->name('contact.submit');

Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::post('projects/store', [ProjectController::class, 'store'])->name('projects.store');
