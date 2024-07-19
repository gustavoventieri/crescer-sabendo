<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/donates', function () {
    return view('donates');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/signin', function () {
    return view('signIn');
});
Route::get('/signup', function () {
    return view('signUp');
});
