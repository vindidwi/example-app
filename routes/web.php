<?php

use Illuminate\Support\Facades\Route;


Route::view('/register', 'register');
Route::view('/', 'login');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});
