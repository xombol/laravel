<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Front\Auth\LoginController;
use \App\Http\Controllers\Front\Auth\RegisterController;
use \App\Http\Controllers\Admin\ServiceController;

// все роуты для админа

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('user')
    ->name('user.')
    ->group(function () {

        Route::get('/', function () {
            return redirect('user/login');
        });
        Route::get('/login', [LoginController::class, 'index'])->name('login.index');
        Route::post('/login', [LoginController::class, 'login'])->name('login');

        Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
        Route::post('/register', [RegisterController::class, 'register'])->name('register');


    });
Route::middleware(['auth'])
    ->group(function () {

        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


        Route::prefix('roofs')
            ->name('roofs.')
            ->group(function () {

                Route::get('/', [ServiceController::class, 'roofs_index'])->name('index');
                Route::get('/{id}/', [ServiceController::class, 'roof_detail'])->name('detail');
                Route::post('/{id}/pdf/', [ServiceController::class, 'roof_pdf'])->name('detail_pdf');
                Route::post('/{id}/save', [ServiceController::class, 'save_project'])->name('detail_save');

            });
    });







