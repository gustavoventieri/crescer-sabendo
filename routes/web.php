<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/index');
});
Route::get('/donates', function () {
    return view('user/doacoes');
});
Route::get('/account', function () {
    return view('user/account');
});
Route::get('/courses', function () {
    return view('user/courses');
});
Route::get('/signin', function () {
    return view('user/signIn');
});
Route::get('/signup', function () {
    return view('user/signUp');
});
Route::get('/admin', function () {
    return view('admin/adminPage');
});
Route::get('/aprovarong', function () {
    return view('admin/aprovarOng');
});

