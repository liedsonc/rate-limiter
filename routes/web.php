<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::resource('test', TestController::class);
