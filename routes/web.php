<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function(){
    Route::get('/', App\Livewire\Guest\Welcome::class)->name('guest.welcome');
    Route::get('/login', App\Livewire\Guest\Login::class)->name('login');
    Route::get('/article', App\Livewire\Guest\Article::class)->name('guest.article');
});
