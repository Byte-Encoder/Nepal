<?php

use App\Livewire\About;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('about', About::class)->name('about');
