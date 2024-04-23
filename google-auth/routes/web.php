<?php

use App\Http\Controllers\socialauthcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

Route::get('/googlelogin', [socialauthcontroller::class, 'googleLogin']);
Route::get('/auth/google/callback', [socialauthcontroller::class, 'googleHandle']);

Route::get('/logout', [socialauthcontroller::class, 'logout']);
