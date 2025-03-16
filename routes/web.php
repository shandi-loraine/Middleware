<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CREATE ROUTES 
Route::get('/profile', function () {
    return view('profile');
})->middleware('authcheck');;
Route::get('/login', function () {
    return view('login');
});
