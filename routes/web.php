<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipe', function () {
    return view('recipe');
});

Route::get('/recipe2', function () {
    return view('recipe2');
});
Route::get('/recipe3', function () {
    return view('recipe3');
});
Route::get('/recipe4', function () {
    return view('recipe4');
});

