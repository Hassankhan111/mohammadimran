<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/skill', function () {
    return view('tools');
});

Route::get('/contect', function () {
    return view('contact');
});

/* backend-----------------------------------------------------------------------------*/
 
