<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [IndexController::class, 'index']);
Route::post('/contact', [IndexController::class, 'send'])->name('contact.send');