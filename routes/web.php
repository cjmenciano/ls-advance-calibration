<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');;
Route::get('/iso', [HomeController::class, 'iso']);
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/quote', [HomeController::class, 'quote'])->name('quote');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/trainingprograms', [HomeController::class, 'trainingprograms'])->name('trainingprograms');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/quoteForm', [HomeController::class, 'handleFormQuote'])->name('send-quote');
Route::post('/contactForm', [HomeController::class, 'handleFormContact'])->name('send-contact');

