<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;

Route::get('/', [ ViewController::class, 'index' ])->name('home');

Route::get('/bitm', [ ViewController::class, 'bitm' ])->name('bitm');

Route::get('/about', [ ViewController::class, 'about' ])->name('about');

Route::get('/contact', [ ViewController::class, 'contact' ])->name('contact');




Route::post('/full-name', [ UserController::class, 'fullName' ])->name('full-name');

Route::get('/details/{id}', [ ViewController::class, 'detail' ])->name('detail');

