<?php

use Illuminate\Support\Facades\Route;

Route::match(['post','get'],'dashboard',[\App\Http\Controllers\Admin\DashboardController::class,'index'])->name(
    'admin.dashboard');
Route::match(['post','get'],'products',[\App\Http\Controllers\Admin\DashboardController::class,'product'])->name(
    'admin.product');





