<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.welcome');
});

Route::resource('contacts', ContactController::class);
