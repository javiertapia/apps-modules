<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('logout', App\Livewire\Actions\Logout::class)
    ->name('logout');
