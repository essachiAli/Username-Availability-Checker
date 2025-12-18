<?php

use App\Http\Controllers\UsernameController;
use Illuminate\Support\Facades\Route;

Route::view('/' , 'username-checker')->name('username.checker');
Route::get('/check-username', [UsernameController::class, 'check'])->name('username.check');
