<?php

use Illuminate\Support\Facades\Route;
//user login
Route::match(['post','get'],'/login/{next?}',['App\Http\Controllers\Auth\AuthController','login'])->name('login');
//Admin login
Route::match(['post','get'],'/admin/login',['App\Http\Controllers\Auth\AuthController','admin_login'])->name('admin.login');
//user register
Route::match(['post','get'],'/register',['App\Http\Controllers\Auth\AuthController','register'])->name('register');

Route::get('/', function () {
    return view('welcome');
})->name('home');
