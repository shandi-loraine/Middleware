<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CREATE ROUTES 
Route::get('/profile', function () {
    return view('profile');
})->middleware('authcheck');; // if the user tried accessing the profile page not being authorized, it will redirect to login page.

Route::get('/login', function () {
    return view('login');
});
