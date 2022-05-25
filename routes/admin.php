<?php

use App\Http\Controllers\Admin;

// все роуты для админа

Route::get('/login', [Admin\LoginController::class, 'index'])->name('login.index');
Route::post('/login', [Admin\LoginController::class, 'login'])->name('login');

Route::middleware(['auth', 'group:admin'])
    ->group(function () {

        Route::get('/', function () {
            return view('admin.index');
        })->name('index');

        Route::get('/register', [Admin\RegisterController::class, 'index'])->name('register.index');
        Route::post('/register', [Admin\RegisterController::class, 'register'])->name('register');


        Route::get('/admins', [Admin\UsersController::class, 'admins'])->name('admins');
        Route::get('/clients', [Admin\UsersController::class, 'clients'])->name('clients');


        Route::get('/roofs', [Admin\ServiceController::class, 'roofs'])->name('roof');
        Route::get('/roofs/{id}', [Admin\ServiceController::class, 'roofDetail'])->name('roof.detail');
        Route::post('/roofs/{id}', [Admin\ServiceController::class, 'updateRoof'])->name('roof.detail.update');


        Route::get('/projects/', [Admin\ServiceController::class, 'projects'])->name('projects.all');
        Route::get('/projects/roofs/{id}/', [Admin\ServiceController::class, 'detail_roof_project'])->name('projects.detail.roofs');
        Route::get('/projects/roofs', [Admin\ServiceController::class, 'view_all_projects'])->name('projects.all.roofs');

    });



