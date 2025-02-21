<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', MessageController::class)->name('contact.submit');

// Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');

Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
