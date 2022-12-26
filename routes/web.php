<?php

use Illuminate\Support\Facades\Route;


// User Auth
Auth::routes();

Route::get('/','App\Http\Controllers\Frontend\PageController@home');

// Admin User Auth
Route::get('admin/login','App\Http\Controllers\Auth\AdminLoginController@showLoginForm');
Route::post('admin/login','App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login');// put route name() beacuse using this route name in admin_login.blade.php

Route::post('admin/logout','App\Http\Controllers\Auth\AdminLoginController@logout')->name('admin.logout');// put route name() beacuse using this route name in admin_login.blade.php


