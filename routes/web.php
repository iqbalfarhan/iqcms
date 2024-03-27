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
    Route::get('/', \App\Livewire\Welcome::class)->name('welcome');
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
});

Route::middleware('auth')->group(function(){
    Route::get('/home', \App\Livewire\Pages\Home::class)->name('home');
    Route::get('/profile', \App\Livewire\Pages\Profile::class)->name('profile');

    Route::get('/post', \App\Livewire\Pages\Post\Index::class)->name('post.index');
    Route::get('/post/{post}', \App\Livewire\Pages\Post\Show::class)->name('post.show');
    Route::get('/post/create', \App\Livewire\Pages\Post\Show::class)->name('post.create');
    Route::get('/post/{post}/edit', \App\Livewire\Pages\Post\Show::class)->name('post.edit');
});
