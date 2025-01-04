<?php

use App\Livewire\LoginComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login', LoginComponent::class)->name('login');
