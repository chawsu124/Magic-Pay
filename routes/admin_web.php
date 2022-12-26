<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|https://ui-avatars.com/api/?name={{auth()->guard('admin_user')->user()->name}}
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|{{auth()->guard('admin_user')->user()->name}}
|{{route('admin.admin-user.index')}} {{ Auth::user()->name }}  
|Route::resource('admin-user','App\Http\Controllers\Backend\AdminUserController@home')

*/

Route::prefix('admin')->name('admin.')->middleware('auth:admin_user')->group(function(){
    Route::get('/','App\Http\Controllers\Backend\PageController@home')->name('home');
    
    Route::resource('admin-user','App\Http\Controllers\Backend\AdminUserController');

    Route::get('admin-user/datatable/ssd','App\Http\Controllers\Backend\AdminUserController@ssd');
});


//$2a$10$SsPUBugkPi0PcoUnuSGpv.5hOtVvdRMvqvXjFz6FodSJ5oXcnlAjW // 12345678
