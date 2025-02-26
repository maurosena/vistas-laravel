<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    // // return "Hola Mundo.....🏠🏠";
    return view('home');

});

Route::resource('users', UserController::class);
