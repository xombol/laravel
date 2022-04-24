<?php

use App\Http\Controllers\Admin;

// все роуты для админа

Route::get('/login', [Admin\LoginController::class,'index'])->name('login.index');
Route::post('/login', [Admin\LoginController::class,'login'])->name('login');
Route::middleware('auth')
    ->group(function () {

    Route::get('/logout', [Admin\LoginController::class,'logout'])->name('logout');
    Route::get('/', function () { return view('admin.index');})->name('index');

    Route::get('/register', [Admin\RegisterController::class,'index'])->name('register.index');
    Route::post('/register', [Admin\RegisterController::class,'register'])->name('register');


    Route::get('/admins', [Admin\UsersController::class,'admins'])->name('admins');
    Route::get('/clients', [Admin\UsersController::class,'clients'])->name('clients');


    Route::get('/roofs', [Admin\ServiceController::class,'roofs'])->name('roof');
    Route::get('/roofs/{id}', [Admin\ServiceController::class,'roofDetail'])->name('roof.detail');
    Route::post('/roofs/{id}', [Admin\ServiceController::class,'updateRoof'])->name('roof.detail.update');


});





